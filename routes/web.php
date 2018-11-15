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

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'register'], function () {
    Route::GET('/', 'HomeController@register')->name('register');
    Route::POST('create', 'Auth\RegisterController@create')->name('createRegister');
});
