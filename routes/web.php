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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/', 'Controller@Index')->name("home");
Route::get('/trang-huy', 'HomeController@Huy');
Route::get('/about', 'HomeController@About');
Route::get('/admin-login', 'AdminController@Login');
=======
Route::get('/','HomeController@Index')->name("home");
>>>>>>> 948e848bef97812653e81d9cbc3aa03aa8f8107e
=======
Route::get('/','HomeController@Index')->name("home");
>>>>>>> f2a946c39c62983bef477637e3f8ef2e4814b404
=======
Route::get('/', 'HomeController@Index')->name("home");
Route::get('/all-product', 'ProductController@AllProduct')->name('allproduct');
Route::get('/search-product', 'ProductController@Search')->name('search');
Route::get('/product-details/{product_slug}', 'ProductController@DetailsProduct')->name('details');
/*Đăng ký*/
Route::post('/dangky','HomeController@dangky')->name('dangky');
/*Đăng nhập*/
Route::post('/dangnhap','HomeController@dangnhap')->name('dangnhap');
/*Đăng xuất*/
    Route::get('logout', function(){
        session()->flush();
        // $tinh = DB::select("SELECT Tên FROM tinh");
        return redirect(route("home"));
    })->name('logout');
>>>>>>> b7d73a9e4e5518a2495ba97c12131cc4037e479e
