<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
 <title>Scores Of Each Student</title>
</head>
<body>
	<x-app-layout>

        
		<div class="w-4/6 m-auto mt-6 p-6 space-y-2">
            <h1 class="text-4xl font-bold text-center text-blue-500 mb-4">Performance Records</h1>
        </div>

        
            <?php foreach($scores as $score): ?>
                <div class="w-4/6 m-auto mt-6 bg-white shadow-md rounded-lg p-6 space-y-2">
                    <p class="text-xl text-cyan-300"><span class="font-bold text-cyan-400">Student Name:</span> <?php echo $score['student_name']; ?></p>
                    <p class="text-xl text-sky-300"><span class="font-bold text-sky-400">English Score:</span> <?php echo $score['eng']; ?></p>
                    <p class="text-xl text-blue-300"><span class="font-bold text-blue-400">Japanese Score:</span> <?php echo $score['japanese']; ?></p>
                    <p class="text-xl text-indigo-300"><span class="font-bold text-indigo-400">Laravel Score:</span> <?php echo $score['laravel']; ?></p>
                    <p class="text-xl text-violet-300"><span class="font-bold text-violet-400">React Score:</span> <?php echo $score['react']; ?></p>
                </div>
                
            <?php endforeach ?>
		
        
	</x-app-layout>
</body>
</html>