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
        
            <!-- <?php foreach($scores as $score): ?>
                <div class="w-4/6 m-auto mt-6 bg-white shadow-md rounded-lg p-6 space-y-2">
                    <p class="text-xl text-cyan-300"><span class="font-bold text-cyan-400">Student Name:</span> <?php echo $score['student_name']; ?></p>
                    <p class="text-xl text-sky-300"><span class="font-bold text-sky-400">English Score:</span> <?php echo $score['eng']; ?></p>
                    <p class="text-xl text-blue-300"><span class="font-bold text-blue-400">Japanese Score:</span> <?php echo $score['japanese']; ?></p>
                    <p class="text-xl text-indigo-300"><span class="font-bold text-indigo-400">Laravel Score:</span> <?php echo $score['laravel']; ?></p>
                    <p class="text-xl text-violet-300"><span class="font-bold text-violet-400">React Score:</span> <?php echo $score['react']; ?></p>
                </div>
                
            <?php endforeach ?> -->
		
        <table class="w-full border border-blue-500">
            <thead class="bg-blue-500">
                <tr>
                    <th class="border px-4 py-2 text-xl text-white">Student Name</th>
                    <th class="border px-4 py-2 text-xl text-white">English</th>
                    <th class="border px-4 py-2 text-xl text-white">Japanese</th>
                    <th class="border px-4 py-2 text-xl text-white">Laravel</th>
                    <th class="border px-4 py-2 text-xl text-white">React</th>
                    <th class="border px-4 py-2 text-xl text-white">Comment</th>
                    <th class="border px-4 py-2 text-xl text-white"></th>

                </tr>
            </thead>

            <tbody>
                @foreach ($scores as $score)
                    <tr>
                        <td class="border px-4 py-2 text-xl bg-cyan-100 text-blue-500">{{ $score->student_name }}</td>
                        <td class="border px-4 py-2 text-xl bg-sky-100 text-blue-500">{{ $score->eng }}</td>
                        <td class="border px-4 py-2 text-xl bg-blue-100 text-blue-500">{{ $score->japanese }}</td>
                        <td class="border px-4 py-2 text-xl bg-indigo-100 text-blue-500">{{ $score->laravel }}</td>
                        <td class="border px-4 py-2 text-xl bg-violet-100 text-blue-500">{{ $score->react }}</td>
                        <td class="border px-4 py-2 text-xl bg-purple-100 text-blue-500">
                            {{ Str::limit($score->comment, 100) }}
                        </td>
                        <td class="border px-4 py-2 text-center">
                            <form
                                action="/scores/{{ $score->id }}"
                                method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this record?')"
                            >
                                @csrf
                                @method('DELETE')

                                <button class="bg-red-500 text-white px-3 py-1 rounded">
                                    Delete Record
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
	</x-app-layout>
</body>
</html>