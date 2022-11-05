@extends('layouts.admin.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatable.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="{{ asset('js/datatable.js') }}"></script>
    <style>
        .white-card {
            background: rgba(49, 79, 162, 0.15);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(7.5px);
            -webkit-backdrop-filter: blur(7.5px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
@endsection

@section('content')
    @include('layouts.message')

    <div class="py-4 flex-1 px-6">
        <div class="border-b-2 border-red-100  flex justify-between">
            <h1 class="font-bold pt-4 pb-1 px-2 text-3xl">Drinks</h1>
            <a href="{{ route('admin.drinks.create') }}"
                class="bg-slate-200 hover:bg-slate-300 font-bold mt-5 py-1 rounded-lg px-4 text-lg">Add New Drink</a>
        </div>

        <div class="mt-8  z-10 animate__animated animate__fadeIn">
            <table id="index" class="display  w-full">
                <thead>
                    <tr class="text-left border border-gray-200">
                        <th class="p-2">S.No</th>
                        <th class="p-2">Name</th>
                        <th class="p-2">Alcohol Level</th>
                        <th class="p-2">Liter</th>
                        <th class="p-2">Price</th>
                        <th class="p-2">Type</th>

                        <th class="p-2">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-900 ">
                    @foreach ($drinks as $drink)
                        <tr class=" border-gray-200 border ">

                            <td class="p-2">{{ $loop->iteration }}</td>
                            <td class="p-2">{{ $drink->name }}</td>
                            <td class="p-2">{{ $drink->level }} %</td>
                            <td class="p-2">{{ $drink->liter }}</td>
                            <td class="p-2">{{ $drink->price }} &euro;</td>
                            <td class="p-2">{{ $drink->type }} </td>

                            <td class="p-2">
                                <a href="{{ route('admin.drinks.edit', $drink->id) }}"
                                    class="py-1 text-indigo-700 hover:text-indigo-900 mx-0.5 px-2 rounded-md text-xl shadow-md hover:shadow-lg "
                                    title="Edit"><i class="ri-edit-box-line"></i></a>
                                <a onclick="showdelete({{ $drink->id }})"
                                    class="py-1 text-red-600 hover:text-red-800 mx-0.5 px-2 rounded-md text-xl shadow-md hover:shadow-lg"
                                    title="Delete"><i class="ri-delete-bin-4-line"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    {{-- Modal For Delete --}}

    <!-- Main modal -->
    <div id="deletemodal"
        class="white-card hidden dark:bg-white dark:bg-opacity-10 overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-20 z-50 justify-center items-center md:h-full md:inset-0"
        x-show="isModal">
        <div class="relative px-4 w-full max-w-md h-full md:h-auto mx-auto mt-[10%]">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" method="POST"
                    action="{{ route('admin.drinks.delete') }}">
                    @csrf
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white pt-6 mb-0 text-center">Are You Sure to
                        Delete ?</h3>
                    <p class="text-center mt-0 text-red-500">The action is irreversible</p>

                    <input type="hidden" id="dataid" name="dataid">

                    <div class="flex justify-center">
                        <button type="submit"
                            class="py-2 px-4 mx-2 rounded-md text-white bg-indigo-600 shadow-md shadow-indigo-200 hover:bg-indigo-800 hover:shadow-sm dark:shadow-gray-600">Yes
                            ! Delete</button>
                        <a class="py-2 px-4 mx-2 rounded-md cursor-pointer text-white bg-red-500 shadow-md shadow-red-200 hover:bg-red-600 hover:shadow-sm dark:shadow-gray-600"
                            onclick="hidedelete()">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    {{-- End Modal For Delete --}}



    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#index').DataTable();
        });
    </script>



    <script>
        function showdelete($id) {
            $('#deletemodal').removeClass('hidden');
            $('#deletemodal').addClass('flex');
            document.getElementById('dataid').value = $id;
        }

        function hidedelete() {
            $('#deletemodal').removeClass('flex');
            $('#deletemodal').addClass('hidden');
        }
    </script>
@endsection
