@extends('layouts.admin.app')

@section('content')
    <div class="py-10 px-8 w-full">
        <div class="flex justify-between py-2">
            <h1 class="text-4xl text-gray-800 font-semibold dark:text-gray-400">
                Add New Dish Category
            </h1>
     
        </div>
          <hr class="border-indigo-500">
          <form action="{{route('admin.categories.store')}}" method="post" enctype="multipart/form-data" class="py-5 dark:text-gray-700">
            @csrf
           
           

            <div class="my-2">
                <label class="py-2 text-gray-700 dark:text-gray-400">Dish Category</label>

                <input type="text" name="name" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500" placeholder="Enter name" value="{{old('name')}}">
                @error('name')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>

            

            <div class="flex my-6">
                <a href="{{route('admin.categories.index')}}" class="bg-red-400  px-8 py-1 rounded-md shadow-md hover:shadow-lg hover:bg-red-500 text-white">
                    Cancel
                </a>

                <input type="submit" value="Save" class="bg-indigo-500 px-8 py-1 ml-4 rounded-md shadow-md hover:shadow-lg hover:bg-indigo-500 text-white">
            </div>

          </form>

          
    </div>
@endsection