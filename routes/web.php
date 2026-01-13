<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Layout;
use PhpParser\Node\Expr\Include_;

Route::get('berita', function () {
    return view('layouts/berita/berita');
})->name('berita');

Route::get('about', function () {
    return view('layouts/about');
})->name('about');

Route::get('dosen', function () {
    return view('layouts/dosen');
})->name('dosen');

Route::get('biaya_r', function () {
    return view('layouts/biaya_r');
})->name('biaya_r');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('home', [HomeController::class, 'index']);
Route::get('mata-kuliah', [MatkulController::class, 'list_matkul'])->name('matkul');
Route::get('mata-kuliah/search', [MatkulController::class, 'search'])->name('matkul.search');
Route::get('berita', [BeritaController::class, 'list_berita'])->name('berita');
Route::get('/berita/read/{slug}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('agenda', [AgendaController::class, 'list_agenda'])->name('agenda');
Route::get('dosen', [DosenController::class, 'list_dosen'])->name('dosen');


// Backend Routes Inside Folder Backend
include('Backend/Backend.php');