@extends('layouts.app')

@section('content')
{{--  TODO: Alleen aanpasbaar maken voor de ingelogde gebruiker  --}}
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">{{ $employee->name }}</h2>
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input readonly
                    class="bg-gray-200 text-gray-500 cursor-not-allowed focus:outline-none p-2 rounded block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    value="{{ $employee->name }}"/>
            </label>
            <label class="block text-sm mt-2">
                <span class="text-gray-700 dark:text-gray-400">E-mail</span>
                <input readonly
                    class="bg-gray-200 text-gray-500 cursor-not-allowed focus:outline-none p-2 rounded block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    value="{{ $employee->email }}"/>
            </label>

            <div class="mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Account Type:
                </span>
                @if($employee->user_id)
                    <span
                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                    >
                          Gekoppeld account
                        </span>
                @endif
                @if($employee->user_id === null)

                    <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">Niet gekoppeld</span>
                @endif
            </div>
        </div>
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
            >

                <div>
                    <p
                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                    >
                        Verantwoordelijk voor
                    </p>
                    <p
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                        @foreach($employee->tasks as $task)
                            <li><a href="{{ url('/tasks') }}/{{ $task->slug }}">{{ $task->name }}</a></li>
                        @endforeach
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
            >
                <div
                    class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            fill-rule="evenodd"
                            d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </div>
                <div>
                    <p
                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                    >
                        Totale taak belasting in uren
                    </p>
                    <p
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                        100
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
            >
                <div
                    class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
                >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                        ></path>
                    </svg>
                </div>
                <div>
                    <p
                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                    >
                        Niet ingevulde taakuren
                    </p>
                    <p
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                        {{ $employee->available_task_hours }}
                    </p>
                </div>
            </div>
        </div>
    </div>


@endsection
