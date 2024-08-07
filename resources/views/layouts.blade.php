<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" sizes="114x114" href="{{ asset('mstile-144x144.png') }}">
    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <nav class="bg-white border-gray-200 dark:bg-gray-900 fixed w-full z-20 top-0 start-0">
        <div class="flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" /> --}}
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Desa Dermo</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 px-3 {{ Route::currentRouteName() == 'home'
                                ? ' text-white bg-primary-700 rounded md:bg-transparent md:text-primary-700 md:p-0 dark:text-white md:dark:text-primary-500'
                                : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-700 md:p-0 dark:text-white md:dark:hover:text-primary-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('umkm') }}"
                            class="block py-2 px-3 {{ Route::currentRouteName() == 'umkm'
                                ? ' text-white bg-primary-700 rounded md:bg-transparent md:text-primary-700 md:p-0 dark:text-white md:dark:text-primary-500'
                                : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-700 md:p-0 dark:text-white md:dark:hover:text-primary-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">UMKM</a>
                    </li>
                    <li>
                        <a href="{{ route('articles') }}"
                            class="block py-2 px-3 {{ Route::currentRouteName() == 'articles'
                                ? ' text-white bg-primary-700 rounded md:bg-transparent md:text-primary-700 md:p-0 dark:text-white md:dark:text-primary-500'
                                : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-700 md:p-0 dark:text-white md:dark:hover:text-primary-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">Artikel</a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-700 md:p-0 dark:text-white md:dark:hover:text-primary-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            Tentang
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-gray-800 rounded-lg">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" /> --}}
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-200">Dermo</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-200">
                    <li>
                        <a href="https://desadermo.gresikkab.go.id/" class="hover:underline me-4 md:me-6">Desa Siap</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="hover:underline me-4 md:me-6">Tentang</a>
                    </li>
                    <li>
                        <a href="href="{{ route('umkm') }}" class="hover:underline me-4 md:me-6">UMKM</a>
                    </li>
                    <li>
                        <a href="https://maps.app.goo.gl/Xbby32Uo6do2h4KZ6" class="hover:underline me-4 md:me-6">Lokasi</a>
                    </li>
                    <li>
                        <a href="/admin" class="hover:underline">Admin</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a
                    href="https://flowbite.com/" class="hover:underline">Dermo™</a>. All Rights Reserved.</span>
        </div>
    </footer>
</body>

</html>
