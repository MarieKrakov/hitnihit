<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FoodController;

Route::middleware(['auth'])->group(function () {
    Route::get('/foods', [FoodController::class, 'foods'])->name('foods');
    Route::post('/foods', [FoodController::class, 'store'])->name('foods.store'); 
    Route::delete('/foods/{food}', [FoodController::class, 'destroy'])->name('foods.destroy');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); 
});

Route::view('/', 'index');

Route::get('/login', [AuthController::class, 'show'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');