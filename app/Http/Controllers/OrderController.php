<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\User;

class OrderController extends Controller
{
    public function check_out(Request $request) {
        $userid = session('loginId');
        $items = Cart::where('id_user', $userid)->get();
        $user = User::where('id', $userid)->get();
        // dd($user);
        if (count($items) != 0) {
            // Assuming the 'order' table is in the second database
            $order = new Order;
            $order->user_id = $user->pluck('id')->implode(', ');
            $order->cart_id = $items->pluck('id')->implode(', ');
            $order->username = $user->pluck('username')->implode(', ');
            $order->item = $items->pluck('name')->implode(', ');
            $order->qty = $items->pluck('quantity')->implode(', ');
            $order->save();
            $items->each(function ($item) {
                $item->delete();
            });
        }
        return back(); 
    }
}