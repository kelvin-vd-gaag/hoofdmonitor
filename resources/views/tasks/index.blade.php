@extends('layouts.app')

@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Overzicht van alle taken</h2>

        <!-- Succesmelding -->
        @if (session('success'))
            <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-700 dark:text-green-100" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if (auth()->user()->role->name === 'admin')
            <a href="{{ url('/tasks/create') }}" id="saveButton"
               class="w-fit px-4 py-2 font-medium leading-5 text-gray-500 transition-colors duration-150 bg-lime-300 border border-transparent rounded-lg"
               style="width: fit-content;">
                Nieuwe taak
            </a>
        @endif

        <table class="w-full whitespace-no-wrap mt-4">
            <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                <th class="px-4 py-3">Taak</th>
                <th class="px-4 py-3">Openstaande uren</th>
                <th class="px-4 py-3">Gekoppelde medewerkers</th>
                <th class="px-4 py-3">Deadline</th>
                @if (auth()->user()->role->name === 'admin')
                    <th class="px-4 py-3">Acties</th>
                @endif
            </tr>
            </thead>
            <tbody class="bg-white divide-y">
            @foreach($tasks as $task)
                <tr class="text-gray-700">
                    <td class="px-4 py-3">
                        <a href="{{ url('/tasks') . '/' . $task->slug }}">
                            <div class="flex items-center text-sm">
                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                    <img class="object-cover w-full h-full rounded-full" src="img/task-32.png" alt="" loading="lazy" />
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                </div>
                                <div>
                                    <p class="font-semibold">{{ $task->name }}</p>
                                </div>
                            </div>
                        </a>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        @if($task->hours > 0)
                            {{ $task->hours }}
                        @else
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    Alle uren vervuld
                                </span>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-xs">
                        @foreach ($task->employees as $employee)
                            <a href="{{ url('/employees') }}/{{ $employee->slug }}">{{ $employee->name }}</a>
                        @endforeach
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $task->deadline }}
                    </td>

                    @if (auth()->user()->role->name === 'admin')
                        <td class="px-4 py-3 text-sm">
                            <!-- Formulier voor het verwijderen van een taak -->
                            <form action="{{ route('tasks.destroy', $task->slug) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze taak wilt verwijderen?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-2 py-1 font-medium leading-5 text-white bg-red-600 rounded-lg hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                                    Verwijderen
                                </button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
