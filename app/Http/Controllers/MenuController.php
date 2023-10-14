<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function ShowMenus($id) {
        $menu = Menu::find($id);
        return view('welcome', compact('menu'));
    }

    public function menus() {
        $menu = Menu::all();
        return view('welcome', compact('menu'));
    }
}
