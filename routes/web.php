<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AdminController::class, 'login'])->name('login');
Route::post('login', [AdminController::class, 'login_action'])->name('login_action');
Route::post('password', [AdminController::class, 'password_action'])->name('password_action');
Route::get('logout', [AdminController::class, 'logout'])->name('logout');
