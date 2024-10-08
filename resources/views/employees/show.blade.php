@extends('layouts.app')

@section('content')

    <!-- Alpine.js script alleen in deze Blade -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <div class="container px-6 mx-auto grid"
         x-data="{ isModalOpen: false, isEditHoursModalOpen: false, selectedTask: null }">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">{{ $employee->name }}</h2>

        @if(session('success'))
            <div class="alert alert-success bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input readonly class="bg-gray-200 text-gray-500 cursor-not-allowed focus:outline-none p-2 rounded block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" value="{{ $employee->name }}"/>
            </label>
            <label class="block text-sm mt-2">
                <span class="text-gray-700 dark:text-gray-400">E-mail</span>
                <input readonly class="bg-gray-200 text-gray-500 cursor-not-allowed focus:outline-none p-2 rounded block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" value="{{ $employee->email }}"/>
            </label>

            <div class="mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Account Type:</span>
                @if($employee->user_id)
                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">Gekoppeld account</span>
                @else
                    <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">Niet gekoppeld</span>
                @endif
            </div>
        </div>

        <!-- Tabel met taken -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Taak</th>
                        <th class="px-4 py-3">Uren</th>
                        <th class="px-4 py-3">Deadline</th>
                        <th class="px-4 py-3">Acties</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($employee->tasks as $task)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div>
                                        <p class="font-semibold"><a href="{{ url('/tasks') }}/{{ $task->slug }}">{{ $task->name }}</a></p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $task->hours }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                @if($task->deadline)
                                    {{ $task->deadline }}
                                @else
                                    Geen deadline
                                @endif

                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4 text-sm">
                                    <button @click="isEditHoursModalOpen = true; selectedTask = {{ $task->toJson() }}" class="px-2 py-2 text-sm font-medium leading-5 text-blue-600 rounded-lg hover:text-blue-700 focus:outline-none focus:shadow-outline-purple">
                                        Bewerk uren
                                    </button>
                                    <button @click="isModalOpen = true; selectedTask = {{ $task->toJson() }}" class="px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg hover:text-red-700 focus:outline-none focus:shadow-outline-purple">
                                        Ontkoppel taak
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal voor het ontkoppelen van taken -->
        <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:leave="transition ease-in duration-150" class="fixed inset-0 z-30 flex items-center justify-center bg-black bg-opacity-50">
            <div x-show="isModalOpen" @click.away="isModalOpen = false" class="w-full px-6 py-4 bg-white rounded-lg sm:max-w-xl dark:bg-gray-800">
                <header class="flex justify-end">
                    <button @click="isModalOpen = false" class="text-gray-400 hover:text-gray-700">&times;</button>
                </header>
                <div class="mt-4 mb-6">
                    <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">Taak van medewerker ontkoppelen</p>
                    <p class="text-lg text-gray-600 dark:text-gray-400"><strong>Taaknaam:</strong> <span x-text="selectedTask?.name"></span></p>
                    <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Oorspronkelijke uren:</strong> <span x-text="selectedTask?.initial_hours"></span></p>
                    <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Deadline:</strong> <span x-text="selectedTask?.deadline"></span></p>
                </div>
                <footer class="flex justify-end">
                    <button @click="isModalOpen = false" class="px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-gray-300 rounded-lg">Annuleren</button>
                    <form method="POST" action="/tasks/delete" x-show="selectedTask">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="task_id" :value="selectedTask.id">
                        <label>Hoeveel uren van deze taak moeten weer terug naar de taak na ontkoppelen?
                            <input type="number" name="task_hours" :value="selectedTask.initial_hours" min="0">
                        </label>
                        <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">Ontkoppel taak</button>
                    </form>
                </footer>
            </div>
        </div>

        <!-- Modal voor het aanpassen van uren -->
        <div x-show="isEditHoursModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:leave="transition ease-in duration-150" class="fixed inset-0 z-30 flex items-center justify-center bg-black bg-opacity-50">
            <div x-show="isEditHoursModalOpen" @click.away="isEditHoursModalOpen = false" class="w-full px-6 py-4 bg-white rounded-lg sm:max-w-xl dark:bg-gray-800">
                <header class="flex justify-end">
                    <button @click="isEditHoursModalOpen = false" class="text-gray-400 hover:text-gray-700">&times;</button>
                </header>
                <div class="mt-4 mb-6">
                    <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">Bewerk toegewezen uren voor:</p>
                    <p class="text-lg text-gray-600 dark:text-gray-400"><strong>Taaknaam:</strong> <span x-text="selectedTask?.name"></span></p>
                    <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Oorspronkelijke uren:</strong> <span x-text="selectedTask?.initial_hours"></span></p>
                </div>
                <footer class="flex justify-end">
                    <form method="POST" action="/tasks/update-hours" x-show="selectedTask">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="task_id" :value="selectedTask.id">
                        <label>Nieuwe aantal uren:
                            <input type="number" name="task_hours" :value="selectedTask.hours" min="0" class="border rounded p-2">
                        </label>
                        <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">Update uren</button>
                    </form>
                </footer>
            </div>
        </div>
    </div>

@endsection
