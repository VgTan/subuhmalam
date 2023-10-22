<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MenuController::class, 'menus']);

// Route::get('/signup', function () {
//     return view('signup');
// });

Route::get('/signup', [AuthController::class, 'signup'])->middleware('LoggedIn');
Route::post('/signup-user',[AuthController::class,'signupUser'])->name('signup-user');
Route::get('/login', [AuthController::class, 'login'])->middleware('LoggedIn');
Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login-user');
Route::get('/addmenu', [AdminController::class, 'admin'])->middleware('isAdmin');
Route::get('/cart', [AuthController::class, 'cart'])->middleware('isLoggedIn');
Route::get('/logout', [AuthController::class, 'logout']);


Route::post('/addmenu', [AdminController::class, 'add_menu'])->name('addMenu')->middleware('isAdmin');
Route::get('/deletemenu', [AdminController::class, 'delete_menu'])->name('delete_menu')->middleware('isAdmin');
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/check', [AdminController::class,'check'])->middleware('isAdmin')->name('check');
Route::get('/statuschange', [AdminController::class,'change_status'])->middleware('isAdmin')->name('change_status');

Route::get('/menu', [MenuController::class, 'menu'])->name('menu');
Route::get('/menu/{id}', [MenuController::class, 'ShowMenu']);
Route::get('/filter', [MenuController::class, 'filter_menu'])->name('filter_menu');
// Route::post('/addtomenu', [AdminController::class, 'addtomenu'])->name('addtomenu');

Route::post('/addcart', [CartController::class, 'addcart'])->name('addtocart')->middleware('isLoggedIn')   ;
Route::get('/cart', [CartController::class, 'cart_items'])->middleware('isLoggedIn');
Route::get('/deletecart', [CartController::class, 'delete_cart'])->name('delete_cart');

Route::get('/checkout', [OrderController::class,'check_out'])->name('pay');
Route::get('/order', [OrderController::class, 'order'])->name('order')->middleware('isLoggedIn');