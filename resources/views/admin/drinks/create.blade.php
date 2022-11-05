@extends('layouts.admin.app')

@section('content')
    @include('layouts.message')
    <div class="py-10 px-8 w-full">
        <div class="flex justify-between py-2">
            <h1 class="text-4xl text-gray-800 font-semibold dark:text-gray-400">
                Add New Drink
            </h1>

        </div>
        <hr class="border-indigo-500">
        <form action="{{ route('admin.drinks.store') }}" method="post" enctype="multipart/form-data"
            class="py-5 dark:text-gray-700">
            @csrf


            <div class="my-2">
                <label class="py-2 text-gray-700 dark:text-gray-400">Name</label>

                <input type="text" name="name" id=""
                    class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500"
                    placeholder="Enter Lunch Name" value="{{ old('name') }}">
                @error('name')
                    <p class="text-red-500 p-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="my-2">
                <label class="py-2 text-gray-700 dark:text-gray-400">Alcohol Level</label>

                <input type="text" name="level" id=""
                    class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500"
                    placeholder="Enter Alcohol Level" value="{{ old('level') }}">
                @error('level')
                    <p class="text-red-500 p-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="my-2">
                <label class="py-2 text-gray-700 dark:text-gray-400">Liter</label>

                <input type="text" name="liter" id=""
                    class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500"
                    placeholder="Enter liter" value="{{ old('liter') }}">
                @error('liter')
                    <p class="text-red-500 p-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="my-5">
                <label class="py-2 text-gray-700 dark:text-gray-400">Price</label>

                <input type="text" name="price" id=""
                    class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500"
                    placeholder="Enter Lunch Price" value="{{ old('price') }}">
                @error('price')
                    <p class="text-red-500 p-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="my-5">
                <label class="py-2 text-gray-700 dark:text-gray-400">Select Drink Type</label>

                <select name="type" id="type"
                    class="w-full border-none shadow-lg rounded-md placeholder:text-gray-400 focus:ring-indigo-500">
                    <option selected disabled>-- Select Drink Type --</option>
                    <option value="soft">Soft Drink</option>
                    <option value="hard">Hard Drink</option>
                </select>
            </div>


            <div class="flex my-6">
                <a href="{{ route('admin.drinks.index') }}"
                    class="bg-red-400  px-8 py-1 rounded-md shadow-md hover:shadow-lg hover:bg-red-500 text-white">
                    Cancel
                </a>

                <input type="submit" value="Save"
                    class="bg-indigo-500 px-8 py-1 ml-4 rounded-md shadow-md hover:shadow-lg hover:bg-indigo-500 text-white">
            </div>

        </form>


    </div>
@endsection
