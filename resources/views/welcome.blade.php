@extends('layouts.app')

@section('css')
 <!-- Link Swiper's CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    
@endsection

@section('main')
  <div class="swiper mySwiper5 md:h-[90vh] z-0">
    <div class="swiper-wrapper">
      @foreach ($slideshows as $slideshow)
        <div class="swiper-slide  relative">
          <div class="absolute bg-black bg-opacity-30 top-0 bottom-0 right-0 left-0">
              <div class="flex justify-center items-center h-full">
                <div>
                  <h1 class="text-6xl text-white font-bold text-center" style="font-family: 'Beau Rivage', handwriting;">
                    Welcome
                  </h1>
    
                  <h1 class="text-4xl my-2 text-white font-bold text-center" style="font-family: 'Beau Rivage', handwriting;">
                    Himalayan Taste Foods
                  </h1>
                  <div class="flex justify-center mt-6">
                    <button class="px-4 py-2 rounded-full shadow-md border border-red-500 text-white hover:bg-red-500">Book Table</button>
                  </div>
                </div>
              </div>
          </div>
          <img src="{{asset('public/'.$slideshow->photopath)}}" alt="" class="w-full">
        </div>
      @endforeach
     
    </div>
  </div>

  <div class="my-5 ">
    <h1 class="text-indigo-500 text-5xl md:text-7xl text-center font-bold mt-10" style="font-family: 'Beau Rivage', handwriting;">
      Welcome to the Fusion Himalayan
    </h1>
    <div class="w-11/12 mx-auto grid md:grid-cols-2 my-8 gap-10">
        <div>
          <p class="text-justify text-gray-600 text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quisquam officiis culpa beatae ipsam, voluptates necessitatibus ex enim facere incidunt hic tenetur minima maiores. Expedita voluptate incidunt modi voluptatum veritatis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero odit eaque repellendus? Ex, cum neque vel, consectetur dolore laboriosam, laborum sunt hic quam in fugiat. Consequuntur consectetur nihil ullam doloribus.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus repellat incidunt rem mollitia, adipisci aliquid totam? Fugiat provident voluptas porro dolores, numquam delectus, inventore ea officiis nisi, quidem laudantium totam!
          </p>

          <p class="text-justify text-gray-600 text-sm mt-2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quisquam officiis culpa beatae ipsam, voluptates necessitatibus ex enim facere incidunt hic tenetur minima maiores. Expedita voluptate incidunt modi voluptatum veritatis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero odit eaque repellendus? Ex, cum neque vel, consectetur dolore laboriosam, laborum sunt hic quam in fugiat. Consequuntur consectetur nihil ullam doloribus.
          </p>

          <div class="flex justify-end my-2">
            <button class="bg-red-500 hover:bg-red-600 rounded-md shadow-lg text-white px-4 py-1">
              Read More
            </button>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-10">
            <div class="border border-red-200 p-2 rounded-lg shadow-lg">
              <img src="{{asset('images/slide1.webp')}}" alt="" class="rounnded-lg  shadow-md">
            </div>
            <div class="border border-red-200 p-2 rounded-lg shadow-lg">
              <img src="{{asset('images/slide1.webp')}}" alt="" class="rounnded-lg  shadow-md">
            </div>

            <div class="border border-indigo-200 p-2 rounded-lg shadow-lg">
              <img src="{{asset('images/slide1.webp')}}" alt="" class="rounnded-lg  shadow-md">
            </div>
            <div class="border border-indigo-200 p-2 rounded-lg shadow-lg">
              <img src="{{asset('images/slide1.webp')}}" alt="" class="rounnded-lg  shadow-md">
            </div>
        </div>
    </div>
  </div>

  <div class="my-5">
    <div class="relative w-full h-64" style="background-image: url('/images/slide2.jpeg');background-attachment: fixed; background-size: cover">
      <div class="absolute top-0 bottom-0 right-0 left-0 bg-black bg-opacity-50">
        <div class="flex justify-center items-center h-full">
          <div>
            <h1 class="uppercase text-3xl text-white text-center font-bold">
              Book a table now !
            </h1>
            <div class="flex justify-center my-8">
              <button class="px-4 py-2 rounded-full shadow-md border border-red-500 text-white hover:bg-red-500">Book Now</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div id="menu" class=" w-full h-20"></div>
  <div class="my-5">
    <h1 class="text-indigo-500 text-5xl md:text-7xl text-center font-bold mt-10" style="font-family: 'Beau Rivage', handwriting;">
      Our Menu
    </h1>
    <p class="mt-3 text-center font-light tracking-wider text-lg md:text-xl">
      Fresh and Delicious
    </p>

    <div class="flex justify-center items-center my-7">
      {{-- Lunch Model --}}
      <div x-data="{isLunch:false}">
        <button @click="isLunch=true" class="uppercase text-red-500 mx-2 hover:text-white transition ease-in-out duration-300 text-xl rounded-lg shadow-lg hover:bg-red-600 px-4 py-1 border border-red-500">Lunch</button>
        <div class="fixed top-0 bottom-0 right-0 left-0 bg-black bg-opacity-60 backdrop-blur-sm z-50" x-show="isLunch" >
          <div class="flex justify-center items-center h-full" >
            <div class="w-9/12 bg-gray-100 h-4/6 rounded-md shadow-lg overflow-scroll" @click.away="isLunch=false">
              <div class="flex justify-between items-center m-3">
                <h1 class="text-2xl font-bold">
                  Lunch
                </h1>
                <button class="bg-red-500 hover:bg-red-600 text-white rounded-md shadow-md px-5 py-1" @click="isLunch=false">
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
                        x-bind:class="{ ' bg-indigo-500 text-white  rounded-md shadow-md': current === 3 }">Wednesday </button>
                        <button class="px-4 py-2 w-full uppercase my-2" x-on:click="current = 4"
                        x-bind:class="{ ' bg-indigo-500 text-white  rounded-md shadow-md': current === 4 }">Thursday </button>
                        <button class="px-4 py-2 w-full uppercase my-2" x-on:click="current = 5"
                        x-bind:class="{ ' bg-indigo-500 text-white  rounded-md shadow-md': current === 5 }">Friday </button>
                </div>
                <div x-show="current === 1" class="p-3 text-center mt-2 text-xs md:text-base">
                    <div class=" border border-gray-200 p-5 rounded-md shadow-inner mt-4">
                        <div class="flex justify-between items-center">
                          <div class="flex items-center">
                            <p class="text-gray-500">
                              1
                            </p>
                            <div class="mx-4 text-gray-500">
                              <p class="text-left font-bold">
                                Saag Paneer <span class="font-normal">(G,L) <sup>*</sup> </span>
                              </p>
                              <div class=" text-xs py-1 text-justify">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis aperiam illo possimus nam, maiores, accusamus veritatis quod omnis voluptatum quidem modi deserunt, assumenda quisquam numquam dicta obcaecati aspernatur excepturi similique.
                              </div>
                            </div>
                          </div>
                          <p class="text-gray-600 w-56">
                            1234 &euro;
                          </p>
                        </div>
                    </div>

                    <div class=" border border-gray-200 p-5 rounded-md shadow-inner mt-4">
                      <div class="flex justify-between items-center">
                        <div class="flex items-center">
                          <p class="text-gray-500">
                            1
                          </p>
                          <div class="mx-4 text-gray-500">
                            <p class="text-left font-bold">
                              Saag Paneer <span class="font-normal">(G,L) <sup>*</sup> </span>
                            </p>
                            <div class="text-left text-xs py-1 ">
                              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis aperiam illo possimus nam, maiores, accusamus veritatis quod omnis voluptatum quidem modi deserunt, assumenda quisquam numquam dicta obcaecati aspernatur excepturi similique.
                            </div>
                          </div>
                        </div>
                        <p class="text-gray-600 w-40">
                          1234 &euro;
                        </p>
                      </div>
                    </div>

                    <div class=" border border-gray-200 p-5 rounded-md shadow-inner mt-4">
                      <div class="flex justify-between items-center">
                        <div class="flex items-center">
                          <p class="text-gray-500">
                            1
                          </p>
                          <div class="mx-4 text-gray-500">
                            <p class="text-left font-bold">
                              Saag Paneer <span class="font-normal">(G,L) <sup>*</sup> </span>
                            </p>
                            <div class="text-left text-xs py-1 ">
                              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis aperiam illo possimus nam, maiores, accusamus veritatis quod omnis voluptatum quidem modi deserunt, assumenda quisquam numquam dicta obcaecati aspernatur excepturi similique.
                            </div>
                          </div>
                        </div>
                        <p class="text-gray-600 w-40">
                          1234 &euro;
                        </p>
                      </div>
                    </div>

                    <div class=" border border-gray-200 p-5 rounded-md shadow-inner mt-4">
                      <div class="flex justify-between items-center">
                        <div class="flex items-center">
                          <p class="text-gray-500">
                            1
                          </p>
                          <div class="mx-4 text-gray-500">
                            <p class="text-left font-bold">
                              Saag Paneer <span class="font-normal">(G,L) <sup>*</sup> </span>
                            </p>
                            <div class="text-left text-xs py-1 ">
                              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis aperiam illo possimus nam, maiores, accusamus veritatis quod omnis voluptatum quidem modi deserunt, assumenda quisquam numquam dicta obcaecati aspernatur excepturi similique.
                            </div>
                          </div>
                        </div>
                        <p class="text-gray-600 w-40">
                          1234 &euro;
                        </p>
                      </div>
                    </div>
                </div>
                <div x-show="current === 2" class="p-3 text-center mt-6">
                    <p>Second Tab Content</p>
                </div>
                <div x-show="current === 3" class="p-3 text-center mt-6">
                    <p>Third Tab Content</p>
                </div>
            </div>
              {{-- Menu Tabbed view Close --}}
            </div>
          </div>
        </div>
      </div>
      {{-- Lunch Model close --}}

       {{-- a-la-carte Model --}}
        <div x-data="{alacarte:false}">
          <button @click="alacarte=true" class="uppercase text-red-500 mx-2 hover:text-white transition ease-in-out duration-300 text-xl rounded-lg shadow-lg hover:bg-red-600 px-4 py-1 border border-red-500">a-la-carte</button>
          <div class="fixed top-0 bottom-0 right-0 left-0 bg-black bg-opacity-60 backdrop-blur-sm z-50" x-show="alacarte" >
            <div class="flex justify-center items-center h-full" >
              <div class="w-9/12 bg-gray-100 h-4/6 rounded-md shadow-lg overflow-y-scroll" @click.away="alacarte=false">
                <div class="flex justify-between items-center m-3">
                  <h1 class="text-2xl uppercase font-bold">
                    a-la-carte
                  </h1>
                  <button class="bg-red-500 hover:bg-red-600 text-white rounded-md shadow-md px-5 py-1" @click="alacarte=false">
                    Close
                  </button>
                </div>
                <hr class="border-red-200">

                <div class=" border-b border-gray-200" x-data="{selected:1}">
                  <ul class="shadow-box">
                          
                    <li class="relative border-b border-gray-200">
              
                      <button type="button" class="w-full px-8 py-6 text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                        <div class="flex items-center justify-between">
                          <span class="uppercase" x-bind:class="{'font-bold text-indigo-500 ': selected==1}">Starters</span>
                          <span><i class="ri-add-line" x-bind:class="{'ri-subtract-line ': selected==1}" ></i></span>
                        </div>
                        </button>
              
                      <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">

                        <div class=" border border-gray-200 p-5 rounded-md shadow-inner mt-4">
                          <div class="flex justify-between items-center">
                            <div class="flex items-center">
                              <p class="text-gray-500">
                                1
                              </p>
                              <div class="mx-4 text-gray-500">
                                <p class="text-left font-bold">
                                  Saag Paneer <span class="font-normal">(G,L) <sup>*</sup> </span>
                                </p>
                                <div class=" text-xs py-1 text-justify">
                                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis aperiam illo possimus nam, maiores, accusamus veritatis quod omnis voluptatum quidem modi deserunt, assumenda quisquam numquam dicta obcaecati aspernatur excepturi similique.
                                </div>
                              </div>
                            </div>
                            <p class="text-gray-600 w-56">
                              1234 &euro;
                            </p>
                          </div>
                      </div>

                      <div class=" border border-gray-200 p-5 rounded-md shadow-inner mt-4">
                        <div class="flex justify-between items-center">
                          <div class="flex items-center">
                            <p class="text-gray-500">
                              1
                            </p>
                            <div class="mx-4 text-gray-500">
                              <p class="text-left font-bold">
                                Saag Paneer <span class="font-normal">(G,L) <sup>*</sup> </span>
                              </p>
                              <div class=" text-xs py-1 text-justify">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis aperiam illo possimus nam, maiores, accusamus veritatis quod omnis voluptatum quidem modi deserunt, assumenda quisquam numquam dicta obcaecati aspernatur excepturi similique.
                              </div>
                            </div>
                          </div>
                          <p class="text-gray-600 w-56">
                            1234 &euro;
                          </p>
                        </div>
                    </div>

                    <div class=" border border-gray-200 p-5 rounded-md shadow-inner mt-4">
                      <div class="flex justify-between items-center">
                        <div class="flex items-center">
                          <p class="text-gray-500">
                            1
                          </p>
                          <div class="mx-4 text-gray-500">
                            <p class="text-left font-bold">
                              Saag Paneer <span class="font-normal">(G,L) <sup>*</sup> </span>
                            </p>
                            <div class=" text-xs py-1 text-justify">
                              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis aperiam illo possimus nam, maiores, accusamus veritatis quod omnis voluptatum quidem modi deserunt, assumenda quisquam numquam dicta obcaecati aspernatur excepturi similique.
                            </div>
                          </div>
                        </div>
                        <p class="text-gray-600 w-56">
                          1234 &euro;
                        </p>
                      </div>
                  </div>

             
                        </div>
                      </div>
              
                    </li>
              
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      {{-- a-la-carte Model close --}}
    </div>

    <hr class="border-red-100 my-5">
    <h1 class="text-indigo-500 text-5xl md:text-7xl text-center font-bold my-10" style="font-family: 'Beau Rivage', handwriting;">
      Popular Dishes
    </h1>
    <div class="w-9/12 mx-auto grid md:grid-cols-2 gap-5 md:gap-20">
      <div>
        <div class="flex items-center justify-between my-5">
          <div class="flex items-center">
            <img src="{{asset('images/slide1.webp')}}" alt="" class="w-24 rounded-full h-24 object-cover">
            <p class="text-gray-600 mx-4">
              name of food
            </p>
          </div>
          <p class="text-gray-700 font-bold">
            17,45 &euro;
          </p>
        </div>

        <div class="flex items-center justify-between my-5">
          <div class="flex items-center">
            <img src="{{asset('images/slide1.webp')}}" alt="" class="w-24 rounded-full h-24 object-cover">
            <p class="text-gray-600 mx-4">
              name of food
            </p>
          </div>
          <p class="text-gray-700 font-bold">
            17,45 &euro;
          </p>
        </div>

        <div class="flex items-center justify-between my-5">
          <div class="flex items-center">
            <img src="{{asset('images/slide1.webp')}}" alt="" class="w-24 rounded-full h-24 object-cover">
            <p class="text-gray-600 mx-4">
              name of food
            </p>
          </div>
          <p class="text-gray-700 font-bold">
            17,45 &euro;
          </p>
        </div>

       
      </div>

      <div>
        <div class="flex items-center justify-between my-5">
          <div class="flex items-center">
            <img src="{{asset('images/slide1.webp')}}" alt="" class="w-24 rounded-full h-24 object-cover">
            <p class="text-gray-600 mx-4">
              name of food
            </p>
          </div>
          <p class="text-gray-700 font-bold">
            17,45 &euro;
          </p>
        </div>

        <div class="flex items-center justify-between my-5">
          <div class="flex items-center">
            <img src="{{asset('images/slide1.webp')}}" alt="" class="w-24 rounded-full h-24 object-cover">
            <p class="text-gray-600 mx-4">
              name of food
            </p>
          </div>
          <p class="text-gray-700 font-bold">
            17,45 &euro;
          </p>
        </div>

        <div class="flex items-center justify-between my-5">
          <div class="flex items-center">
            <img src="{{asset('images/slide1.webp')}}" alt="" class="w-24 rounded-full h-24 object-cover">
            <p class="text-gray-600 mx-4">
              name of food
            </p>
          </div>
          <p class="text-gray-700 font-bold">
            17,45 &euro;
          </p>
        </div>

      </div>
    </div>
  </div>

  <div class="my-5">
    <h1 class="text-indigo-500 text-5xl md:text-7xl text-center font-bold my-10" style="font-family: 'Beau Rivage', handwriting;">
      Food Gallery
    </h1>
    <div class="w-11/12 mx-auto grid grid-cols-2 md:grid-cols-4" id="gallery">
      @foreach ($galleries as $gallery)
        <div class="border border-red-200 p-2 rounded-lg shadow-lg m-3 overflow-hidden group">
          <a href="{{asset('public/'.$gallery->photopath)}}">
            <img src="{{asset('public/'.$gallery->photopath)}}" alt="" class="rounnded-lg group-hover:scale-110 transition duration-150 ease-in-out overflow-hidden  shadow-md">
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
        effect: "creative",
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        creativeEffect: {
          prev: {
            shadow: true,
            origin: "left center",
            translate: ["-5%", 0, -200],
            rotate: [0, 100, 0],
          },
          next: {
            origin: "right center",
            translate: ["5%", 0, -200],
            rotate: [0, -100, 0],
          },
        },
      });
     </script>

     <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
     <script>
      Fancybox.bind("#gallery a", {
        groupAll : true, // Group all items
        on : {
          ready : (fancybox) => {
            console.log(`fancybox #${fancybox.id} is ready!`);
          }
        }
      });
    </script>

@endsection