<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function status(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $items = Item::where('user_id',Auth::id())->where('order_id',$order->id)->get();
        $address = Address::where('user_id',Auth::id())->first();
        return view('livewire.admin.products.products-order',compact('items','order','address'));
    }

    public function statusPost($id,Request $request)
    {
        $order = Order::findOrFail($id);
        $order->update([
            'status' => $request['status']
        ]);
        return back();
    }
}
