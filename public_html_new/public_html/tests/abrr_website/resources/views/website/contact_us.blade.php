@extends('website/layout.master')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

@section('content')
    <div class=" my-5 bg-gradient-to-r from-indigo-400 to-cyan-400 ">

        <div class="container ">
            <div class="w-full  justify-between text-center">
                <h2 class="text-center font-bold text-4xl text-white py-16">Contact US</h2>
            </div>


        </div>
    </div>
    <div class="container">
        <div class=" grid grid-cols-2 gap-5 max-md:grid-cols-1 ">
            <div data-aos="fade-right">
                <h2 class="font-bold text-1xl text-gray-500 py-3">Contact Title</h2>
                <img src="{{ url('/images/website/contact_us_1.jpg') }}" alt="img"
                    class="w-fit h-96 m-auto p-5 transition duration-300 ease-in-out hover:scale-110">
            </div>
            <div data-aos="fade-left max-md:col-span-2">
                <h2 class="font-bold text-1xl text-gray-500 py-5 ">Contact Description</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga aperiam possimus recusandae eius earum
                    nesciunt autem dicta velit reprehenderit quasi.</p>
                <div class="my-5">
                    <form action="#">
                        <div class="grid grid-cols-2 flex-wrap gap-4">
                            <div>
                                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">First
                                    name</label>
                                <input type="text" id="first_name"
                                    class="bg-white border border-gray-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md"
                                    placeholder="John" required />
                            </div>
                            <div>
                                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 ">Last
                                    name</label>
                                <input type="text" id="last_name"
                                    class="bg-white border border-blue-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md"
                                    placeholder="Doe" required />
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                                <input type="text" id="email"
                                    class="bg-white border border-blue-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md"
                                    placeholder="email address" required />
                            </div>
                            <div>
                                <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 ">Contact</label>
                                <input type="number" id="contact"
                                    class="bg-white border border-blue-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md"
                                    placeholder="contact number" required />
                            </div>
                            <div class="col-span-2">
                                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 ">Address</label>
                                <textarea id="address"
                                    class="bg-white border border-blue-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md"
                                    required> </textarea>
                            </div>
                        </div>
                        <button
                            class="my-4 px-5 py-2 bg-blue-700 text-white rounded-md shadow-md hover:bg-blue-600 justify-self-center">Contact</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
