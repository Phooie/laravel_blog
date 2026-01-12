<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
 <title>Scores Of Each Student</title>
</head>
<body>
	<x-app-layout>
		<div class="w-4/6 m-auto mt-6 bg-white shadow-md rounded-lg p-6 space-y-2">
			<h1 class="text-4xl font-bold text-center text-blue-500 mb-4">Performance Records</h1>
			<ul class="list-disc list-inside">
				<?php foreach($scores as $score): ?>
				<li class="text-gray-800 font-medium hover:text-blue-500 transition-colors">
                    <ul>Student Name:   <?php echo $score['student_name']; ?></ul>
                    <ul>English Score:  <?php echo $score['eng']; ?></ul>
                    <ul>Japanese Score: <?php echo $score['japanese']; ?></ul>
                    <ul>Laravel Score:  <?php echo $score['laravel']; ?></ul>
                    <ul>React Score:    <?php echo $score['react']; ?></ul>    
                    
				</li>
				<?php endforeach ?>
			</ul>
		</div>
	</x-app-layout>
</body>
</html>