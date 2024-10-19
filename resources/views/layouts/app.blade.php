<!DOCTYPE html>
<html :class="{ 'theme-dark': light }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hoofdmonitor Dashboard</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        defer
    ></script>
    @vite(['resources/sass/app.scss','resources/css/tailwind.output.css','resources/js/init-alpine.js', 'resources/js/app.js','resources/js/focus-trap.js'])

    <script>
        function data() {
            function getThemeFromLocalStorage() {
                if (window.localStorage.getItem('dark')) {
                    return JSON.parse(window.localStorage.getItem('dark'))
                }
                return (
                    !!window.matchMedia &&
                    window.matchMedia('(prefers-color-scheme: dark)').matches
                )
            }

            function setThemeToLocalStorage(value) {
                window.localStorage.setItem('dark', value)
            }

            return {
                dark: getThemeFromLocalStorage(),
                toggleTheme() {
                    this.dark = !this.dark
                    setThemeToLocalStorage(this.dark)
                },
                isSideMenuOpen: false,
                toggleSideMenu() {
                    this.isSideMenuOpen = !this.isSideMenuOpen
                },
                closeSideMenu() {
                    this.isSideMenuOpen = false
                },
                isNotificationsMenuOpen: false,
                toggleNotificationsMenu() {
                    this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
                },
                closeNotificationsMenu() {
                    this.isNotificationsMenuOpen = false
                },
                isProfileMenuOpen: false,
                toggleProfileMenu() {
                    this.isProfileMenuOpen = !this.isProfileMenuOpen
                },
                closeProfileMenu() {
                    this.isProfileMenuOpen = false
                },
                isPagesMenuOpen: false,
                togglePagesMenu() {
                    this.isPagesMenuOpen = !this.isPagesMenuOpen
                },
                isModalOpen: false,
                trapCleanup: null,
                openModal() {
                    this.isModalOpen = true
                    this.trapCleanup = focusTrap(document.querySelector('#modal'))
                },
                closeModal() {
                    this.isModalOpen = false
                    this.trapCleanup()
                },
            }
        }

        // Live zoekfunctionaliteit
        function searchApp() {
            return {
                query: '',
                results: [],
                search() {
                    if (this.query.length > 0) {
                        fetch(`/search?query=${encodeURIComponent(this.query)}`)
                            .then(response => response.json())
                            .then(data => {
                                this.results = data;
                            });
                    } else {
                        this.results = [];
                    }
                },
            }
        }
    </script>
</head>

<body>
<div
    class="flex h-screen bg-gray-50 dark:bg-gray-900"
    :class="{ 'overflow-hidden': isSideMenuOpen }"
