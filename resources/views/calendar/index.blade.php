@extends('layouts.app')

@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-3xl font-bold text-gray-800 dark:text-gray-200">Jaarkalender</h2>

        @foreach($tasksPerMonth as $month => $tasks)
            <div class="p-6 mb-6 border border-gray-200 rounded-lg shadow-md bg-white dark:bg-gray-800 dark:border-gray-700">
                <time class="text-2xl font-semibold text-gray-900 dark:text-white">{{ $month }}</time>
                <ol class="mt-4 space-y-4">
                    @foreach($tasks as $task)
                        <li class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition duration-200 ease-in-out">
                            <a href="{{ url('/tasks') }}/{{$task->slug}}" class="flex items-start space-x-4">
                                <div class="flex-grow">
                                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">{{ $task->name }}</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ $task->description }}</p>
                                    <p class="mt-2 text-sm font-semibold text-gray-500 dark:text-gray-400">
                                        Deadline: {{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}
                                    </p>
                                    <div class="mt-3">
                                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Werknemers:</span>
                                        @if($task->employees->isEmpty())
                                            <span class="text-sm text-gray-500 dark:text-gray-400">Geen werknemers gekoppeld</span>
                                        @else
                                            <ul class="mt-2 space-y-1">
                                                @foreach($task->employees as $employee)
                                                    <li class="inline-block px-3 py-1 text-xs font-medium text-gray-800 bg-green-100 rounded-full dark:bg-green-600 dark:text-white">
                                                        {{ $employee->name }} ({{ $employee->email }})
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                             
                            </a>
                        </li>
                    @endforeach
                </ol>
            </div>
        @endforeach
    </div>
@endsection
