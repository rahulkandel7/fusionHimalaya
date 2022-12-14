@extends('layouts.app')

@section('main')
   

    <div >
        <div class="w-11/12 mx-auto py-4">


            <h1 class=" text-5xl md:text-7xl font-bold text-center mt-10 capitalize  text-indigo-500 pb-4" style="font-family: 'Beau Rivage', handwriting;">
              Contact Us
            </h1>

            <hr class="border border-red-600">

            <div class=" grid md:grid-cols-2 gap-10 mt-5">
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d952.2575611197594!2d21.797056!3d61.487934!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4fd9fc45cba9b481!2zNjHCsDI5JzE2LjMiTiAyMcKwNDcnNTQuOCJF!5e0!3m2!1sen!2sus!4v1667271610792!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>

                <div>
                    <h3 class="  font-bold text-center uppercase text-sm text-indigo-700 py-4">
                        Follow us on
                    </h3>
                        {{-- Links start --}}
                        <div class="flex justify-center">
                            <a href="" class="px-2">
                                <div class="hover:bg-red-700 h-8 w-8 hover:text-white transition-all rounded-full shadow-xl flex items-center justify-center">
                                    <i  class="ri-facebook-line text-xl"></i>
                                </div>
                            </a>

                            <a href="#" class="px-2">
                                <div class="hover:bg-red-700 h-8 w-8 hover:text-white transition-all rounded-full shadow-xl flex items-center justify-center">
                                    <i  class="ri-instagram-line text-xl"></i>
                                </div>
                            </a>

                           

                            
                        </div>
                        {{-- Links Close --}}
                        {{-- getintouch start --}}
                            <p class="py-2 text-gray-800 text-center  capitalize">
                                Get in touch with Fusion Himalayan
                            </p>
                            <p class="py-2 text-gray-800 justify-center  capitalize flex items-center">
                                <i class="ri-phone-line"></i> <a href="tel:+358442790186" class="mx-1">+358442790186</a>
                            </p>
                            <p class="py-2 text-gray-800 justify-center  flex items-center">
                                <i class="ri-mail-line"></i> <a href="mailto:fusionhimalayan@gmail.com" class="mx-1">fusionhimalayan@gmail.com</a>
                            </p>
                            <p class="py-2 text-gray-800 justify-center  capitalize flex items-center">
                                <i  class="ri-map-line pr-1"></i>Yrjonkatu 7, Pori, Finland
                            </p>
                        {{-- get in touch end --}}

                        {{-- form start --}}
                            <form action="" method="POST">             
                                @csrf   
                                <div class="my-2">
                                    
                                    <input type="text" placeholder="Full Name" name="name" class="w-full border-gray-400 rounded  focus:border-indigo-700 focus:ring-indigo-700 active:border-indigo-700 active:ring-indigo-700">
                                </div>
                    
                                <div class="my-2">
                                    
                                <input type="text" placeholder="Address" name="address" class="w-full rounded border-gray-400 focus:border-indigo-700 focus:ring-indigo-700 active:border-indigo-700 active:ring-indigo-700">
                                </div>
                    
                                <div class="my-2">
                                    
                                <input type="text" placeholder="Phone" name="phone" class="w-full rounded border-gray-400 focus:border-indigo-700 focus:ring-indigo-700 active:border-indigo-700 active:ring-indigo-700">
                                </div>
                    
                    
                                <div class="my-2">
                                    
                                <textarea type="text" placeholder="Enter you Message" name="message" rows="4" class="w-full border-gray-400 rounded focus:border-indigo-700 focus:ring-indigo-700 active:border-indigo-700 active:ring-indigo-700"></textarea>
                                </div>
                    
                                <div class="my-2 text-center">
                                    <button type="submit" value="Send" class="bg-indigo-500 rounded-xl p-2 text-gray-50 px-4 hover:bg-indigo-600 ">Submit</button>
                                </div>
                    
                            </form>
                        {{-- form end --}}
                    </div>
               
            </div>
             
    </div>


@endsection