<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AllVideosController;

Route::get('/', [AllVideosController::class, 'index']);
Route::get('/video/{id}', [VideoController::class, 'show']);
