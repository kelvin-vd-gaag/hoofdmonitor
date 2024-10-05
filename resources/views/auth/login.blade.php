<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Windmill Dashboard</title>
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
    @vite(['resources/sass/app.scss','resources/css/tailwind.output.css','resources/js/init-alpine.js', 'resources/js/app.js','resources/js/charts-bars.js','resources/js/charts-lines.js','resources/js/charts-pie.js','resources/js/focus-trap.js'])

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
                    src="../assets/img/login-office-dark.jpeg"
                    alt="Office"
                />
            </div>
            <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                <form class="w-full"  method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1
                        class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
                    >
                        Login
                    </h1>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Email</span>
                        @error('password')
                        {{--TODO: Error melding weergeven lukt nog niet--}}
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="info@tcrmbo.nl" name="email" value="{{ @old('email') }}"
                        />
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Wachtwoord</span>
                        {{--TODO: Error melding weergeven lukt nog niet--}}
                        @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="***************"
                            type="password" name="password"
                        />
                    </label>

                    <!-- You should use a button here, as the anchor is only used for the example  -->

                    <input type="submit"
                           class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                           value="Inloggen"
                    >

                    <hr class="my-8" />
{{--                    <p class="mt-4">--}}
{{--                        <a--}}
{{--                            class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"--}}
{{--                            href="./forgot-password.html"--}}
{{--                        >--}}
{{--                            Wachtwoord vergeten?--}}
{{--                        </a>--}}
{{--                    </p>--}}
                    <p class="mt-1">
                        <a
                            class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                            href="{{ url('/register') }}"
                        >
                            Account aanmaken
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
