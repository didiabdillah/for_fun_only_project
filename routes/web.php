<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home/index');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/u/{username}', function () {
    return view('user/my_post');
});

Route::get('/u/{username}/saved', function () {
    return view('user/saved_post');
});

Route::get('/u/{username}/liked', function () {
    return view('user/liked_post');
});
