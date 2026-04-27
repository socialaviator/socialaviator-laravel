@extends('website/layout.master')
@section('content')
    {{-- breade crum --}}


    <div class="breadcrumb px-2 mb-4 py-2 mx-16 ">
        <x-breadcrumb />
    </div>

    <div class="bg-gradient-to-r from-indigo-400 to-cyan-400   justify-center">
        <h2 class="text-3xl font-semibold text-white  text-center pb-28 pt-16 ">Global Gift Card Market</h2>
    </div>

    <div class="mx-10 -mt-16 max-md:mx-2 justify-items-center">
        <div class="container">
                <div class="bg-white rounded shadow-lg p-4  md:p-8 mb-2">
                    <h2 class="font-semibold text-3xl text-gray-600 text-center  pb-5">Request Free Sample</h2>

                    <div class="w-full grid grid-cols-2 max-lg:grid-cols-1 gap-5">
                        <div class="p-5 ">
                            <h3 class="text-base font-semibold  text-center pb-4"> User Info</h3>

                            <div class="grid grid-cols-2 max-md:grid-cols-1  gap-2">
                                <div class="flex flex-wrap ">
                                    <label for="full_name">Full Name <span><sup
                                                class="text-red-600 font-semibold">*</sup></span></label>
                                    <input type="text" name="full_name" id="full_name"
                                        class="bg-white border border-gray-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md" />
                                </div>
                                <div class="flex flex-wrap ">
                                    <label for="phone">Phone <span><sup
                                                class="text-red-600  font-semibold">*</sup></span></label>
                                    <input type="text" name="phone" id="phone"
                                        class="bg-white border border-gray-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md" />
                                </div>
                            </div>

                            <div class="flex flex-wrap ">
                                <label for="email_address">Email address <span><sup
                                            class="text-red-600  font-semibold">*</sup></span></label>
                                <input type="text" name="email_address" id="email_address"
                                    class="bg-white border border-gray-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md" />
                            </div>
                            <div class="grid grid-cols-2 max-md:grid-cols-1  gap-2">
                                <div class="flex flex-wrap ">
                                    <label for="job_title">Job Title<span><sup
                                                class="text-red-600  font-semibold">*</sup></span></label>
                                    <input type="text" name="job_title" id="job_title"
                                        class="bg-white border border-gray-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md" />
                                </div>
                                <div class="flex flex-wrap ">
                                    <label for="country">Country <span><sup
                                                class="text-red-600  font-semibold">*</sup></span></label>
                                    <input type="text" name="country" id="country"
                                        class="bg-white border border-gray-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md" />
                                </div>
                            </div>

                            <div class="flex flex-wrap ">
                                <label for="address" class="">Address</label>
                                <textarea id="address" rows="4"
                                    class="bg-white border border-gray-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md"
                                    placeholder="Write your thoughts here..."></textarea>
                            </div>


                        </div>
                        <div
                            class=" rounded-md shadow-md bg-gradient-to-r from-cyan-500 to-blue-500 content-center text-center p-5">
                            <h2 class="text-2xl font-semibold text-white py-5 ">Global Gift Card Market</h2>
                            <p class=" text-justify text-white">Segments - by Component (Software, Services), Platform
                                (Web-Based, Mobile-Based), End-User (Individuals, Small and Medium Enterprises, Large
                                Enterprises), Deployment Mode (On-Premises, Cloud), and Region (Asia Pacific, North America,
                                Latin America, Europe, and Middle East & Africa) - Global Industry Analysis, Growth, Share,
                                Size, Trends, and Forecast 2024-2032</p>

                        </div>
                        <button
                            class=" px-5 py-2 bg-blue-700 text-white rounded-md shadow-md hover:bg-blue-600 justify-self-center">Request Sample</button>

                    </div>


                </div>
        </div>

    </div>
@endsection
