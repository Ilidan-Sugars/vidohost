<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AllVideosController;

Route::get('/', [AllVideosController::class, 'index']);
Route::get('/video/{id}', [VideoController::class, 'show']);
Route::post('/search', [AllVideosController::class, 'search'])->name('search');
Route::get('/category/{id}', [AllVideosController::class, 'category'])->name('category');
