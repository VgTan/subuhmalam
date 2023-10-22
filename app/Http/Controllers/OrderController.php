<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Cart;
use App\Models\User;

class OrderController extends Controller
{
    public function check_out(Request $request) {
        $userid = session('loginId');
        $items = Cart::where('id_user', $userid)->get();
        $user = User::where('id', $userid)->get();
        // dd($items);
        $order = new Order;
        if (count($items) != 0) {
            $order->user_id = $userid;
            $order->status = $request->status;
            $order->save();
            
            $order_id = $order->id;

            foreach ($items as $item) {
                $orderDetail = new OrderDetail;
                $orderDetail->order_id = $order_id;
                $orderDetail->item = $item->name;
                $orderDetail->username = $user->pluck('username')->implode(', ');
                $orderDetail->qty = $item->quantity;
                $orderDetail->save();
            }
        }
        $items->each(function ($item) {
            $item->delete();
        });
        return back(); 
    }
    public function order(Request $request) {
        $userid = session('loginId');
        $order = Order::where('user_id', $userid)->get();
        $detail = OrderDetail::all();
        return view('menu.order', compact('order', 'detail'));
    } 
}