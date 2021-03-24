<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@Index')->name("home");
Route::get('/user-register', 'UserController@Register')->name("dangky");
Route::post('/user-login', 'UserController@Login')->name('dangnhap');
Route::get('/all-product', 'ProductController@AllProduct')->name('allproduct');
Route::get('/search-product', 'ProductController@Search')->name('search');
Route::get('/product-details/{product_slug}', 'ProductController@DetailsProduct')->name('details');
