<?php

namespace App\Http\Controllers\Home\Products;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\admin\products\Category;
use App\Models\Admin\products\Product;
use App\Models\Cart as ModelsCart;
use App\Models\Financial;
use App\Models\Item;
use App\Models\Price;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $product = Product::findOrFail($request['id']);
        $cart = Cart::add(['id' => $product->id, 'name' => $product->title, 'qty' => $request['number'], 'price' => $product->price, 'options' => ['color' => $request['color']]]);
        return back();
    }

    public function orders()
    {
        $user = Auth::user();
        $categories = Category::where('isActive', 1)->where('level', 1)->get();
        $footer = DB::connection('mysql-settings')->table('footers')->get();
        $footer = $footer[0];
        $topLogoFooter = DB::connection('mysql-settings')->table('footer-logos')
            ->where('isActive', 1)->where('type', 'top')->where('deleted_at', null)->get();
        $bottomLogoFooter = DB::connection('mysql-settings')->table('footer-logos')
            ->where('isActive', 1)->where('type', 'bottom')->where('deleted_at', null)->get();

        $menus1 = DB::connection('mysql-settings')->table('footer-menus')
            ->where('isActive', 1)->where('type', 'widgetLabel1')->get();
        $menus2 = DB::connection('mysql-settings')->table('footer-menus')
            ->where('isActive', 1)->where('type', 'widgetLabel2')->get();
        $menus3 = DB::connection('mysql-settings')->table('footer-menus')
            ->where('isActive', 1)->where('type', 'widgetLabel3')->get();
        $menus4 = DB::connection('mysql-settings')->table('footer-menus')
            ->where('isActive', 1)->where('type', 'widgetLabel4')->get();
        $menus5 = DB::connection('mysql-settings')->table('footer-menus')
            ->where('isActive', 1)->where('type', 'widgetLabel5')->get();

        $address = Address::where('user_id', $user->id)->first();

        $count = Cart::content()->groupBy('id')->count();
        $totalPrice = Cart::subtotal();
        $price = (Cart::subtotal() * (9 / 100)) + Cart::subtotal();

        $cart = ModelsCart::where('user_id', $user->id)->where('status', 'doing')->first();
        if (isset($cart)) {
            $cart->update([
                'price' => $price
            ]);
        } else {
            $cart = ModelsCart::create([
                'user_id' => $user->id,
                'price' => $price,
                'status' => "doing",
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        return view('livewire.home.shopping.orders', compact(
            'user',
            'categories',
            'footer',
            'topLogoFooter',
            'bottomLogoFooter',
            'menus1',
            'menus2',
            'menus3',
            'menus4',
            'menus5',
            'address',
            'count',
            'totalPrice',
            'price',
            'cart'
        ));
    }

    public function addPrices(Request $request)
    {
        $user = Auth::user();
        $price = Price::findOrFail($request['id']);
        $priceTotal = (Cart::subtotal() * (9 / 100)) + Cart::subtotal();

        Cart::add(['id' => $price->product_id, 'name' => $price->product->title, 'qty' => "1", 'price' => $price->price]);
        foreach (Cart::content() as $row) {
            $item = Item::create([
                'user_id' => Auth::id(),
                'product_id' => $row->id,
                'vendor_id' => $request['vendor_id'],
                'price' => $row->price,
                'number' => $row->qty
            ]);


            Financial::create([
                'vendor_id' => $request['vendor_id'],
                'item_id' => $item->id,
                'price' => $row->price,
                'status' => 'unpaid'
            ]);
        }

        $cart = ModelsCart::where('user_id', $user->id)->where('status', 'doing')->first();
        if (isset($cart)) {
            $cart->update([
                'price' => $priceTotal
            ]);
        } else {
            $cart = ModelsCart::create([
                'user_id' => $user->id,
                'price' => $priceTotal,
                'status' => "doing",
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }




        return back();
    }
}
