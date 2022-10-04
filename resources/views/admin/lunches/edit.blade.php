@extends('layouts.admin.app')

@section('content')
    <div class="py-10 px-8 w-full">
        <div class="flex justify-between py-2">
            <h1 class="text-4xl text-gray-800 font-semibold dark:text-gray-400">
                Update Lunch Item:- {{$lunch->name}}
            </h1>

        </div>
          <hr class="border-indigo-700">
          <form action="{{route('admin.lunches.update',$lunch->id)}}" method="post" enctype="multipart/form-data" class="py-5 dark:text-gray-700">
            @csrf
            @method('put')

            <div class="my-2">
                <label class="py-2 text-gray-700 dark:text-gray-400">Name</label>

                <input type="text" name="name" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500" placeholder="Enter Lunch Name" value="{{$lunch->name}}">
                @error('name')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="my-2">
                <label class="py-2 text-gray-700 dark:text-gray-400">Description</label>

                <textarea  name="description" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500" placeholder="Enter Lunch Description">{{$lunch->description}}</textarea>
                @error('description')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="my-5">
                <label class="py-2 text-gray-700 dark:text-gray-400">Price</label>

                <input type="text" name="price" id="" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500" placeholder="Enter Lunch Price" value="{{$lunch->price}}">
                @error('price')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="my-5">
                <label class="py-2 text-gray-700 dark:text-gray-400">Select Lunch Day</label>

                <select name="day" id="day" class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500">
                    <option selected disabled>-- Select Day --</option>
                    <option value="Monday" @if($lunch->day == 'Monday') selected @endif>Monday</option>
                    <option value="Tuesday"  @if($lunch->day == 'Tuesday') selected @endif>Tuesday</option>
                    <option value="Wednesday"  @if($lunch->day == 'Wednesday') selected @endif>Wednesday</option>
                    <option value="Thursday"  @if($lunch->day == 'Thursday') selected @endif>Thursday</option>
                    <option value="Friday"  @if($lunch->day == 'Friday') selected @endif>Friday</option>
                </select>
            </div>

            <div class="my-8">
                <label class="py-2 text-gray-700 dark:text-gray-400">Is Lactos Free</label>

                <input type="radio" name="isLactoseFree" id="" value="1" @if($lunch->isLactoseFree == 1) checked @endif class="mx-2 border shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500"> Yes
                <input type="radio" name="isLactoseFree" id="" value="0"  @if($lunch->isLactoseFree == 0) checked @endif class="mx-2 border shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500"> No

                @error('isLactoseFree')
                <p class="text-red-500 p-2">
                    {{$message}}
                </p>
            @enderror
            </div>

            <div class="my-8">
                <label class="py-2 text-gray-700 dark:text-gray-400">Is Gulton Free</label>

                <input type="radio" name="isGlutenFree" id="" value="1"  @if($lunch->isGlutenFree == 1) checked @endif class="mx-2 border shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500"> Yes
                <input type="radio" name="isGlutenFree" id="" value="0"  @if($lunch->isGlutenFree == 0) checked @endif class="mx-2 border shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500"> No

                @error('isGlutenFree')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="my-8">
                <label class="py-2 text-gray-700 dark:text-gray-400">Is Vegan</label>

                <input type="radio" name="isVegan" id="" value="1"  @if($lunch->isVegan == 1) checked @endif class="mx-2 border shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500"> Yes
                <input type="radio" name="isVegan" id="" value="0"  @if($lunch->isVegan == 0) checked @endif class="mx-2 border shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500"> No

                @error('isVegan')
                    <p class="text-red-500 p-2">
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="flex my-6">
                <a href="{{route('admin.lunches.index')}}" class="bg-red-400  px-8 py-1 rounded-md shadow-md hover:shadow-lg hover:bg-red-500 text-white">
                    Cancel
                </a>

                <input type="submit" value="Update" class="bg-indigo-700 px-8 py-1 ml-4 rounded-md shadow-md hover:shadow-lg hover:bg-indigo-900 text-white">
            </div>

          </form>

          
    </div>
@endsection