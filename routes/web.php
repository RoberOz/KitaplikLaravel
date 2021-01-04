<?php

//Route::get('/', function () {
//    return view('login');
//});

//Route::post('/login','sayfa@post')->name('login.post');

Route::get('/', function () {
    return view('anasayfa');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','CrudController');
