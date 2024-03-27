<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Admin\products\Product;
use App\Models\Cart;
use App\Models\Financial;
use App\Models\Item;
use App\Models\Order;
use App\Models\Productorder;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;
use Exception;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use SoapFault;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Exceptions\PurchaseFailedException;
use SoapClient;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function purchase($id)
    {
        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)->first();

        $cartExist = Order::where('user_id', $user->id)->where('cart_id', $cart->id)->first();

        if ($cartExist) {
            return "شما این سبد خرید را پرداخت کرده اید!";
        }

        try {
            $invoice = new Invoice();

            $invoice->amount($cart->price);
            $invoice->detail('موبایل کاربر: ', $user->mobile);
            $invoice->detail('شماره سبد خرید: ', $cart->id);
            $paymentId = md5(uniqid());

            $transaction = Transaction::create([
                'user_id' => $user->id,
                'paid' => $invoice->getAmount(),
                'invoice_details' => $invoice,
                'payment_id' => $paymentId,
                'cart_id' => $cart->id
            ]);

            $callbackUrl = route('product.result', [$cart->id, 'payment_id' => $paymentId]);
            $payment = Payment::callbackUrl($callbackUrl);

            $payment->purchase($invoice, function ($driver, $transactionId) use ($transaction) {
                $transaction->transaction_id = $transactionId;
                $transaction->save();
            });

            return $payment->pay()->render();
        } catch (Exception | PurchaseFailedException | SoapFault $e) {
            $transaction->transaction_result = [
                $e->getMessage(),
                $e->getCode()
            ];
            $transaction->status = Transaction::STATUS_FAILED;
            $transaction->save();
            return "خطایی در پرداخت بوجود آمد.";
        }
    }

    public function result(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);

        if ($request->missing('payment_id')) {
            return "خطایی در پرداخت بوجود آمد...";
        }

        $transaction = Transaction::where('payment_id', $request->payment_id)->first();
        if (empty($transaction)) {
            return "خطایی در پرداخت بوجود آمد...";
        }

        if ($transaction->user_id !== Auth::id()) {
            return "خطایی در پرداخت بوجود آمد...";
        }

        if ($cart->id !== $transaction->cart_id) {
            return "خطایی در پرداخت بوجود آمد...";
        }

        // if($transaction->status !== Transaction::STATUS_PENDING){
        //     dd('5');

        //     return "خطایی در پرداخت بوجود آمد...";
        // }

        try {
            $receipt = Payment::amount($transaction->paid)
                ->transactionId($transaction->transaction_id)->verify();
            $transaction->transaction_result = $receipt;
            $transaction->status = Transaction::STATUS_SUCCESS;
            $transaction->save();

            $user = Auth::user();
            $order = Order::create([
                'user_id' => $user->id,
                'cart_id' => $cart->id,
                'price' => $transaction->paid,
                'status' => "paid",
                'created_at' => now(),
                'updated_at' => now()
            ]);

            $cart->update([
                'status' => "sending"
            ]);

            //افزودن محصولات سفارش در جدول مربوطه
            // dd(FacadesCart::content());
            $item = Item::where("cart_id", $cart->id)->get();
            foreach (FacadesCart::content() as $row) {
                if ($item->count == 0) {
                    Item::create([
                        'user_id' => Auth::id(),
                        'order_id' => $order->id,
                        'cart_id' => $cart->id,
                        'product_id' => $row->id,
                        'price' => $row->price,
                        'number' => $row->qty
                    ]);
                } else {
                    $item = Item::where("cart_id", $cart->id)->first();
                    $item->update([
                        'order_id' => $order->id,
                        'cart_id' => $cart->id
                    ]);
                    $financial = Financial::where('item_id',$item->id)->first();
                    $financial->update([
                        'status' => "paid"
                    ]);
                }
            }

            return "پرداخت شما با موفقیت انجام شد...";
        } catch (Exception | InvalidPaymentException $e) {
            if ($e->getCode() < 0) {
                $transaction->status = Transaction::STATUS_FAILED;
                $transaction->transaction_result = [
                    'message' => $e->getMessage(),
                    'code' => $e->getCode()
                ];
                $transaction->save();
            }
            return "خطایی در پرداخت بوجود آمد...";
        }
    }
}
