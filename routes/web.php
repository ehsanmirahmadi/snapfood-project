<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user-management');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});

