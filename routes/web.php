<?php

Route::get('/', function () {
    return view('login');
});

Route::post('/login','RequestMethodu@post')->name('login.post');
