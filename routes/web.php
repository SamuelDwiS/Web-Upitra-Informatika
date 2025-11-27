<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Layout;

Route::get('/', function () {
    return view('layouts/home');
})->name('home');


Route::get('/berita', function () {
    return view('layouts/berita');
})->name('berita');

Route::get('/about', function () {
    return view('layouts/about');
});

Route::get('/akademik', function(){
    return view('layouts/akademik');
})->name('akademik');


Route::get('/matkul', function(){
    return view('layouts/matkul');
})->name('matkul');

Route::get('/biaya_r', function(){
    return view('layouts/biaya_r');
})->name('biaya_r');



// Route::get('login', [AdminController::class, 'login'])->name('login');
// Route::post('login', [AdminController::class, 'login_action'])->name('login_action');
// Route::post('password', [AdminController::class, 'password_action'])->name('password_action');
// Route::get('logout', [AdminController::class, 'logout'])->name('logout');
