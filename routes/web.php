<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YoutubeController;

Route::get('/', [YoutubeController::class, 'index'])->name('index');
Route::get('/results', [YoutubeController::class, 'results'])->name('results');
Route::get('/favoritos', [YoutubeController::class, 'favoritos'])->name('favoritos');
Route::get('/watch/{id}', [YoutubeController::class, 'watch'])->name('watch');
