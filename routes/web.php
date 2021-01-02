<?php

//Route::get('/', function () {
//    return view('login');
//});

//Route::get('/','Homepage@index')->name('homepage');

//Route::post('/login','sayfa@post')->name('login.post');

//Route::get('/kitaplik',function(){
//  return view('kitaplik');
//});

Route::get('/',function(){
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
