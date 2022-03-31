<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProjectController::class,'index'])->name('home');


Route::get('/single_product',function(){
    return redirect('/');
});

Route::get('/products',[ProjectController::Class,'products'])->name('products');

Route::get('/about',function(){
    return view('about');
});


Route::get('/single_product/{id}',[ProjectController::Class,'single_product'])->name('single_product');

Route::get('/cart',[CartController::Class,'cart'])->name('cart');



Route::post('/add_to_cart',[CartController::Class,'add_to_cart'])->name('add_to_cart');

Route::get('/add_to_cart',function(){
    return redirect('/');
});