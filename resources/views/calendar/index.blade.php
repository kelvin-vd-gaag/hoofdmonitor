@extends('layouts.app')

@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Jaarkalender</h2>
        @foreach($tasksPerMonth as $month => $tasks)
            <h2 class="text-2xl">{{ $month }}</h2> <!-- Maandnaam als kop -->
            <ul>
                @foreach($tasks as $task)
                    <li>{{ $task->name }} - {{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }} ({{ $task->hours }} uur)</li> <!-- Takenlijst -->
                @endforeach


            </ul>
        @endforeach
    </div>
@endsection
