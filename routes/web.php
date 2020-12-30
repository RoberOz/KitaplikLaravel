<?php

Route::get('/', function () {
    return view('login');
});

Route::post('/login','request_methodu@post')->name('login.post');
