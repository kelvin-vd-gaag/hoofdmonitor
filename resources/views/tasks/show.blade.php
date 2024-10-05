@extends('layouts.app')

@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">{{ $task->name }}</h2>
        <h3 class="mx-6 mb-2 text-lg font-semibold text-gray-700 dark:text-gray-200">Taak beschrijving</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cumque earum quae quibusdam temporibus
            veniam vero. Adipisci amet assumenda molestiae optio, quae, quam qui quis reiciendis repellendus sapiente
            similique tempore!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cumque earum quae quibusdam temporibus
            veniam vero. Adipisci amet assumenda molestiae optio, quae, quam qui quis reiciendis repellendus sapiente
            similique tempore!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cumque earum quae quibusdam temporibus
            veniam vero. Adipisci amet assumenda molestiae optio, quae, quam qui quis reiciendis repellendus sapiente
            similique tempore!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cumque earum quae quibusdam temporibus
            veniam vero. Adipisci amet assumenda molestiae optio, quae, quam qui quis reiciendis repellendus sapiente
            similique tempore!</p>


        <h4
            class="mb-4 mt-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
        >
            Informatie
        </h4>
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
            >
                <div
                    class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                        ></path>
                    </svg>
                </div>
                <div>
                    <p
                        class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                    >
                        Verantwoordelijke medewerkers
                    </p>
                    <p
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                        2
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
                        {{ $task->hours }}
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
                        50
                    </p>
                </div>
            </div>
            <!-- Card -->

        </div>


        <form action="" class="mt-4">
            @csrf
            <input type="submit" value="Koppel mij aan deze taak"
                   class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
        </form>

    </div>

@endsection