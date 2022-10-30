@extends('layouts.app')

@section('css')

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">

 <link rel="stylesheet" href="{{asset('datepicker/mc-calendar.min.css')}}">
    
@endsection

@section('main')

@include('layouts.message')

<div class="my-5">
    <h1 class="text-indigo-500 text-5xl md:text-7xl text-center font-bold my-10" style="font-family: 'Beau Rivage', handwriting;">
      Reservation
    </h1>

    <div class="w-11/12 mx-auto">
      <h2 class="capitalize text-xl text-indigo-500">
        Book A table
      </h2>
      <hr class="my-3">
      <form action="{{route('make-reservation')}}" method="post" class="w-2/12">
        @csrf
        <div class="my-2">
          <label for="date" class="block text-base  text-gray-600">Date</label>
          <input name="date" type="text" placeholder="Select Date" id="date" class="border border-indigo-500 rounded-md shadow-md text-gray-600 my-2 w-full" value="{{old('date')}}" required>
        </div>

        <div class="my-2">
          <label for="time" class="block text-base  text-gray-600">Time</label>
          <input name="time" type="time" class="border border-indigo-500 rounded-md shadow-md text-gray-600 my-2 w-full" required value="{{old('time')}}">
        </div>

        <div class="my-2">
          <label for="party" class="block text-base  text-gray-600">Party</label>
          <select name="party" id="party" class="border border-indigo-500 rounded-md shadow-md text-gray-600 my-2 w-full">
            @for ($i = 1; $i <= 100; $i++)
                <option value="{{$i}}">{{$i}}</option>
            @endfor
          </select>

        </div>

      <h2 class="capitalize text-xl text-indigo-500">
       Contact Details
      </h2>
      <hr class="my-3">
        <div class="my-2">
          <label for="name" class="block text-base  text-gray-600">Name</label>
          <input name="name" type="text" placeholder="Enter Name " class="border border-indigo-500 rounded-md shadow-md text-gray-600 my-2 w-full" required value="{{old('name')}}">
        </div>

        <div class="my-2">
          <label for="email" class="block text-base  text-gray-600">Email</label>
          <input name="email" type="email" placeholder="Enter Email Address " class="border border-indigo-500 rounded-md shadow-md text-gray-600 my-2 w-full" required value="{{old('email')}}">
        </div>

        <div class="my-2">
          <label for="phone" class="block text-base  text-gray-600">Phone Number</label>
          <input name="phone" type="text" class="border border-indigo-500 rounded-md shadow-md text-gray-600 my-2 w-full" required value="{{old('phone')}}">
        </div>

        <div class="my-2">
          <label for="message" class="block text-base  text-gray-600">Message</label>
          <textarea name="message" type="text" class="border border-indigo-500 rounded-md shadow-md text-gray-600 my-2 w-full"></textarea>
        </div>

        <div class="my-2">
          <input type="submit" value="Request Booking" class="px-6 py-2 rounded-md shadow-md text-white bg-indigo-500 hover:bg-indigo-800 cursor-pointer"> 
        </div>

        
      </form>
    </div>
  </div>
    
@endsection

@section('js')
    <script src="{{asset('datepicker/mc-calendar.min.js')}}"></script>

    <script>
      const myDatePicker = MCDatepicker.create({ 
      el: '#date' ,
      bodyType: 'inline',
      });
    </script>
@endsection

