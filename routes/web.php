<?php

//Route::get('/', function () {
//    return view('login');
//});

//Route::post('/login','sayfa@post')->name('login.post');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
