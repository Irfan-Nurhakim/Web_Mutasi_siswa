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
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/data', function () {
    return view('data');
});
Route::get('/setting', function () {
    return view('setting');
});
Route::get('/logout', function () {
    return view('logout');
});
