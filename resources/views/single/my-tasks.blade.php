@extends('layouts.app')

@section('content')

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Mijn Taken Overzicht
        </h2>

        <!-- Controleer of de gebruiker taken heeft -->
        @if($tasks->isEmpty())
            <p class="text-gray-700 ">
                U heeft momenteel geen taken toegewezen.
            </p>
        @else
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50 ">
                            <th class="px-4 py-3">Taaknaam</th>
                            <th class="px-4 py-3">Beschrijving</th>
                            <th class="px-4 py-3">Tijdsduur (uren)</th>
                            <th class="px-4 py-3">Deadline</th>
                            <th class="px-4 py-3">Actie</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                        @foreach ($tasks as $task)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-sm">
                                    {{ $task->name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $task->description ?? 'Geen beschrijving' }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $task->initial_hours }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ \Carbon\Carbon::parse($task->deadline)->locale('nl')->translatedFormat('l j F Y') }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <a href="{{ route('tasks.show', $task->slug) }}"
                                       class="text-blue-600 hover:underline">
                                        Bekijk details
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>

@endsection
