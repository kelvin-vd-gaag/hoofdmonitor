@extends('layouts.app')

@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Overzicht van alle taken</h2>
        <table class="w-full whitespace-no-wrap">
            <thead>
            <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
            >
                <th class="px-4 py-3">Taak</th>
                <th class="px-4 py-3">Openstaande uren</th>
                <th class="px-4 py-3">Gekoppelde medewekers</th>
                <th class="px-4 py-3">Date</th>
            </tr>
            </thead>
            <tbody
                class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
            >
            @foreach($tasks as $task)
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                        <a href="{{ url('/tasks') . '/' . $task->slug }}">
                        <div class="flex items-center text-sm">
                            <!-- Avatar with inset shadow -->
                            <div
                                class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                            >
                                <img
                                    class="object-cover w-full h-full rounded-full"
                                    src="img/task-32.png"
                                    alt=""
                                    loading="lazy"
                                />
                                <div
                                    class="absolute inset-0 rounded-full shadow-inner"
                                    aria-hidden="true"
                                ></div>
                            </div>

                            <div>
                                <p class="font-semibold"> {{ $task->name }}</p>
                                <p class="text-xs text-gray-600 dark:text-gray-400">
{{--                                    FTE: {{ $employee->fte }}--}}
                                </p>
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
                        6/10/2020
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
