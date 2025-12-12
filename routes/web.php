<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\DosenController;
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

// Route::get('matkul', function () {
//     return view('layouts/matkul');
// })->name('matkul');

Route::get('matkul', [MatkulController::class, 'list_matkul'])->name('matkul');
Route::get('berita', [BeritaController::class, 'list_berita'])->name('berita');

Route::get('dosen', [DosenController::class, 'list_dosen'])->name('dosen');

Route::get('biaya_r', function () {
    return view('layouts/biaya_r');
})->name('biaya_r');



Route::get('admin', [AdminController::class, 'login'])->name('login');
Route::post('admin', [AdminController::class, 'login_action'])->name('login_action');
Route::post('password', [AdminController::class, 'password_action'])->name('password_action');
Route::get('logout', [AdminController::class, 'logout'])->name('logout');
Route::get('admin/dashboard', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard');


Route::prefix('admin')->name('admin.') ->group(function () {


    Route::resource('matkul', \App\Http\Controllers\MatkulController::class);
    Route::resource('berita', \App\Http\Controllers\BeritaController::class);
    Route::resource('dosen', \App\Http\Controllers\DosenController::class);

    // Dosen
    // Route::get('/dosen', [DosenController::class, 'index'])->name('admin.dosen.index');
    // Route::get('/dosen/create', [DosenController::class, 'create'])->name('admin.dosen.create');

});
