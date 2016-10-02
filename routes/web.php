<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return "Marz v1.1.0";
});

Route::get('/dashboard', 'Dashboard\IndexController@getHome');

Auth::routes();

Route::get('/home', 'HomeController@index');
