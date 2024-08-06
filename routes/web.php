<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/mutasi', function () {
    return view('mutasi');
});
Route::get('/login', function () {
    return view('login');
});
