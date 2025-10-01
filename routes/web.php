<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('authentication.log_in');
});
Route::get('/signup', function () {
    return view('authentication.sign_up');
});
Route::get('/login', function () {
    return view('authentication.forgot_pass');
});
