<?php

use App\Http\Controllers\ScoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Scores API routes - remove the leading slash since 'api' prefix is already added
Route::get('scores/game', [ScoreController::class, 'getGameScores']);
Route::get('scores/cli', [ScoreController::class, 'getCliScores']);
Route::post('scores/game', [ScoreController::class, 'storeGameScore']);
Route::post('scores/cli', [ScoreController::class, 'storeCliScore']);
