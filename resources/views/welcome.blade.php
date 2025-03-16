<!-- resources/views/scores.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Scores</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] p-6">
<div class="max-w-7xl mx-auto">
    <h1 class="text-3xl font-semibold mb-6">Game Scores</h1>

    <div class="grid md:grid-cols-2 gap-8">
        <!-- Game Scores -->
        <div class="bg-white dark:bg-[#161615] rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-medium mb-4 text-[#F53003] dark:text-[#F61500]">
                Game Scores
            </h2>
            @if($gameScores->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                        <tr class="border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
                            <th class="py-2 text-left">Name</th>
                            <th class="py-2 text-left">Score</th>
                            <th class="py-2 text-left">Difficulty</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($gameScores as $score)
                            <tr class="border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
                                <td class="py-2">{{ $score->name }}</td>
                                <td class="py-2">{{ $score->score }}</td>
                                <td class="py-2">{{ $score->difficulty ?? 'normal' }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-[#706f6c] dark:text-[#A1A09A]">No game scores available.</p>
            @endif
        </div>

        <!-- CLI Scores -->
        <div class="bg-white dark:bg-[#161615] rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-medium mb-4 text-[#F53003] dark:text-[#F61500]">
                CLI Scores
            </h2>

            @if($cliScores->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                        <tr class="border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
                            <th class="py-2 text-left">Name</th>
                            <th class="py-2 text-left">Score</th>
                            <th class="py-2 text-left">Letters</th>
                            <th class="py-2 text-left">Avg Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cliScores as $score)
                            <tr class="border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
                                <td class="py-2">{{ $score->name }}</td>
                                <td class="py-2">{{ $score->score }}</td>
                                <td class="py-2">{{ $score->letters ?? '0' }}</td>
                                <td class="py-2">{{ $score->avg_time ?? '0' }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-[#706f6c] dark:text-[#A1A09A]">No CLI scores available.</p>
            @endif
        </div>
    </div>
</div>
</body>
</html>
