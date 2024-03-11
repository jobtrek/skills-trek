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

Route::get('/title', function () {
    return view('template.templateTitle');
});

Route::get('/create', function () {
    return view('template.templateCreate');
});

Route::get('/createForms', function () {
    return view('template.templateQuestion');
});

Route::get('/register', function () {
    return view('register.register');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/forms/valid', function () {
    return view('forms.success');
});

Route::get('/example', function () {
    return view('formsExample.exampleForms');
});

Route::get('/admin/forms', function () {
    return view('admin.forms');
});

Route::get('/admin/groups', function () {
    return view('admin.groups');
});

Route::get('/admin/settings', function () {
    return view('admin.settings');
});
