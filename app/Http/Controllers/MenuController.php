<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
class MenuController extends Controller
{
       public function menu() {
        if(Session::has('loginId')){
            $logginid = Session::get('loginId');
            $logged_id = User::find($logginid);
        }    
        $menu = Menu::all();
        $category = 'all';
        return view('menu.listmenu', compact('menu', 'category'));
    }
    public function filter_menu(Request $request) {
        $category = $request->input('category');
        if($category != 'all'){
        $menu = Menu::where('category', $category)->get();
        }
        else {
            $menu = Menu::all();
        }
        return view('menu.listmenu', compact('menu', 'category'));
    }
    public function ShowMenu($id) {
        $menu = Menu::find($id);
        // dd($menu);
            if ($menu) {
                return view('menu.menu', compact('menu'));
            } else {
                return back();
            }
        }
        

    public function menus() {
        $menu = Menu::all();
        return view('welcome', compact('menu'));
    }
}