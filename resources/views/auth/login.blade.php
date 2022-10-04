<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />
        
        

        {{--  Icon Set --}}
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        {{-- Alpine JS CDN --}}
        <script src="//unpkg.com/alpinejs" defer></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body{
                font-family: 'Roboto', sans-serif; !important
            }
            .r{
                display: inline-block;
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                -webkit-transform: rotate(-90deg);
                transform: rotate(-90deg);
            }

            [x-cloak] { display: none }


        </style>

        @yield('css')
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
          
            <div class="grid md:grid-cols-2  ">
                <div class=" shadow-md h-screen px-4 py-2">
                    <h2 class="uppercase text-indigo-500 text-xl font-semibold flex  items-center" >
                        <p class="w-2 h-2 bg-indigo-500 rounded-full "></p> <p class="px-1">Fusion Himalayan</p>
                    </h2>

                    <div class="flex justify-center items-center">
                        <div class="mt-[30%]">
                            <h1 class="text-2xl text-indigo-500 font-bold">
                                Welcome,
                            </h1>
                            <p class="capitalize text-gray-400">
                                Welcome To Fusion Himalayan, Procced to login
                            </p>
                            <form action="{{route('login')}}" method="post" class="py-5">
                                @csrf
                                <div class="my-2">
                                    <label for="email" class="text-gray-500 text-sm block py-2">Email</label>
                                    <input type="email" name="email" id="email" class="rounded-md border-none bg-gray-50 shadow-md ring-transparent active:border-indigo-600 active:ring-indigo-600 focus:ring-indigo-600 active:shadow-lg active:-translate-y-1 focus:shadow-lg focus:-translate-y-1 transition duration-500 delay-300 ease-in-out w-full">
                                </div>

                                <div class="my-2">
                                    <label for="password" class="text-gray-500 text-sm block py-2">Password</label>
                                    <input type="password" name="password" id="password" class="rounded-md border-none bg-gray-50 shadow-md ring-transparent active:border-indigo-600 active:ring-indigo-600 focus:ring-indigo-600 active:shadow-lg active:-translate-y-1 focus:shadow-lg focus:-translate-y-1 transition duration-500 delay-300 ease-in-out w-full">
                                </div>

                                <button type="submit" value="Send" class="bg-red-500 rounded-lg px-8 my-3 text-gray-50 py-1 hover:bg-red-600 ">Login</button>
                            </form>
                        </div>
                    </div>
                    
                </div>

                <div>

                </div>
            </div>

          
        </div>

        {{-- Jquery --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        @yield('js')
    </body>
</html>