<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=rubik:400" rel="stylesheet" />



    {{-- Remix Icon --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    @yield('css')

   <!-- Scripts -->
   @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Alpine js --}}
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>

    
</head>
<body>
    <div class="flex">
        <div class="w-56 h-fit min-h-screen border-r shadow-md">
            <img src="{{asset('images/logo.png')}}" class="p-10" alt="">

            {{-- PC Navbar --}}

            <ul class="px-4 text-gray-800">
                <li class="text-lg py-1.5">
                    <a href="{{ route('dashboard') }}" class="flex items-center @if(Route::is('dashboard')) bg-black text-white @else hover:bg-gray-100 @endif p-2 rounded-lg">
                        <i class="ri-dashboard-3-line text-xl"> &nbsp; </i> Dashboard
                    </a>
                </li>
                
                <li class="text-lg py-1.5">
                    <a href="{{route('admin.slideshows.index')}}" class="flex items-center @if(Route::is('admin.slideshows.*')) bg-black text-white @else hover:bg-gray-100 @endif p-2 rounded-lg">
                        <i class="ri-image-line text-xl"> &nbsp; </i> Slideshows
                    </a>
                </li>

               

                <li class="text-lg py-1.5">
                    <a href="{{route('admin.galleries.index')}}" class="flex items-center @if(Route::is('admin.galleries.*')) bg-black text-white @else hover:bg-gray-100 @endif p-2 rounded-lg">
                        <i class="ri-gallery-line text-xl"> &nbsp; </i> Gallery
                    </a>
                </li> 

                <li class="text-lg py-1.5">
                    <a href="{{route('admin.lunches.index')}}" class="flex items-center @if(Route::is('admin.lunches.*')) bg-black text-white @else hover:bg-gray-100 @endif p-2 rounded-lg">
                        <i class="ri-restaurant-2-line text-xl"></i> &nbsp; </i> Lunch
                    </a>
                </li> 

                <li class="text-lg py-1.5">
                    <a href="{{route('admin.populars.index')}}" class="flex items-center @if(Route::is('admin.populars.*')) bg-black text-white @else hover:bg-gray-100 @endif p-2 rounded-lg">
                        <i class="ri-star-line text-xl"></i></i> &nbsp; </i> Popular
                    </a>
                </li> 

                {{-- <li class="text-lg py-1.5">
                    <a href="{{route('admin.contacts.index')}}" class="flex items-center @if(Route::is('admin.contacts.*')) bg-black text-white @else hover:bg-gray-100 @endif p-2 rounded-lg">
                        <i class="ri-mail-line text-xl"> &nbsp; </i> Contact
                    </a>
                </li>
 --}}


               


                <li class="text-lg py-1.5">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" href="" class="flex w-full items-center p-2 rounded-lg hover:bg-gray-100">
                            <i class="ri-logout-circle-r-line text-xl"> &nbsp; </i> Logout
                        </button>
                    </form>
                </li>
   
            </ul>

            {{-- End PC Navbar --}}
        </div>

        <div class="flex-1 p-4 font-[Rubik]">
            @yield('content')
        </div>
    </div>

    @yield('js')
</body>
</html>