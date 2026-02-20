<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\User;
use Illuminate\Support\Facades\Route;


// FRONTEND
Route::get('/', [HomeController::class, 'home'])->name('home');

// ACCOUNT
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', User::class])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// ADMIN
Route::prefix('admin')->middleware(['auth', Admin::class])->group(function (){
    // Affichage de la page de l'admin
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Deconnexion de la page de l'admin
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');


});
