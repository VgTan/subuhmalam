<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addcart(Request $request) {
        $request->validate([
            'quantity' => 'required'
        ]);
        $user = session('loginId');
        $menu = Menu::find($request->id);
        $isAdded = Cart::where('id_menu', $menu->id)->where('id_user', $user)->first();
        if(!$isAdded) {
            $cart = new Cart;
            $cart->quantity = $request->quantity;
            $cart->id_user = $user;
            $cart->id_menu = $menu->id;
            $cart->name = $menu->menu_name;
            $cart->price = $menu->price * $request->quantity;
            $cart->image = $menu->image;
            $res = $cart->save();
        }
        else {
            $isAdded->quantity = $isAdded->quantity + $request->quantity;
            $isAdded->price = $menu->price * $isAdded->quantity;
            $isAdded->save();   
        }
        
        
        return back();
        // return redirect('menu.cart', compact($cart));
    }

    public function cart_items() {
        $user = session('loginId');
        $cart = Cart::where('id_user', $user)->get();
        // dd($cart);
        return view('menu.cart', compact('cart'));
    }

    public function delete_cart(Request $request) {
        $cart = Cart::find($request->id);
        // dd($menu);
        $cart->delete();
        return back();  
    }
}