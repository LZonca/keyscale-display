<!-- resources/views/scores.blade.php -->
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Scores</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
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

            <?php if($gameScores->count() > 0): ?>
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
                        <?php $__currentLoopData = $gameScores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
                                <td class="py-2"><?php echo e($score->name); ?></td>
                                <td class="py-2"><?php echo e($score->score); ?></td>
                                <td class="py-2"><?php echo e($score->difficulty ?? 'normal'); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p class="text-[#706f6c] dark:text-[#A1A09A]">No game scores available.</p>
            <?php endif; ?>
        </div>

        <!-- CLI Scores -->
        <div class="bg-white dark:bg-[#161615] rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-medium mb-4 text-[#F53003] dark:text-[#F61500]">
                CLI Scores
            </h2>

            <?php if($cliScores->count() > 0): ?>
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
                        <?php $__currentLoopData = $cliScores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
                                <td class="py-2"><?php echo e($score->name); ?></td>
                                <td class="py-2"><?php echo e($score->score); ?></td>
                                <td class="py-2"><?php echo e($score->letters ?? '0'); ?></td>
                                <td class="py-2"><?php echo e($score->avg_time ?? '0'); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p class="text-[#706f6c] dark:text-[#A1A09A]">No CLI scores available.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Back button -->
    <div class="mt-8">
        <a href="<?php echo e(url('/')); ?>" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
            Back to Home
        </a>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\Users\leozo\PycharmProjects\JeuLicence\scoresDisplay\resources\views/welcome.blade.php ENDPATH**/ ?>