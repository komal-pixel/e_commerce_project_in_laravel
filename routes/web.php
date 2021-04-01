<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\productController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login','login');
Route::post('user_login','UserController@login');
Route::get('product','productController@product');
Route::get('product_details/{id}','productController@product_details');
Route::post('query','productController@search');
Route::post('addToCart','productController@addToCart');

Route::get('/logout',function(){
	Session::forget('user');
	return view('/login');
});

Route::get('cartList','productController@cartList');
Route::get('removeitem/{id}','productController@removeItem');
