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
Route::get('/', 'IndexController@index')->name('index');
Route::get('/login', 'IndexController@login')->name('login');
Route::get('/register', 'IndexController@register')->name('register');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hotel/new', HotelController::class .'@create')->name('hotel.new');
Route::resource('hotel', HotelController::class);