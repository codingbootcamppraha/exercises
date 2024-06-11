<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/movies', [App\Http\Controllers\MovieController::class, 'index']);
Route::get('/movies/shawshank-redemption', [App\Http\Controllers\MovieController::class, 'shawshank']);
Route::get('/movies/show', [App\Http\Controllers\MovieController::class, 'show']);
Route::get('/movies/genre/action', [App\Http\Controllers\MovieController::class, 'genreAction']);
Route::get('/movies/genre', [App\Http\Controllers\MovieController::class, 'byGenre']);
Route::get('/top-rated-movies', [App\Http\Controllers\MovieController::class, 'topRated']);
Route::get('/search', [App\Http\Controllers\MovieController::class, 'search']);
Route::get('/awards', [App\Http\Controllers\AwardController::class, 'index']);
Route::get('/genres', [App\Http\Controllers\GenreController::class, 'index']);
Route::get('/actors/detail', [App\Http\Controllers\ActorController::class, 'show']);
