<x-app-layout>
    <div class="min-h-screen bg-gray-50 py-10 mt-8">

        <div class="max-w-xl mx-auto bg-white rounded-xl shadow-lg p-8">

            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">
                Input Scores
            </h2>

            <form action="/scores/update/{{ $scores-> id}}" method="POST" class="space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Student Name
                    </label>
                    <input type="text" name="student_name" value="{{$scores->student_name}}" class="w-full rounded-md border-gray-300 px-4 py-2
                               focus:border-blue-500 focus:ring-blue-500">
                    @error('student_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        English Score
                    </label>
                    <input type="number" name="eng" value="{{$scores->eng}}"
                        class="w-full rounded-md border-gray-300 px-4 py-2
                               focus:border-blue-500 focus:ring-blue-500">
                    @error('eng')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Japanese Score
                    </label>
                    <input type="number" name="japanese" value="{{$scores->japanese}}"
                        class="w-full rounded-md border-gray-300 px-4 py-2
                               focus:border-blue-500 focus:ring-blue-500">
                    @error('japanese')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Laravel Score
                    </label>
                    <input type="number" name="laravel" value="{{$scores->laravel}}"
                        class="w-full rounded-md border-gray-300 px-4 py-2
                               focus:border-blue-500 focus:ring-blue-500">
                        @error('laravel')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        React Score
                    </label>
                    <input type="number" name="react" value="{{$scores->react}}"
                        class="w-full rounded-md border-gray-300 px-4 py-2
                               focus:border-blue-500 focus:ring-blue-500">
                    @error('react')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Comment
                    </label>
                    <textarea name="comment" rows="4" value="{{$scores->comment}}"
                        class="w-full rounded-md border-gray-300 px-4 py-2
                               focus:border-blue-500 focus:ring-blue-500"></textarea>
                    @error('comment')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Button -->
                <div class="pt-4">
                    <button type="submit"
                        class="w-32 bg-blue-600 text-white font-medium
                               p-2.5 rounded-lg
                               hover:bg-blue-700
                               transition duration-200">
                        Update Score
                    </button>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>