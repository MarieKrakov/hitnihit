<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FoodController;

Route::middleware(['auth'])->group(function () { //pouze pro přihlášené
    Route::get('/foods', [FoodController::class, 'foods'])->name('foods'); //zobrazuje seznam
    Route::post('/foods', [FoodController::class, 'store'])->name('foods.store'); //může přidat novou potravinu
    Route::delete('/foods/{food}', [FoodController::class, 'destroy'])->name('foods.destroy'); //může smazat
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); //odhlášení
});

Route::view('/', 'index'); //hlavní stránka

Route::get('/login', [AuthController::class, 'show'])->name('login'); //zobrazuje přihl. formulář
Route::post('/login', [AuthController::class, 'login']); //přihlašuje
Route::get('/register', [AuthController::class, 'register'])->name('register'); //zobrazuje registrační formulář
Route::post('/register', [AuthController::class, 'store'])->name('register.store'); //přechroustá registrační údaje