@extends('layouts.admin.app')

@section('content')
    <div class="py-10 px-8 w-full">
        <div class="flex justify-between py-2">
            <h1 class="text-4xl text-gray-800 font-semibold dark:text-gray-400">
                Update Popular Dish
            </h1>

        </div>
          <hr class="border-indigo-700">
          <form action="{{route('admin.populars.update',$popular->id)}}" method="post" enctype="multipart/form-data" class="py-5 dark:text-gray-700">
            @csrf
            @method('put')

            <div class="my-2">
                <label class="py-5 text-gray-700 dark:text-gray-400 my-5">Previous Image</label>
                <img src="{{asset('public/'.$popular->photopath)}}" alt="" class="w-32 h-32 rounded-md shadow-md">
            </div>
           
            <div class="mt-10">
                <label class="py-2 text-gray-700 dark:text-gray-400">Change Image</label>

                <input type="file" name="photopath" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-indigo-700 file:bg-indigo-700 file:border-none file:text-white file:shadow-md file:rounded-md file:hover:bg-indigo-900 file:cursor-pointer ">
                @error('photopath')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>


            <div class="my-2">
                <label class="py-2 text-gray-700 dark:text-gray-400">Dish Name</label>

                <input type="text" name="title" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-indigo-700" placeholder="Enter title" value="{{$popular->title}}">
                @error('title')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="my-2">
                <label class="py-2 text-gray-700 dark:text-gray-400">Dish Price</label>

                <input type="text" name="price" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-700 focus:ring-indigo-700" placeholder="Enter price" value="{{$popular->price}}">
                @error('price')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="flex my-6">
                <a href="{{route('admin.populars.index')}}" class="bg-red-400  px-8 py-1 rounded-md shadow-md hover:shadow-lg hover:bg-red-500 text-white">
                    Cancel
                </a>

                <input type="submit" value="Update" class="bg-indigo-700 px-8 py-1 ml-4 rounded-md shadow-md hover:shadow-lg hover:bg-indigo-900 text-white">
            </div>

          </form>

          
    </div>
@endsection