<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:100i,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=beau-rivage:400" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Remix Icon Package --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    {{-- Alpine JS --}}
    <script src="//unpkg.com/alpinejs" defer></script>

    @yield('css')
</head>

<body class="font-sans antialiased " style="font-family: 'Poppins', sans-serif;">
    <div class="min-h-screen bg-gray-50" x-data="{ language: 2 }">
        {{-- Top part --}}
        <div class="hidden md:block w-full bg-gray-50">
            <div class="w-11/12 mx-auto py-1 flex justify-between">
                <div class="flex">
                    <div class="flex items-center text-gray-800 text-sm">
                        <i class="ri-mail-line"></i> <a href="mailto:fusionhimalayan@gmail.com"
                            class="mx-1">fusionhimalayan@gmail.com</a>
                    </div>

                    <div class="flex items-center text-gray-800 text-sm mx-2">
                        <i class="ri-phone-line"></i> <a href="tel:+358442790186" class="mx-1">+358442790186</a>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="mr-7">
                        <a href="https://www.facebook.com/profile.php?id=100086321990357"
                            class="hover:text-blue-500 mx-1">
                            <i class="ri-facebook-circle-line"></i>
                        </a>

                        <a href="" class="hover:text-pink-500 mx-1">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>

                    <div class="text-sm text-gray-500  fixed top-3 right-5 z-50">
                        <a class="hover:text-gray-800 hover:underline mx-1"
                            x-bind:class="{ 'text-gray-800 underline': language === 1 }" @click="language = 1">
                            En
                        </a>

                        <a class="hover:text-gray-800 hover:underline mx-1" @click="language = 2"
                            x-bind:class="{ 'text-gray-800 underline': language === 2 }">
                            Fi
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="hidden md:block">

        {{-- Navbar --}}
        <div class="hidden md:block w-full sticky top-0 bg-gray-50 shadow-sm z-10">
            <div class="flex w-11/12 mx-auto justify-between items-center py-2">
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="Fusion Himalayan Logo" class="w-24">
                </div>
                <div>
                    <ul class="flex">
                        <a href="{{ route('home') }}"
                            class="hover:text-red-500 mx-5 @if (Route::currentRouteName() == 'home') text-red-500 @endif">
                            <li>
                                Home
                            </li>
                        </a>

                        <a href="/#menu" class="hover:text-red-500 mx-5">
                            <li>
                                Menu
                            </li>
                        </a>

                        <a href="{{ route('reservation') }}"
                            class="hover:text-red-500 mx-5 @if (Route::currentRouteName() == 'reservation') text-red-500 @endif">
                            <li>
                                Reservation
                            </li>
                        </a>

                        <a href="{{ route('gallery') }}"
                            class="hover:text-red-500 mx-5 @if (Route::currentRouteName() == 'gallery') text-red-500 @endif">
                            <li>
                                Gallery
                            </li>
                        </a>

                        <a href="{{ route('about') }}"
                            class="hover:text-red-500 mx-5 @if (Route::currentRouteName() == 'about') text-red-500 @endif">
                            <li>
                                About Us
                            </li>
                        </a>

                        <a href="{{ route('contact') }}"
                            class="hover:text-red-500 mx-5 @if (Route::currentRouteName() == 'contact') text-red-500 @endif">
                            <li>
                                Contact Us
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Mobile Navabr --}}
        <div x-data="{ isNav: false }" class="md:hidden">
            <div class="w-full flex bg-white justify-between items-center py-2 px-5">
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-20">
                </div>
                <button @click="isNav=true">
                    <i class="ri-menu-3-line text-2xl"></i>
                </button>
            </div>
            <div class="bg-white" x-show="isNav" @click.away="isNav=false">
                <ul class="px-8">
                    <a href="{{ route('home') }}"
                        class="hover:text-red-500 mx-5 @if (Route::currentRouteName() == 'home') text-red-500 @endif">
                        <li>
                            Home
                        </li>
                    </a>

                    <a href="" class="hover:text-red-500 mx-5">
                        <li>
                            Menu
                        </li>
                    </a>

                    <a href="" class="hover:text-red-500 mx-5">
                        <li>
                            Reservation
                        </li>
                    </a>

                    <a href="{{ route('gallery') }}"
                        class="hover:text-red-500 mx-5 @if (Route::currentRouteName() == 'gallery') text-red-500 @endif">
                        <li>
                            Gallery
                        </li>
                    </a>

                    <a href="" class="hover:text-red-500 mx-5">
                        <li>
                            About Us
                        </li>
                    </a>

                    <a href="{{ route('contact') }}"
                        class="hover:text-red-500 mx-5 @if (Route::currentRouteName() == 'contact') text-red-500 @endif">
                        <li>
                            Contact Us
                        </li>
                    </a>
                </ul>
            </div>
        </div>

        @yield('main')

        {{-- Footer --}}
        <div class="w-full bg-gray-600 ">
            <div class="w-11/12 mx-auto py-10 grid md:grid-cols-3">
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="Logo"
                        class="w-40 bg-white rounded-full object-contain">
                    <h1 class="text-white text-2xl font-bold mt-5">Fusion Himalayan</h1>
                    <p class="text-white mt-5">
                        Follow us on:
                    </p>
                    <div class="flex mt-1 text-gray-200 text-2xl ">
                        <a href="https://www.facebook.com/profile.php?id=100086321990357"
                            class="hover:text-blue-500 mx-1">
                            <i class="ri-facebook-circle-line"></i>
                        </a>

                        <a href="" class="hover:text-pink-500 mx-1">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h1 class="text-white text-2xl font-bold ">Contact Info.</h1>

                    <div class="mt-5">
                        <div class="flex items-center my-2 text-sm">
                            <i class="ri-map-pin-line text-xl text-gray-200"></i>
                            <p class="text-gray-200 mx-2">
                                Yrjonkatu 7, Pori, Finland
                            </p>
                        </div>

                        <div class="flex items-center my-2 text-sm">
                            <i class="ri-smartphone-line text-xl text-gray-200"></i>
                            <p class="text-gray-200 mx-2">
                                +358442790186
                            </p>
                        </div>

                        <div class="flex items-center my-2 text-sm">
                            <i class="ri-mail-line text-xl text-gray-200"></i>
                            <p class="text-gray-200 mx-2">
                                <a href="mailto:fusionhimalayan@gmail.com"
                                    class="mx-1">fusionhimalayan@gmail.com</a>
                            </p>
                        </div>


                    </div>

                </div>

                <div>
                    <h1 class="text-white text-2xl font-bold ">Opening Hours</h1>

                    <div class="mt-5">

                        <div class="flex items-center my-2 text-sm">
                            <i class="ri-time-line text-xl text-gray-200"></i>
                            <p class="text-gray-200 mx-2">
                                Ma: Suljettu/Closed
                            </p>
                        </div>

                        <div class="flex items-center my-2 text-sm">
                            <i class="ri-time-line text-xl text-gray-200"></i>
                            <p class="text-gray-200 mx-2">
                                Ma-To: 11:00-21:00
                            </p>
                        </div>

                        <div class="flex items-center my-2 text-sm">
                            <i class="ri-time-line text-xl text-gray-200"></i>
                            <p class="text-gray-200 mx-2">
                                Pe-La: 12:00-22:00
                            </p>
                        </div>

                        <div class="flex items-center my-2 text-sm">
                            <i class="ri-time-line text-xl text-gray-200"></i>
                            <p class="text-gray-200 mx-2">
                                Su: 12:00-20:00
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="bg-gray-900 w-full">
            <p class="text-center text-gray-100 text-xs py-1">
                &copy; {{ now()->format('Y') }} Fusion Himalayan. All Rights Reserved.
            </p>
        </div>

        @yield('js')
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
        <script>
            var scroll = new SmoothScroll('a[href*="#"]');
        </script>
    </div>
</body>

</html>
