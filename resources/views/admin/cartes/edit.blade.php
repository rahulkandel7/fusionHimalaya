@extends('layouts.admin.app')

@section('content')
    <div class="py-10 px-8 w-full">
        <div class="flex justify-between py-2">
            <h1 class="text-4xl text-gray-800 font-semibold dark:text-gray-400">
                Update A-LA-CARTE Item:- {{$carte->name}}
            </h1>

        </div>
          <hr class="border-indigo-700">
          <form action="{{route('admin.cartes.update',$carte->id)}}" method="post" enctype="multipart/form-data" class="py-5 dark:text-gray-700">
            @csrf
            @method('put')

            <div class="my-2">
                <label class="py-2 text-gray-700 dark:text-gray-400">Name</label>

                <input type="text" name="name" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500" placeholder="Enter Item Name" value="{{$carte->name}}">
                @error('name')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="my-2">
                <label class="py-2 text-gray-700 dark:text-gray-400">Description</label>

                <textarea  name="description" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500" placeholder="Enter carte Description">{{$carte->description}}</textarea>
                @error('description')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="my-5">
                <label class="py-2 text-gray-700 dark:text-gray-400">Price</label>

                <input type="text" name="price" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500" placeholder="Enter Item Price" value="{{$carte->price}}">
                @error('price')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="my-5">
                <label class="py-2 text-gray-700 dark:text-gray-400">Select Category </label>

                <select name="category_id" id="category_id" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500">
                    <option selected disabled>-- Select Category --</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{$carte->category_id == $category->id ? 'selected' : ''}}>
                            {{$category->name}}
                        </option>
                    @endforeach
                </select>
            </div>

           

            <div class="flex my-6">
                <a href="{{route('admin.cartes.index')}}" class="bg-red-400  px-8 py-1 rounded-md shadow-md hover:shadow-lg hover:bg-red-500 text-white">
                    Cancel
                </a>

                <input type="submit" value="Update" class="bg-indigo-700 px-8 py-1 ml-4 rounded-md shadow-md hover:shadow-lg hover:bg-indigo-900 text-white">
            </div>

          </form>

          
    </div>
@endsection