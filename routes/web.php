<?php

use App\Models\CliScores;
use App\Models\GameScore;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
        $gameScores = GameScore::orderBy('score', 'asc')->get();
        $cliScores = CliScores::orderBy('score', 'asc')->get();

        return view('welcome', [
            'gameScores' => $gameScores,
            'cliScores' => $cliScores
        ]);
});
