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
    return view('home.home');
});

Route::get('/login', function () {
    return view('login.login');
});


Route::get('/register', function () {
    return view('register.register');
});

Route::get('/admin', function () {
    return view('admin.forms');
});

Route::get('/admin/forms', function () {
    return view('admin.forms');
});

Route::get('/admin/groups', function () {
    return view('admin.groups');
});
