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
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                {{ $task->name }} - Deadline: {{ \Carbon\Carbon::parse($task->deadline)->locale('nl')->translatedFormat('l j F Y') }}
            </h2>

            <div class="mb-4 text-decoration-underline text-blue-500"><a href="{{ url('/tasks/' . $task->slug . '/edit') }}">Taak bewerken</a></div>
        <h3 class="mx-6 mb-2 text-lg font-semibold text-gray-700 dark:text-gray-200">Taak beschrijving</h3>
        <p>
            {{ $task->description }}
        </p>

        <h4 class="mb-4 mt-4 text-lg font-semibold text-gray-600 dark:text-gray-300">Belangrijke mijlpalen</h4>
        <div class="mb-4 text-decoration-underline text-blue-500"><a
                href="{{ url('/tasks/' . $task->slug  . '/milestones') }}">Beheer mijlpalen</a></div>

        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Mijlpaal</th>
                        <th class="px-4 py-3">Tijdsduur (uren)</th>
                        <th class="px-4 py-3">Beschrijving</th>
                        <th class="px-4 py-3">Deadline</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach ($task->milestones as $milestone)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                {{ $milestone->name }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $milestone->hours }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $milestone->description }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $milestone->deadline }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <h4 class="mb-4 mt-4 text-lg font-semibold text-gray-600 dark:text-gray-300">Informatie</h4>
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
            >

                <div>
                    <p
                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                    >
                        Verantwoordelijke medewerkers
                    </p>
                    <p
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                        @foreach($task->employees as $employee)
                            <li><a href="{{'/employees'}}/{{ $employee->slug  }}">{{ $employee->name }}</a></li>
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
                        Oorspronkelijke inschatting tijdsbelasting
                    </p>
                    <p
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                        {{ $task->initial_hours }}
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
                        {{ $task->hours }}
                    </p>
                </div>
            </div>
            <!-- Card -->

        </div>

        @if($task->hours > 0)
            <form action="{{ url('/task/assign') }}" method="post" class="mt-4">
                @csrf
                <input type="hidden" name="task_id" value="{{ $task->id }}">
                <input type="hidden" name="employee_id" value="{{ $employee->id }}">
                <input type="submit" value="Koppel mij aan deze taak"
                       class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            </form>

        @else
            <div class="">Op dit moment zijn alle taakuren vervuld</div>
        @endif

    </div>

@endsection
