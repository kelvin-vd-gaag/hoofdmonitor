@extends('layouts.app')

@section('content')

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Profieloverzicht
        </h2>

        <!-- Formulier voor het wijzigen van werknemersgegevens -->
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto bg-white dark:bg-gray-800 p-6 rounded-lg">
                <!-- Formulier voor het wijzigen van werknemersgegevens -->
                <form action="" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Naam -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Naam</label>
                        <input type="text" name="name" id="name" value="{{ $employee->name }}" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-input dark:text-gray-300 dark:focus:shadow-outline-gray focus:border-purple-400 focus:outline-none focus:shadow-outline-purple" required>
                    </div>

                    <!-- Email (readonly) -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Email</label>
                        <input type="email" name="email" id="email" value="{{ $employee->email }}" class="block w-full mt-1 text-sm bg-gray-100 dark:bg-gray-700 dark:text-gray-300 form-input" disabled>
                    </div>

                    <!-- Opslaan Button -->
                    <div class="mt-6">
                        <button type="submit" class="w-full px-4 py-2 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Gegevens Opslaan
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
