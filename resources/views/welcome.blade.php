@extends('layouts.app')

@section('css')
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">

    <style>
        [x-cloak] {
            display: none;
        }
    </style>
@endsection

@section('main')
    <div class="swiper mySwiper5 md:h-[90vh] z-0">
        <div class="swiper-wrapper">
            @foreach ($slideshows as $slideshow)
                <div class="swiper-slide  relative">
                    <div class="absolute bg-black bg-opacity-30 top-0 bottom-0 right-0 left-0">
                        <div class="flex justify-center items-center h-full">
                            <div>
                                <h1 class="text-6xl text-white font-bold text-center"
                                    style="font-family: 'Beau Rivage', handwriting;">
                                    Welcome
                                </h1>

                                <h1 class="text-4xl my-2 text-white font-bold text-center"
                                    style="font-family: 'Beau Rivage', handwriting;">
                                    Himalayan Taste Foods
                                </h1>
                                <div class="flex justify-center mt-6">
                                    <button
                                        class="px-4 py-2 rounded-full shadow-md border border-red-500 text-white hover:bg-red-500">Book
                                        Table</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('public/public/' . $slideshow->photopath) }}" alt="" class="w-full">
                </div>
            @endforeach

        </div>
    </div>

    <div class="my-5 ">
        <h1 class="text-indigo-500 text-5xl md:text-7xl text-center font-bold mt-10"
            style="font-family: 'Beau Rivage', handwriting;">
            Welcome to the Fusion Himalaya
        </h1>
        <div class="w-11/12 mx-auto grid md:grid-cols-2 my-8 gap-10">
            <div x-show="language === 1">


                <p class="text-justify text-gray-600 text-sm">
                    Nepalilainen Ravintola Fusion Himalayan, Authentic Nepalese restaurant in the Yrjonkatu 7 Pori.
                    Fusion Himalayan offers menus for Lunch and Dinner. The restaurant has a Latin atmosphere with Latin
                    Nepali ornaments and music. Within a year of its opening, Fusion Himalayan has been recognized for its
                    quality of food and excellent service.
                </p>
                <p class="text-justify text-gray-600 text-sm mt-3">
                    We are a close-knit, fun-loving, passionate group spreading the word about good times and wonderful
                    cuisine. In our restaurant cooking space, we offer limited capacity onsite. We cook, tell tales, give
                    interesting culinary demonstrations and lectures, but most importantly, we handle every customer as if
                    you were a guest at our dinner table. Come with us!
                    Come dine with us & experience an authentic food in an intimate dining space. We look forward to serving
                    you!
                </p>

                <div class="flex justify-end my-2">
                    <a href="{{ route('about') }}"
                        class="bg-red-500 hover:bg-red-600 rounded-md shadow-lg text-white px-4 py-1">
                        Read More
                    </a>
                </div>
            </div>

            <div x-show="language === 2">
                <p class="text-justify text-gray-600 text-sm">
                    Nepalilainen Ravintola Fusion Himalayan, Aito nepalilainen ravintola Yrjonkatu 7 Porissa.
                    Fusion Himalayan tarjoaa menut lounaalle ja illalliselle. Ravintolassa on latinalainen ilmapiiri
                    latinalaisen kanssa
                    Nepalilaisia ​​koristeita ja musiikkia. Vuoden sisällä avaamisestaan ​​Fusion Himalayan on saanut
                    tunnustusta siitä
                    ruoan laatu ja erinomainen palvelu.
                </p>
                <p class="text-justify text-gray-600 text-sm mt-3">
                    Olemme tiivis, hauskanpitoa rakastava, intohimoinen ryhmä, joka levittää sanaa hyvistä ajoista ja
                    upeasta keittiöstä. Ravintolamme ruoanlaittotilassa tarjoamme rajoitetusti kapasiteettia paikan päällä.
                    Teemme ruokaa, kerromme tarinoita, pidämme mielenkiintoisia kulinaarisia esityksiä ja luentoja, mutta
                    mikä tärkeintä, käsittelemme jokaista asiakasta kuin olisit vieraana ruokapöydässämme. Tule kanssamme!
                    Tule syömään kanssamme ja koe aito ruoka intiimissä ruokailutilassa. Odotamme innolla palvelemaan sinua!
                </p>
                <div class="flex justify-end my-2">
                    <button class="bg-red-500 hover:bg-red-600 rounded-md shadow-lg text-white px-4 py-1">
                        Read More
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-10">
                <div class="border border-red-200 p-2 rounded-lg shadow-lg h-fit">
                    <img src="{{ asset('images/slide1.webp') }}" alt="" class="rounnded-lg  shadow-md">
                </div>
                <div class="border border-red-200 p-2 rounded-lg shadow-lg h-fit">
                    <img src="{{ asset('images/slide1.webp') }}" alt="" class="rounnded-lg  shadow-md">
                </div>


            </div>
        </div>
    </div>

    <div class="my-5">
        <div class="relative w-full h-64"
            style="background-image: url('/images/slide2.jpeg');background-attachment: fixed; background-size: cover">
            <div class="absolute top-0 bottom-0 right-0 left-0 bg-black bg-opacity-50">
                <div class="flex justify-center items-center h-full">
                    <div>
                        <h1 class="uppercase text-3xl text-white text-center font-bold">
                            Book a table now !
                        </h1>
                        <div class="flex justify-center my-8">
                            <a href="{{ route('reservation') }}"
                                class="px-4 py-2 rounded-full shadow-md border border-red-500 text-white hover:bg-red-500">Book
                                Now</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="menu" class=" w-full h-20"></div>
    <div class="my-5">
        <h1 class="text-indigo-500 text-5xl md:text-7xl text-center font-bold mt-10"
            style="font-family: 'Beau Rivage', handwriting;">
            Our Menu
        </h1>
        <p class="mt-3 text-center font-light tracking-wider text-lg md:text-xl">
            Fresh and Delicious
        </p>

        <div class="flex justify-center items-center  py-10">
            {{-- Lunch Model --}}
            <div x-data="{ isLunch: false }" x-cloak>
                <button @click="isLunch=true"
                    class="uppercase text-red-500 mx-2 hover:text-white transition ease-in-out duration-300 text-xl rounded-lg shadow-lg hover:bg-red-600 px-4 py-1 border border-red-500">Lunch</button>
                <div class="fixed top-0 bottom-0 right-0 left-0 bg-black bg-opacity-60 backdrop-blur-sm z-50"
                    x-show="isLunch">
                    <div class="flex justify-center items-center h-full">
                        <div class="w-9/12 bg-gray-100 h-4/6 rounded-md shadow-lg overflow-scroll"
                            @click.away="isLunch=false">
                            <div class="flex justify-between items-center m-3">
                                <h1 class="text-2xl font-bold">
                                    Lunch
                                </h1>
                                <button class="bg-red-500 hover:bg-red-600 text-white rounded-md shadow-md px-5 py-1"
                                    @click="isLunch=false">
                                    Close
                                </button>
                            </div>
                            <hr class="border-red-200">

                            {{-- Menu Tabbed view Open --}}
                            <div x-data="{ current: 1 }">
                                <div class="flex overflow-scroll text-xs md:text-base border-b-2">
                                    <button class="px-4 py-2 w-full uppercase my-2" x-on:click="current = 1"
                                        x-bind:class="{ ' bg-indigo-500 text-white  rounded-md shadow-md': current === 1 }">Monday</button>
                                    <button class="px-4 py-2 w-full uppercase my-2" x-on:click="current = 2"
                                        x-bind:class="{ ' bg-indigo-500 text-white  rounded-md shadow-md': current === 2 }">Tuesday</button>
                                    <button class="px-4 py-2 w-full uppercase my-2" x-on:click="current = 3"
                                        x-bind:class="{ ' bg-indigo-500 text-white  rounded-md shadow-md': current === 3 }">Wednesday
                                    </button>
                                    <button class="px-4 py-2 w-full uppercase my-2" x-on:click="current = 4"
                                        x-bind:class="{ ' bg-indigo-500 text-white  rounded-md shadow-md': current === 4 }">Thursday
                                    </button>
                                    <button class="px-4 py-2 w-full uppercase my-2" x-on:click="current = 5"
                                        x-bind:class="{ ' bg-indigo-500 text-white  rounded-md shadow-md': current === 5 }">Friday
                                    </button>
                                </div>
                                <div x-show="current === 1" class="p-3 text-center mt-2 text-xs md:text-base">
                                    <p class="font-bold text-gray-800 text-sm">
                                        (Lounaaseen sisältyy päivän salaatti, basmati riisi, naan leipä, mango lassi, sekä
                                        kahvi
                                        tai nepalilainen tee. Basmati rice, naan bread, mango lassi, salad, nepalese tea and
                                        coffee are included.)
                                    </p>
                                    @php $i=1; @endphp
                                    @foreach ($lunches as $lunch)
                                        @if ($lunch->day == 'Monday')
                                            <div class=" border border-gray-200 p-5 rounded-md shadow-inner mt-4">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-center">
                                                        <p class="text-gray-500">
                                                            @php echo $i; @endphp
                                                            @php $i++; @endphp
                                                        </p>
                                                        <div class="mx-4 text-gray-500">
                                                            <p class="text-left font-bold">
                                                                {{ $lunch->name }}
                                                                @if ($lunch->isLactoseFree == 1 || $lunch->isVegan == 1 || $lunch->isGlutenFree == 1)
                                                                    <span
                                                                        class="font-normal">({{ $lunch->isLactoseFree == 1 ? 'L ' : '' }}{{ $lunch->isGlutenFree == 1 ? ',G ' : '' }}
                                                                        {{ $lunch->isVegan == 1 ? ',V' : '' }}) <sup>*</sup>
                                                                    </span>
                                                                @endif
                                                            </p>
                                                            <div class=" text-xs py-1 text-justify">
                                                                {{ $lunch->description }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-gray-600 w-56">
                                                        {{ $lunch->price }} &euro;
                                                    </p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                                <div x-show="current === 2" class="p-3 text-center mt-6">
                                    @php $i=1; @endphp
                                    <p class="font-bold text-gray-800 text-sm">
                                        (Lounaaseen sisältyy päivän salaatti, basmati riisi, naan leipä, mango lassi, sekä
                                        kahvi
                                        tai nepalilainen tee. Basmati rice, naan bread, mango lassi, salad, nepalese tea and
                                        coffee are included.)
                                    </p>
                                    @foreach ($lunches as $lunch)
                                        @if ($lunch->day == 'Tuesday')
                                            <div class=" border border-gray-200 p-5 rounded-md shadow-inner mt-4">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-center">
                                                        <p class="text-gray-500">
                                                            @php echo $i; @endphp
                                                            @php $i++; @endphp
                                                        </p>
                                                        <div class="mx-4 text-gray-500">
                                                            <p class="text-left font-bold">
                                                                {{ $lunch->name }}
                                                                @if ($lunch->isLactoseFree == 1 || $lunch->isVegan == 1 || $lunch->isGlutenFree == 1)
                                                                    <span
                                                                        class="font-normal">({{ $lunch->isLactoseFree == 1 ? 'L ' : '' }}{{ $lunch->isGlutenFree == 1 ? ',G ' : '' }}
                                                                        {{ $lunch->isVegan == 1 ? ',V' : '' }})
                                                                        <sup>*</sup>
                                                                    </span>
                                                                @endif
                                                            </p>
                                                            <div class=" text-xs py-1 text-justify">
                                                                {{ $lunch->description }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-gray-600 w-56">
                                                        {{ $lunch->price }} &euro;
                                                    </p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div x-show="current === 3" class="p-3 text-center mt-6">
                                    @php $i=1; @endphp
                                    <p class="font-bold text-gray-800 text-sm">
                                        (Lounaaseen sisältyy päivän salaatti, basmati riisi, naan leipä, mango lassi, sekä
                                        kahvi
                                        tai nepalilainen tee. Basmati rice, naan bread, mango lassi, salad, nepalese tea and
                                        coffee are included.)
                                    </p>
                                    @foreach ($lunches as $lunch)
                                        @if ($lunch->day == 'Wednesday')
                                            <div class=" border border-gray-200 p-5 rounded-md shadow-inner mt-4">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-center">
                                                        <p class="text-gray-500">
                                                            @php echo $i; @endphp
                                                            @php $i++; @endphp

                                                        </p>
                                                        <div class="mx-4 text-gray-500">
                                                            <p class="text-left font-bold">
                                                                {{ $lunch->name }}
                                                                @if ($lunch->isLactoseFree == 1 || $lunch->isVegan == 1 || $lunch->isGlutenFree == 1)
                                                                    <span
                                                                        class="font-normal">({{ $lunch->isLactoseFree == 1 ? 'L ' : '' }}{{ $lunch->isGlutenFree == 1 ? ',G ' : '' }}
                                                                        {{ $lunch->isVegan == 1 ? ',V' : '' }})
                                                                        <sup>*</sup>
                                                                    </span>
                                                                @endif
                                                            </p>
                                                            <div class=" text-xs py-1 text-justify">
                                                                {{ $lunch->description }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-gray-600 w-56 text-end">
                                                        {{ $lunch->price }} &euro;
                                                    </p>

                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                                <div x-show="current === 4" class="p-3 text-center mt-6">
                                    @php $i=1; @endphp
                                    <p class="font-bold text-gray-800 text-sm">
                                        (Lounaaseen sisältyy päivän salaatti, basmati riisi, naan leipä, mango lassi, sekä
                                        kahvi
                                        tai nepalilainen tee. Basmati rice, naan bread, mango lassi, salad, nepalese tea and
                                        coffee are included.)
                                    </p>
                                    @foreach ($lunches as $lunch)
                                        @if ($lunch->day == 'Thursday')
                                            <div class=" border border-gray-200 p-5 rounded-md shadow-inner mt-4">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-center">
                                                        <p class="text-gray-500">
                                                            @php echo $i; @endphp
                                                            @php $i++; @endphp

                                                        </p>
                                                        <div class="mx-4 text-gray-500">
                                                            <p class="text-left font-bold">
                                                                {{ $lunch->name }}
                                                                @if ($lunch->isLactoseFree == 1 || $lunch->isVegan == 1 || $lunch->isGlutenFree == 1)
                                                                    <span
                                                                        class="font-normal">({{ $lunch->isLactoseFree == 1 ? 'L ' : '' }}{{ $lunch->isGlutenFree == 1 ? ',G ' : '' }}
                                                                        {{ $lunch->isVegan == 1 ? ',V' : '' }})
                                                                        <sup>*</sup>
                                                                    </span>
                                                                @endif
                                                            </p>
                                                            <div class=" text-xs py-1 text-justify">
                                                                {{ $lunch->description }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-gray-600 w-56">
                                                        {{ $lunch->price }} &euro;
                                                    </p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                                <div x-show="current === 5" class="p-3 text-center mt-6">
                                    @php $i=1; @endphp
                                    <p class="font-bold text-gray-800 text-sm">
                                        (Lounaaseen sisältyy päivän salaatti, basmati riisi, naan leipä, mango lassi, sekä
                                        kahvi
                                        tai nepalilainen tee. Basmati rice, naan bread, mango lassi, salad, nepalese tea and
                                        coffee are included.)
                                    </p>
                                    @foreach ($lunches as $lunch)
                                        @if ($lunch->day == 'Friday')
                                            <div class=" border border-gray-200 p-5 rounded-md shadow-inner mt-4">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-center">
                                                        <p class="text-gray-500">
                                                            @php echo $i; @endphp
                                                            @php $i++; @endphp
                                                        </p>
                                                        <div class="mx-4 text-gray-500">
                                                            <p class="text-left font-bold">
                                                                {{ $lunch->name }}
                                                                @if ($lunch->isLactoseFree == 1 || $lunch->isVegan == 1 || $lunch->isGlutenFree == 1)
                                                                    <span
                                                                        class="font-normal">({{ $lunch->isLactoseFree == 1 ? 'L ' : '' }}{{ $lunch->isGlutenFree == 1 ? ',G ' : '' }}
                                                                        {{ $lunch->isVegan == 1 ? ',V' : '' }})
                                                                        <sup>*</sup>
                                                                    </span>
                                                                @endif
                                                            </p>
                                                            <div class=" text-xs py-1 text-justify">
                                                                {{ $lunch->description }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-gray-600 w-56">
                                                        {{ $lunch->price }} &euro;
                                                    </p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            {{-- Menu Tabbed view Close --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- Lunch Model close --}}

            {{-- a-la-carte Model --}}
            <div x-data="{ alacarte: false }" x-cloak>
                <button @click="alacarte=true"
                    class="uppercase text-red-500 mx-2 hover:text-white transition ease-in-out duration-300 text-xl rounded-lg shadow-lg hover:bg-red-600 px-4 py-1 border border-red-500">a-la-carte</button>
                <div class="fixed top-0 bottom-0 right-0 left-0 bg-black bg-opacity-60 backdrop-blur-sm z-50"
                    x-show="alacarte">
                    <div class="flex justify-center items-center h-full">
                        <div class="w-9/12 bg-gray-100 h-4/6 rounded-md shadow-lg overflow-y-scroll"
                            @click.away="alacarte=false">
                            <div class="flex justify-between items-center m-3">
                                <h1 class="text-2xl uppercase font-bold">
                                    a-la-carte
                                </h1>
                                <button class="bg-red-500 hover:bg-red-600 text-white rounded-md shadow-md px-5 py-1"
                                    @click="alacarte=false">
                                    Close
                                </button>
                            </div>
                            <hr class="border-red-200">

                            <div class=" border-b border-gray-200" x-data="{ selected: 0 }">
                                <p class="font-bold text-gray-600 text-sm px-4 pt-2 text-center">
                                    (
                                    Kaikkin päärouka-annoksin kuulu basmatiriisiä, tandoori naan leipä ja raita kastike /
                                    All main courses include basmati rice, tandoor naan bread and raita sauce.
                                    )

                                </p>
                                <ul class="shadow-box">

                                    @foreach ($categories as $category)
                                        <li class="relative border-b border-gray-200">

                                            <button type="button" class="w-full px-8 py-6 text-left"
                                                @click="selected !== {{ $loop->iteration }} ? selected = {{ $loop->iteration }} : selected = null">
                                                <div class="flex items-center justify-between">
                                                    <span class="uppercase"
                                                        x-bind:class="{
                                                            'font-bold text-indigo-500 ': selected ==
                                                                {{ $loop->iteration }}
                                                        }">{{ $category->name }}</span>
                                                    <span><i class="ri-add-line"
                                                            x-bind:class="{ 'ri-subtract-line ': selected == {{ $loop->iteration }} }"></i></span>
                                                </div>
                                            </button>
                                            {{-- x-bind:style="selected == {{$loop->iteration}} ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''" --}}

                                            <div class="relative overflow-hidden transition-all max-h-0  duration-700"
                                                style="" x-ref="container1"
                                                :class="selected == {{ $loop->iteration }} ? 'max-h-fit' : ''">
                                                {{-- @php $cartee = App\Models\Carte::where('category_id',$category->id)->get(); @endphp --}}
                                                {{-- {{$cartee}} --}}
                                                @php $i = 1; @endphp
                                                @foreach ($cartes as $carte)
                                                    @if ($carte->category->name == $category->name)
                                                        <div
                                                            class=" border border-gray-200 p-5 rounded-md shadow-inner mt-4">
                                                            <div class="flex justify-between items-center">
                                                                <div class="flex items-center">
                                                                    <p class="text-gray-500">
                                                                        @php echo $i; @endphp
                                                                        @php $i = $i+1; @endphp
                                                                    </p>
                                                                    <div class="mx-4 text-gray-500">
                                                                        <p class="text-left font-bold">
                                                                            {{ $carte->name }}
                                                                        </p>
                                                                        <div class=" text-xs py-1 text-justify">
                                                                            {{ $carte->description }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="text-gray-600 w-56 text-end">
                                                                    {{ $carte->price }} &euro;
                                                                </p>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach

                                            </div>


                                        </li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- a-la-carte Model close --}}
        </div>

        <hr class="border-red-100 mb-5">
        <h1 class="text-indigo-500 text-5xl md:text-7xl text-center font-bold my-10"
            style="font-family: 'Beau Rivage', handwriting;">
            Popular Dishes
        </h1>
        <div class="w-9/12 mx-auto grid md:grid-cols-2 gap-5 md:gap-10 pb-14">
            @foreach ($populars as $popular)
                <div>
                    <div class="flex items-center justify-between ">
                        <div class="flex items-center">
                            <img src="{{ asset('public/public/' . $popular->photopath) }}" alt=""
                                class="w-24 rounded-full h-24 object-cover">
                            <p class="text-gray-600 mx-4">
                                {{ $popular->title }}
                            </p>
                        </div>
                        <p class="text-gray-700 font-bold">
                            {{ $popular->price }} &euro;
                        </p>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

    <div class="my-5">
        <h1 class="text-indigo-500 text-5xl md:text-7xl text-center font-bold my-10"
            style="font-family: 'Beau Rivage', handwriting;">
            Gallery
        </h1>
        <div class="w-11/12 mx-auto grid grid-cols-2 md:grid-cols-4" id="gallery">
            @foreach ($galleries as $gallery)
                <div class="border border-red-200 p-2 rounded-lg shadow-lg m-3 overflow-hidden group w-full">
                    <a href="{{ asset('public/public/' . $gallery->photopath) }}">
                        <img src="{{ asset('public/public/' . $gallery->photopath) }}" alt=""
                            class="rounnded-lg group-hover:scale-110 transition duration-150 ease-in-out overflow-hidden  shadow-md">
                    </a>
                </div>
            @endforeach



        </div>
    </div>
@endsection

@section('js')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper5 = new Swiper(".mySwiper5", {
            grabCursor: true,

            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("#gallery a", {
            groupAll: true, // Group all items
            on: {
                ready: (fancybox) => {
                    console.log(`fancybox #${fancybox.id} is ready!`);
                }
            }
        });
    </script>
@endsection
