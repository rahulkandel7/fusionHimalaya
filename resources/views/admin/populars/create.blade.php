@extends('layouts.admin.app')

@section('content')
    <div class="py-10 px-8 w-full">
        <div class="flex justify-between py-2">
            <h1 class="text-4xl text-gray-800 font-semibold dark:text-gray-400">
                Add New Popular Dishes
            </h1>
     
        </div>
          <hr class="border-indigo-500">
          <form action="{{route('admin.populars.store')}}" method="post" enctype="multipart/form-data" class="py-5 dark:text-gray-700">
            @csrf
           
            <div class="mt-5">
                <label class="py-2 text-gray-700 dark:text-gray-400">Select Image</label>

                <input type="file" name="photopath" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500 file:bg-indigo-500 file:border-none file:text-white file:shadow-md file:rounded-md file:hover:bg-indigo-500 file:cursor-pointer ">
                @error('photopath')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="my-2">
                <label class="py-2 text-gray-700 dark:text-gray-400">Dish Name</label>

                <input type="text" name="title" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500" placeholder="Enter title" value="{{old('title')}}">
                @error('title')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="my-2">
                <label class="py-2 text-gray-700 dark:text-gray-400">Dish Price</label>

                <input type="text" name="price" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500" placeholder="Enter price" value="{{old('price')}}">
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

                <input type="submit" value="Save" class="bg-indigo-500 px-8 py-1 ml-4 rounded-md shadow-md hover:shadow-lg hover:bg-indigo-500 text-white">
            </div>

          </form>

          
    </div>
@endsection