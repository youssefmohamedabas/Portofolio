<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

// Define your routes here
Route::get('/', [GeneralController::class, 'index'])->name('home');
Route::get('/about', [GeneralController::class, 'about'])->name('about');
Route::get('/projects', [GeneralController::class, 'projects'])->name('projects');
Route::get('/photos', [GeneralController::class, 'photos'])->name('photos');