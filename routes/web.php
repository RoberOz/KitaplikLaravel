<?php

//Route::get('/', function () {
//    return view('login');
//});

//Route::post('/login','sayfa@post')->name('login.post');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
