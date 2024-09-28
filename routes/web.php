<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/verifikasi', function () {
    return view('verifikasi');
});
Route::get('/setpassword', function () {
    return view('setpassword');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/sign', function () {
    return view('sign');
});
Route::get('/phone_verifikasi', function () {
    return view('phone_verifikasi');
});
Route::get('/beranda', function () {
    return view('beranda');
});
