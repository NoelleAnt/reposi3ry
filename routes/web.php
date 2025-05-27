<?php

use App\Http\Controllers\GamesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get-csrf-token', function () {
    return response()->json(['_token' => csrf_token()]);
});

// Route for showing all games
Route::get('/games', [GamesController::class, 'index'])->name('games.index');

// Route for showing a specific game
Route::get('/games/{id}', [GamesController::class, 'show'])->name('games.show');

// Route for deleting a specific game
Route::delete('/games/{id}', [GamesController::class, 'destroy'])->name('games.destroy');
