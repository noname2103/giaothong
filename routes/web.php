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
// Trang chu cua website
Route::get('home','UserController@ViewHome')->name('ViewHome');
// Dang xuat tai khoan
Route::get('logout','UserController@logout')->name('logout');
// Dang tai mot bai viet len newfeed
Route::post('upstt','UserController@upstt')->name('UpStt');
// Dang tai binh luan mot bai viet
Route::get('postcomment{idstt}/{content}','UserController@PostComment')->name('PostComment');
// Xem ban do
Route::get('map','UserController@ViewMap')->name('ViewMap');
// Ping ket xe
Route::get('pingtraffic{lat}/{lon}','UserController@PingTraffic')->name('PingTraffic');
// Tra cuu tuyen xe buyt
Route::get('bussearch','UserController@BusSearch')->name('BusSearch');

