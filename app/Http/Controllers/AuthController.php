<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }
    public function signup() {
        return view('auth.signup');
    }
    public function signupUser(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'nullable',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|min:5|max:12',
            'birthdate' => 'required|date'
        ]);
     
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->birthdate = $request->birthdate;
        $user->status = null;
        $res = $user->save();
        if($res){
            return back()->with('Success', 'You have registered successfully');
        }
        else {
            return back()->with('Fail', 'Register Failed');
        }
    }
    public function loginUser(Request $request) {
        $request->validate([
            'email_username' => 'required',
            'password' => 'required|min:5|max:12'
        ]);
        $user = User::where('email', '=', $request->email_username)->orWhere('username', '=', $request->email_username)->first();
        
        if($user){
            if(Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                if($request->email_username == 'Admin' || $request->email_username == 'admin' || $request->email_username == 'admin@admin.com') {
                    $request->session()->put('admin', $user->id);
                    return redirect('/');
                }else {
                    return redirect('/')->with('Success', 'You have registered successfully');
                }
                
            }
            else{
                echo('False');
            }
        }
        else {
            return back()->with('Fail', 'Invalid Login');
        }
    }

    public function logout() {
        if(Session::has('loginId')) {
            Session::pull('loginId');
            Session::pull('admin');
            return redirect('/login');
        }
    }
    public function cart(){
        return view('cart.cart');
    }
}