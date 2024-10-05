@extends('layouts.app')

@section('content')
{{--<h1>Overzicht van alle collega's</h1>--}}
<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Overzicht van alle medewerkers</h2>
    <table class="w-full whitespace-no-wrap">
        <thead>
        <tr
            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
        >
            <th class="px-4 py-3">Taak</th>
            <th class="px-4 py-3">E-mail</th>
            <th class="px-4 py-3">Schaal</th>
            <th class="px-4 py-3">Date</th>
        </tr>
        </thead>
        <tbody
            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
        >
    @foreach($employees as $employee)
        <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                    <!-- Avatar with inset shadow -->
                    <div
                        class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                    >
                        <img
                            class="object-cover w-full h-full rounded-full"
                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                            alt=""
                            loading="lazy"
                        />
                        <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                        ></div>
                    </div>
                    <div>
                        <p class="font-semibold"> {{ $employee->name }}</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">
                            FTE: {{ $employee->fte }}
                        </p>
                    </div>
                </div>
            </td>
            <td class="px-4 py-3 text-sm">
                {{ $employee->email }}
            </td>
            <td class="px-4 py-3 text-xs">
                {{ $employee->salary_grade }}
            </td>
            <td class="px-4 py-3 text-sm">
                {{ $employee->available_teaching_hours }}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
