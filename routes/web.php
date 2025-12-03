<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MatkulController;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Layout;

Route::get('/', function () {
    return view('layouts/home');
})->name('home');

Route::get('berita', function () {
    return view('layouts/berita');
})->name('berita');

Route::get('about', function () {
    return view('layouts/about');
});

Route::get('dosen', function () {
    return view('layouts/dosen');
})->name('dosen');

Route::get('matkul', function () {
    return view('layouts/matkul');
})->name('matkul');

Route::get('biaya_r', function () {
    return view('layouts/biaya_r');
})->name('biaya_r');



Route::get('admin', [AdminController::class, 'login'])->name('login');
Route::post('admin', [AdminController::class, 'login_action'])->name('login_action');
Route::post('password', [AdminController::class, 'password_action'])->name('password_action');
Route::get('logout', [AdminController::class, 'logout'])->name('logout');
Route::get('admin/dashboard', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('admin/matkul', \App\Http\Controllers\MatkulController::class);
});

Route::prefix('admin')->group(function () {

    // Matkul
    Route::get('/matkul', [MatkulController::class, 'index'])->name('admin.matkul.index');
    Route::get('/matkul/create', [MatkulController::class, 'create'])->name('admin.matkul.create');

    // Berita 
    Route::get('/berita', [BeritaController::class, 'index'])->name('admin.berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
    
    // Dosen 
    Route::get('/dosen', [BeritaController::class, 'index'])->name('admin.berita.index');
    Route::get('/dosen/create', [BeritaController::class, 'create'])->name('admin.berita.create');

});
