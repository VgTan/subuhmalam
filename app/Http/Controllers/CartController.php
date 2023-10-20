<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addcart(Request $request) {
        $request->validate([
            'quantity' => 'required'
        ]);
        $user = session('loginId');
        $menu = Menu::find($request->id);
        $cart = new Cart;
        $cart->quantity = $request->quantity;
        $cart->id_user = $user;
        $cart->id_menu = $menu->id;
        $cart->name = $menu->menu_name;
        $cart->price = $menu->price;
        $cart->image = $menu->image;
        $res = $cart->save();
        return back();
        // return redirect('menu.cart', compact($cart));
    }

    public function cart_items() {
        $user = session('loginId');
        $cart = Cart::where('id_user', $user)->get();
        return view('menu.cart', compact('cart'));
    }
}
