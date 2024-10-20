<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Account aanmaken - Hoofdmonitor</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    {{--    <link rel="stylesheet" href="../assets/css/tailwind.output.css" />--}}
    {{--    <script--}}
    {{--        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"--}}
    {{--        defer--}}
    {{--    ></script>--}}
    {{--    <script src="../assets/js/init-alpine.js"></script>--}}

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
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/tailwind.output.css'])


</head>
<body>
<div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
    <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
    >
        <div class="flex flex-col overflow-y-auto md:flex-row">
            <div class="h-32 md:h-auto md:w-1/2">
                <img
                    aria-hidden="true"
                    class="object-fit-contain w-full h-full dark:hidden"
                    src="img/techniek-college-rotterdam.webp"
                    alt="Office"
                />
                <img
                    aria-hidden="true"
                    class="hidden object-cover w-full h-full dark:block"
                    src="../assets/img/create-account-office-dark.jpeg"
                    alt="Office"
                />
            </div>
            <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
{{--                @if ($errors->any())--}}
{{--                    <div class="alert alert-danger">--}}
{{--                        <ul>--}}
{{--                            @foreach ($errors->all() as $error)--}}
{{--                                <li>{{ $error }}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                @endif--}}
                <form class="w-full" method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                        Account aanmaken
                    </h1>

                    <!-- Volledige naam -->
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Volledige naam</span>
                        <input type="text" name="name"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('name') border-red-600 @enderror"
                               placeholder="F. Mercury" value="{{ old('name') }}"
                        />
                        @error('name')
                        <span class="text-xs text-red-600 mt-1">{{ $message }}</span>
                        @enderror
                    </label>

                    <!-- Email -->
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Email</span>
                        <input type="email" name="email"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('email') border-red-600 @enderror"
                               placeholder="voorbeeld@tcrmbo.nl" value="{{ old('email') }}"
                        />
                        @error('email')
                        <span class="text-xs text-red-600 mt-1">{{ $message }}</span>
                        @enderror
                    </label>

                    <!-- Wachtwoord -->
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Wachtwoord</span>
                        <input name="password"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('password') border-red-600 @enderror"
                               placeholder="***************" type="password"
                        />
                        @error('password')
                        <span class="text-xs text-red-600 mt-1">{{ $message }}</span>
                        @enderror
                    </label>

                    <!-- Herhaal wachtwoord -->
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Herhaal wachtwoord</span>
                        <input name="password_confirmation"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                               placeholder="***************" type="password"
                        />
                    </label>

                    <!-- Submit button -->
                    <input type="submit"
                           class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                           value="Maak een account aan"
                    >

                    <hr class="my-8" />

                    <p class="mt-4">
                        Heb je al een account? <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="{{ url('/login') }}"> Log hier in</a>
                    </p>
                </form>

            </div>
        </div>
    </div>
</div>
</body>
</html>
