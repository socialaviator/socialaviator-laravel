@extends('website/layout.master')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

@section('content')
    <div class=" my-5 bg-gradient-to-r from-indigo-400 to-cyan-400 ">

        <div class="container ">
            <div class="w-full  justify-between text-center">
                <h2 class="text-center font-bold text-4xl text-white py-16">About US</h2>
            </div>


        </div>
    </div>
    <div class="container">
        <div class=" grid grid-cols-2 gap-5 ">
            <div>
                <h2 class="font-bold text-1xl text-gray-500 py-3">About US Title</h2>
                <img src="{{ url('/images/website/contact_us_1.jpg') }}" alt="img" class="w-fit h-96 m-auto p-5 transition duration-300 ease-in-out hover:scale-110">
            </div>
            <div>
                <h2 class="font-bold text-1xl text-gray-500 py-5 ">About Description</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga aperiam possimus recusandae eius earum
                    nesciunt autem dicta velit reprehenderit quasi.</p>
            </div>
        </div>
    </div>
@endsection
