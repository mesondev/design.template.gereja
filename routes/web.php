<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('jemaat', App\Http\Controllers\JemaatController::class)
      ->middleware('auth');
      Route::resource('keluarga', KeluargaController::class)->middleware('auth');
      Route::resource('baptis', BaptisController::class)->middleware('auth');
      Route::resource('pernikahan', PernikahanController::class)->middleware('auth');
      Route::get('/laporan/jemaat/pdf',[JemaatController::class,'exportPdf']);
     
 Route::get('/api/dashboard-stats', [App\Http\Controllers\DashboardController::class,'stats'])
    ->middleware('auth');

require __DIR__.'/auth.php';
