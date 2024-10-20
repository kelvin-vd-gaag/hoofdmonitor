@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8 mt-6">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200 mb-6">Nieuwe Taak Aanmaken</h2>

        <!-- Formulier om een nieuwe taak aan te maken -->
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <!-- Taaknaam -->
            <div class="mb-4">
                <label for="name" class="block text-sm text-gray-700 dark:text-gray-400">Taaknaam</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 form-input"
                    placeholder="Bijv. Ontwikkelen van nieuwe website"
                    required
                />
                @error('name')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Beschrijving -->
            <div class="mb-4">
                <label for="description" class="block text-sm text-gray-700 dark:text-gray-400">Beschrijving</label>
                <textarea
                    name="description"
                    id="description"
                    rows="4"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 form-textarea"
                    placeholder="Bijv. Details over de taak"
                    required
                ></textarea>
                @error('description')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Taakuren -->
            <div class="mb-4">
                <label for="hours" class="block text-sm text-gray-700 dark:text-gray-400">Toegewezen uren</label>
                <input
                    type="number"
                    name="hours"
                    id="hours"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 form-input"
                    placeholder="Aantal uren"
                    min="1"
                    required
                />
                @error('hours')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Startdatum -->
            <div class="mb-4">
                <label for="start_date" class="block text-sm text-gray-700 dark:text-gray-400">Startdatum</label>
                <input
                    type="date"
                    name="start_date"
                    id="start_date"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 form-input"
                    required
                />
                @error('start_date')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Einddatum -->
            <div class="mb-4">
                <label for="end_date" class="block text-sm text-gray-700 dark:text-gray-400">Einddatum</label>
                <input
                    type="date"
                    name="end_date"
                    id="end_date"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 form-input"
                    required
                />
                @error('end_date')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button
                    type="submit"
                    class="px-4 py-2 font-semibold text-white bg-purple-600 rounded-lg hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                    Taak Aanmaken
                </button>
            </div>
        </form>
    </div>
@endsection
