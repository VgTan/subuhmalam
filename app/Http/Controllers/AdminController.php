<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin() {
        return view('admin.addmenu');
    }
    public function add_menu(Request $request) {
        $request->validate([
            'menu_name' => 'required|unique:menus',
            'desc' => 'required|max:150',
            'category' => 'required',
            'price' => 'required',
            'menu_image' => 'required'
        ]);
        $menu = new Menu;
        $menu->menu_name = $request->menu_name;
        $menu->price = $request->price;
        // if($request->category == 'Category') {
        //     return back()->with('error', 'Please Choose Category');
        // }
        $menu->category = $request->category;
        $menu->desc = $request->desc;
        if ($request->hasFile('menu_image')) {
            $file = $request->file('menu_image');
            $fileName = $file->getClientOriginalName();
            $file->move('images/menu/', $fileName);
            $menu->image = $fileName;
        }
        $res = $menu->save();
        if($res){
            return view('admin.addmenu')->with('menu', $menu);
        }
        else {
            return back();
        }
    }
    public function delete_menu(Request $request) {
        $menu = Menu::find($request->id);
        if($menu) {
            $menu->delete();
            return back();
        }
    }
    public function check() {
        $order = Order::all();
        $detail = OrderDetail::all();
        $orderstatus = Order::select('status')->get(); 
        // dd($id);
        return view('admin.check', compact('order', 'detail', 'orderstatus'));
    }

    public function change_status(Request $request) {
        $order = Order::find($request->order_id);
        $order->status = $request->status;
        $order->save();
        return back();
    }
}