@extends('layouts.app')

@section('css')


 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    
@endsection

@section('main')

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