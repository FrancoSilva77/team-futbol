<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/crear-jornada', [AdminController::class, 'create'])->middleware(['auth', 'verified'])->name('jornada.create');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';

Route::get('/{user:slug}', [GameController::class, 'index'])->name('games.index');