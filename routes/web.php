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


Auth::routes();
//routes home page
Route::get('/', 'IndexController@index')->name('index');
Route::get('/login', 'IndexController@login')->name('login');
Route::get('/register', 'IndexController@register')->name('register');
Route::get('/home', 'HomeController@index')->name('home');

//routes for hotel page
Route::get('/hotel/new', HotelController::class .'@create')->name('hotel.new');
Route::post('/hotel/store', HotelController::class .'@store')->name('store');
Route::get('/hotel/index',HotelController::class.'@getHotelAfterSearch')->name('hotel.index');
Route::get('/hotel/login',HotelController::class.'@login')->name('hotel.login');

//routes for admin hotels
Route::get('/admin/admin',HotelController::class.'@index')->name('admin.dashboard');
