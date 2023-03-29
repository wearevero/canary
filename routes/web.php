<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

Route::get('health', HealthCheckResultsController::class);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profie group route
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route group user
Route::controller(ProfileController::class)
    ->prefix('users')
    ->middleware('auth')
    ->group(function() {
        Route::get('/', 'index')->name('users.index');
});

// Catalogue group route
Route::controller(CatalogueController::class)
    ->prefix('catalogue')
    ->middleware('auth')
    ->group(function() {
        Route::get('/', 'index')->name('catalogue.index');
});

require __DIR__.'/auth.php';
