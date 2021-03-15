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