>
    <!-- Desktop sidebar -->
    <aside
        class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
    >
        <div class="py-4 text-gray-500 dark:text-gray-400">
            <a
                class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
                href="{{ url('/') }}"
            >
                Hoofdmonitor
            </a>
            <ul class="mt-6">
                <li class="relative px-6 py-3">
                    @if( Route::is('home') )
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                              aria-hidden="true"></span>
                    @endif
                    <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
                        {{ Route::is('home') ? 'text-gray-800 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400' }}
                        hover:text-gray-800 dark:hover:text-gray-200"
                        href="{{ url('/home') }}"
                    >
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                            ></path>
                        </svg>
                        <span class="ml-4">Dashboard</span>
                    </a>
                </li>
            </ul>
            <ul>
                <!-- Medewerkers -->
                <li class="relative px-6 py-3">
                    @if( Route::is('employees.index') )
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                              aria-hidden="true"></span>
                    @endif
                    <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
                        {{ Route::is('employees.index') ? 'text-gray-800 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400' }}
                        hover:text-gray-800 dark:hover:text-gray-200"
                        href="{{ url('/employees') }}"
                    >
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2"
                            ></path>
                            <path d="M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            <path d="M12 11h3m-3 4h3"></path>
                            <path d="M9 11h.01M9 16h.01"></path>
                        </svg>
                        <span class="ml-4">Medewerkers</span>
                    </a>
                </li>
                <!-- Taken -->
                <li class="relative px-6 py-3">
                    @if( Route::is('tasks.index') )
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                              aria-hidden="true"></span>
                    @endif
                    <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
                        {{ Route::is('tasks.index') ? 'text-gray-800 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400' }}
                        hover:text-gray-800 dark:hover:text-gray-200"
                        href="{{ url('/tasks') }}"
                    >
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                        </svg>
                        <span class="ml-4">Alle Taken</span>
                    </a>
                </li>
                <!-- Jaarkalender -->
                <li class="relative px-6 py-3">
                    @if( Route::is('calendar.index') )
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                              aria-hidden="true"></span>
                    @endif
                    <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
                        {{ Route::is('calendar.index') ? 'text-gray-800 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400' }}
                        hover:text-gray-800 dark:hover:text-gray-200"
                        href="{{ url('/calendar') }}"
                    >
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                d="M8 7V3M16 7V3M4 11h16M5 7h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2z"
                            ></path>
                        </svg>
                        <span class="ml-4">Jaarkalender</span>
                    </a>
                </li>
                <!-- Mijn Taken -->
                <li class="relative px-6 py-3">
                    @if( Route::is('mijn-taken.index') )
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                              aria-hidden="true"></span>
                    @endif
                    <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
                        {{ Route::is('mijn-taken.index') ? 'text-gray-800 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400' }}
                        hover:text-gray-800 dark:hover:text-gray-200"
                        href="{{ url('/mijn-taken') }}"
                    >
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="ml-4">Mijn Taken</span>
                    </a>
                </li>
                <!-- Account beheer -->
                <li class="relative px-6 py-3">
                    <button
                        class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        @click="togglePagesMenu"
                        aria-haspopup="true"
                    >
                        <span class="inline-flex items-center">
                          <svg class="w-4 h-4" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                          <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                            <span class="ml-4">Account Beheer</span>
                        </span>
                        <svg
                            class="w-4 h-4"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0L5.293 8.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                    <template x-if="isPagesMenuOpen">
                        <ul
                            x-transition:enter="transition-all ease-in-out duration-300"
                            x-transition:enter-start="opacity-25 max-h-0"
                            x-transition:enter-end="opacity-100 max-h-xl"
                            x-transition:leave="transition-all ease-in-out duration-300"
                            x-transition:leave-start="opacity-100 max-h-xl"
                            x-transition:leave-end="opacity-0 max-h-0"
                            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                            aria-label="submenu"
                        >
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            >
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    @csrf
                                </form>
                            </li>
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            >
                                <a class="w-full" href="{{ url('/mijn-profiel/') }}">Mijn Profiel</a>
                            </li>
                        </ul>
                    </template>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Mobile sidebar -->
    <div
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
    ></div>
    <aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu"
    >
        <!-- Mobiele navigatie (zelfde links als desktop navigatie) -->
        <div class="py-4 text-gray-500 dark:text-gray-400">
            <a
                class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
                href="{{ url('/') }}"
            >
                Hoofdmonitor
            </a>
            <ul class="mt-6">
                <!-- Kopieer hier dezelfde navigatielinks als in de desktop navigatie -->
                <!-- Dashboard -->
                <li class="relative px-6 py-3">
                    @if( Route::is('home') )
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                              aria-hidden="true"></span>
                    @endif
                    <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
                        {{ Route::is('home') ? 'text-gray-800 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400' }}
                        hover:text-gray-800 dark:hover:text-gray-200"
                        href="{{ url('/home') }}"
                    >
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                            ></path>
                        </svg>
                        <span class="ml-4">Dashboard</span>
                    </a>
                </li>
                <!-- Voeg hier de overige navigatielinks toe, net als in de desktop navigatie -->
                <!-- Medewerkers -->
                <li class="relative px-6 py-3">
                    @if( Route::is('employees.index') )
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                              aria-hidden="true"></span>
                    @endif
                    <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
                        {{ Route::is('employees.index') ? 'text-gray-800 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400' }}
                        hover:text-gray-800 dark:hover:text-gray-200"
                        href="{{ url('/employees') }}"
                    >
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2"
                            ></path>
                            <path d="M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            <path d="M12 11h3m-3 4h3"></path>
                            <path d="M9 11h.01M9 16h.01"></path>
                        </svg>
                        <span class="ml-4">Medewerkers</span>
                    </a>
                </li>
                <!-- Overige navigatielinks volgen hetzelfde patroon -->
                <!-- ... -->
            </ul>
        </div>
    </aside>

    <!-- Content area -->
    <div class="flex flex-col flex-1 w-full">
        <!-- Header -->
        <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
            <div
                class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
            >
                <!-- Mobile hamburger -->
                <button
                    class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
                    @click="toggleSideMenu"
                    aria-label="Menu"
                >
                    <svg
                        class="w-6 h-6"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
                <!-- Search input -->
                <div class="flex justify-center flex-1 lg:mr-32">
                    <div x-data="searchApp()" class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <svg
                                class="w-4 h-4 text-gray-600"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </div>
                        <input
                            class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                            type="text"
                            placeholder="Zoek voor taken..."
                            aria-label="Search"
                            x-model="query"
                            @input.debounce.300ms="search"
                        />
                        <!-- Resultaten weergave -->
                        <ul
                            x-show="results.length > 0"
                            @click.away="results = []"
                            class="absolute z-20 left-0 w-full mt-2 bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700"
                        >
                            <template x-for="result in results" :key="result.id">
                                <li class="p-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-900 cursor-pointer">
                                    <a :href="'/tasks/' + result.slug" class="text-gray-700 dark:text-gray-300" x-text="result.name"></a>
                                </li>
                            </template>
                            <li x-show="results.length === 0 && query !== ''" class="p-2 te xt-sm text-gray-500 dark:text-gray-400">Geen resultaten gevonden.</li>
                        </ul>
                    </div>
                </div>
                <!-- Right side toggles -->
                <ul class="flex items-center flex-shrink-0 space-x-6">
                    <!-- Theme toggler -->
                    <li class="flex">
                        <button
                            class="rounded-md focus:outline-none focus:shadow-outline-purple"
                            @click="toggleTheme"
                            aria-label="Toggle color mode"
                        >
                            <template x-if="!dark">
                                <svg
                                    class="w-5 h-5"
                                    aria-hidden="true"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M17.293 13.293A8 8 0 116.707 2.707a8 8 0 0010.586 10.586z"
                                    ></path>
                                </svg>
                            </template>
                            <template x-if="dark">
                                <svg
                                    class="w-5 h-5"
                                    aria-hidden="true"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zM9.293 14.707a1 1 0 010-1.414L12 10.586l2.707 2.707a1 1 0 11-1.414 1.414L12 12.414l-1.293 1.293a1 1 0 01-1.414 0zM12 3a1 1 0 00-1 1v1a1 1 0 102 0V4a1 1 0 00-1-1z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </template>
                        </button>
                    </li>
                    <!-- Notifications menu -->
                    <!-- Voeg hier je notificatiemenu toe indien nodig -->
                    <!-- Profile menu -->
                    <!-- Voeg hier je profielmenu toe indien nodig -->
                </ul>
            </div>
        </header>

        <!-- Main content -->
        <main class="h-full overflow-y-auto">
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
