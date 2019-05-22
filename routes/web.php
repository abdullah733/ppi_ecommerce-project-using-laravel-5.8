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
//Route ::get('/',function(){
//    return view ('index');
//});
Route::get('/','HomeController@showHome')->name('home');
Route::get('/category/{slug}','HomeController@showProductsByCategory')->name('category');
Route::get('/about','HomeController@showAbout')->name('about');
Route::get('/register','User@showRegister')->name('register');
Route::get('/login','User@showLogin')->name('login');
//group route.....
//Route::group(['prefix'=>'admin'],function (){
//    Route::get('/create','');
//    Route::get('/lists','');
//    Route::get('/dashboard','');
//    Route::get('/users/1','');
//});


