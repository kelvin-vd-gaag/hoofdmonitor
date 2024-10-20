@extends('layouts.app')

@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Overzicht van alle medewerkers</h2>

        <input type="text" id="search" placeholder="Zoek medewerker..." onkeyup="searchTable()" class="p-2 border border-gray-300 rounded mb-4">

        <table id="employeesTable" class="w-full whitespace-no-wrap">
            <thead>
            <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b  bg-gray-50"
            >
                <th class="px-4 py-3">Taak</th>
                <th class="px-4 py-3">E-mail</th>
                <th class="px-4 py-3">Openstaande taakuren</th>
                <th class="px-4 py-3">Account status</th>
                @auth
                    @if(auth()->user()->role && auth()->user()->role->name === 'admin')
                        <th class="px-4 py-3">Rol</th>
                    @endif
                @endauth
            </tr>
            </thead>
            <tbody class="bg-white divide-y ">
            @foreach($employees as $employee)
                <tr class="text-gray-700 ">
                    <td class="px-4 py-3">
                        <a href="{{ url('/employees') }}/{{ $employee->slug }}">
                            <div class="flex items-center text-sm">
                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                    <img class="object-cover w-full h-full rounded-full"
                                         src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                         alt="" loading="lazy"/>
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                </div>
                                <div>
                                    <p class="font-semibold">{{ $employee->name }}</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">FTE: {{ $employee->fte }}</p>
                                </div>
                            </div>
                        </a>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <a href="mailto:{{$employee->email}}">{{ $employee->email }}</a>
                    </td>
                    <td class="px-4 py-3 text-xs">{{ $employee->available_task_hours }}</td>
                    <td class="px-4 py-3 text-xs">
                        @if($employee->user_id)
                            <span
                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                              Gekoppeld account
                            </span>
                        @else
                            <span
                                class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                              Niet gekoppeld
                            </span>
                        @endif
                    </td>
                    @auth
                        @if(auth()->user()->role && auth()->user()->role->name === 'admin')
                            <td class="px-4 py-3 text-xs">{{ $employee->role ? $employee->role->name : 'Geen rol' }}</td>
                        @endif
                    @endauth
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

    <script>
        function searchTable() {
            var input = document.getElementById("search");
            var filter = input.value.toLowerCase();
            var table = document.getElementById("employeesTable");
            var tr = table.getElementsByTagName("tr");

            for (var i = 1; i < tr.length; i++) {
                var tdName = tr[i].getElementsByTagName("td")[0]; // Kolom Taak (naam)
                var tdEmail = tr[i].getElementsByTagName("td")[1]; // Kolom Email
                if (tdName || tdEmail) {
                    var nameValue = tdName.textContent || tdName.innerText;
                    var emailValue = tdEmail.textContent || tdEmail.innerText;

                    if (nameValue.toLowerCase().indexOf(filter) > -1 || emailValue.toLowerCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

@endsection
