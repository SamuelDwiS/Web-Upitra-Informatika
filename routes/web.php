<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/home');
});


Route::get('/berita', function () {
    return view('layouts/berita');
});

Route::get('/about', function () {
    return view('layouts/about');
});

Route::get('/adm/login', function () {
    return view('admin/login');
});

Route::get('login', [AdminController::class, 'login'])->name('login');
Route::post('login', [AdminController::class, 'login_action'])->name('login.action');
Route::post('password', [AdminController::class, 'password_action'])->name('password.action');
Route::get('logout', [AdminController::class, 'logout'])->name('logout');
