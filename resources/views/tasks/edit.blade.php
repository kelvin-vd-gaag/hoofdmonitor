@extends('layouts.app')

@section('content')

    <div class="container px-6 mx-auto grid">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mt-4 rounded relative"
                 role="alert">
                <strong class="font-bold">{{ session('success') }}</strong>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mt-4 rounded relative"
                 role="alert">
                <strong class="font-bold">{{ session('error') }}</strong>
            </div>
        @endif
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Taak
                bewerken: {{ $task->name }}</h2>
        <form action="{{ route('tasks.update', $task->slug) }}" method="POST">
            @csrf
            @method('PUT') <!-- Dit zorgt ervoor dat het een PUT request is, zoals vereist voor updates -->

            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

                <!-- Task Name -->
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Taak naam</span>
                    <input
                        type="text"
                        name="name"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        value="{{ old('name', $task->name) }}"
                        required
                    />
                </label>

                <!-- Task Description -->
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Taak beschrijving</span>
                    <textarea
                        name="description"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-textarea"
                        rows="3"
                    >{{ old('description', $task->description) }}</textarea>
                </label>

                <!-- Task Hours -->
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Tijdsduur (uren)</span>
                    <input
                        type="number"
                        name="hours"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        value="{{ old('hours', $task->hours) }}"
                        required
                    />
                </label>

                <!-- Task Deadline -->
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Deadline</span>
                    <input
                        type="date"
                        name="deadline"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                        value="{{ old('deadline', is_object($task->deadline) ? $task->deadline->format('Y-m-d') : $task->deadline) }}"
                        required
                    />

                </label>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button
                        type="submit"
                        class="px-4 py-2 text-sm font-medium text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    >
                        Taak Bijwerken
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
