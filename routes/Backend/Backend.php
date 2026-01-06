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

Route::get('admin', [AdminController::class, 'login'])->name('login');
Route::post('admin', [AdminController::class, 'login_action'])->name('login_action');
Route::post('password', [AdminController::class, 'password_action'])->name('password_action');
Route::get('logout', [AdminController::class, 'logout'])->name('logout');

Route::prefix('admin')
    ->middleware('auth:admin')
    ->name('admin.')
    ->group(function () {

        Route::get('dashboard', [AdminController::class, 'dashboard'])
            ->name('dashboard');

        Route::resource('matkul', MatkulController::class);
        Route::resource('berita', BeritaController::class);
        Route::resource('dosen', DosenController::class);
        Route::resource('testimoni', TestimoniController::class);
        Route::resource('agenda', AgendaController::class);
});
?>

