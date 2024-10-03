<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/detail/{id}', [HomeController::class, 'show'])->name('detail');
Route::get('/create', [HomeController::class, 'create'])->name('create');
Route::post('/store', [HomeController::class, 'store'])->name('store');
Route::get('/delete/{id}', [HomeController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');
Route::put('/update', [HomeController::class, 'update'])->name('update');