@extends('layouts.admin.app')

@section('css')

    <link rel="stylesheet" type="text/css" href="{{asset('css/datatable.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="{{ asset('js/datatable.js') }}"></script>
    <style>
        .white-card {
            background: rgba(49, 79, 162, 0.15);
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 7.5px );
            -webkit-backdrop-filter: blur( 7.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }
        .center{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
    </style>
@endsection

@section('content')
    @include('layouts.message')

    <div class="py-4 flex-1 px-6">
        <div class="border-b-2 border-red-100 dark:border-gray-500 flex justify-between items-center">
            @if (Request::is('admin/reservations'))
                <h1 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    All Reservations
                </h1>
                
            @endif
            @if (Request::is('admin/reservations/pending'))
                <h1 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                   Pending Reservations
                </h1>
            
            @endif

            @if (Request::is('admin/reservations/confirmed'))
                <h1 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                   Confirmed Reservations
                </h1>
            
            @endif

            @if (Request::is('admin/reservations/canceled'))
                <h1 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                   Cancelled Reservations
                </h1>
            
            @endif



            <div class="my-2">
                <a href="{{route('admin.reservations.fetchpending')}}" class="px-6 mx-2  py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-md shadow-md">
                    Pending
                </a>


                <a href="{{route('admin.reservations.fetchconfirm')}}" class="px-6 mx-2  py-2 bg-green-500 hover:bg-green-600 text-white rounded-md shadow-md">
                    Confirmed
                </a>


                <a href="{{route('admin.reservations.fetchcancel')}}" class="px-6 mx-2  py-2 bg-red-500 hover:bg-red-600 text-white rounded-md shadow-md">
                    Concelled
                </a>
            </div>

        </div>

        <div class="mt-8  z-10 animate__animated animate__fadeIn">
            <table id="index" class="display  w-full">
                <thead >
                    <tr class="text-left border  border-gray-200">
                        <th class="p-2">S.No</th>
                        <th class="p-2">Date</th>
                        <th class="p-2">Time</th>
                        <th class="p-2">Party</th>
                        <th class="p-2">Name</th>
                        <th class="p-2">Email</th>
                        <th class="p-2">Phone Number</th>
                        <th class="p-2">Message</th>
                        <th class="p-2">Status</th>
                        <th class="p-2">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 ">
                    @foreach($reservations as $reservation)
                        <tr class="border border-gray-200">
                            <td class="p-2">{{$loop->iteration}}</td>
                            <td class="p-2">{{$reservation->date}}</td>
                            <td class="p-2">{{$reservation->time}}</td>
                            <td class="p-2">{{$reservation->party}}</td>
                            <td class="p-2">{{$reservation->name}}</td>
                            <td class="p-2">{{$reservation->email}}</td>
                            <td class="p-2">{{$reservation->phone}}</td>
                            <td class="p-2">{{$reservation->message}}</td>
                            <td class="p-2 font-bold">{{$reservation->status}}</td>
                            <td class="p-2">
                                <a href="{{route('admin.reservations.confirm',$reservation->id)}}" class="px-4 py-1 bg-green-500 hover:bg-green-700 text-white rounded-md shadow-md mx-2" >
                                    Confirm
                                </a>

                                <a href="{{route('admin.reservations.cancel',$reservation->id)}}" class="px-4 py-1 bg-red-500 hover:bg-red-700 text-white rounded-md shadow-md">
                                    Cancel
                                </a>
                                
                            </td>
                        </tr>
                    
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>

 

    </div>


   
@endsection

@section('js')

    <script>
        $(document).ready( function () {
        $('#index').DataTable();
    } );
    </script>


    
    <script>
        function showdelete($id){
            $('#deletemodal').removeClass('hidden');
            $('#deletemodal').addClass('flex');
            document.getElementById('dataid').value = $id;
        }

        function hidedelete(){
            $('#deletemodal').removeClass('flex');
            $('#deletemodal').addClass('hidden');
        }
    </script>
@endsection