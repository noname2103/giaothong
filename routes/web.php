<?php

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

// Trang dang nhap nguoi dung
Route::get('login','UserController@ViewLogin')->name('ViewLogin');
// Route gui thong tin den trang xu ly thong tin dang nhap
Route::post('login','UserController@PostLogin')->name('PostLogin');
// Trang dang ky nguoi dung
Route::get('register','UserController@ViewRegister')->name('ViewRegister');
// Route gui thong tin den trang xu ly thong tin dang ky
Route::post('register','UserController@PostRegister')->name('PostRegister');

Route::get('test',function(){
    return view('users.layout.navbar');
});
