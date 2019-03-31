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


Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin', 'AdminController@index')->name('home.admin');    
});


Route::group(['middleware' => 'user'], function(){
    Route::get('/user', 'User\UserController@index')->name('home.user');    
});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');