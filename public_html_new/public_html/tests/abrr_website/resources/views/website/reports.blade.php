@extends('website/layout.master')
@section('content')
    {{-- breade crum --}}

    <div class="mx-16 max-md:mx-5  max-lg:mx-8">
        <div class="breadcrumb px-2 mb-4 py-2 ">
            <x-breadcrumb />
        </div>
        <div class=" grid grid-flow-row-dense grid-cols-5 gsp-5 justify-between gap-5 report_list  max-md:contents">
            <div class=" h-screen sticky top-24 overflow-y-scroll no-scrollbar max-md:contents gap-4 ">
                <div class="flex flex-col gap-5 max-sm:flex-wrap max-md:flex-row">
                    <div class="w-full ">
                        <span class="text-lg font-medium">Category</span>
                        <div class="relative">
                            <select
                                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded px-2 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer">
                                <option value="" selected>Category</option>
                                <option value="Aerospace & Defense">Aerospace & Defense</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Animal Nutrition & Wellness">Animal Nutrition & Wellness</option>
                                <option value="Automotive">Automotive</option>
                                <option value="Chemicals & Materials">Chemicals & Materials</option>
                                <option value="Consumer Goods and Services">Consumer Goods and Services</option>
                                <option value="Energy & Power">Energy & Power</option>
                                <option value="Financial Services and Investment Intelligence">Financial Services and
                                    Investment
                                    Intelligence</option>
                                <option value="Food & Beverage">Food & Beverage</option>
                                <option value="Healthcare">Healthcare</option>
                                <option value="Home and Property Improvement">Home and Property Improvement</option>
                                <option value="Hospitality and Tourism">Hospitality and Tourism</option>
                                <option value="Logistics">Logistics</option>
                                <option value="Manufacturing Products and Services">Manufacturing Products and Services
                                </option>
                                <option value="Packaging">Packaging</option>
                                <option value="Professional and Commercial Services">Professional and Commercial Services
                                </option>
                                <option value="Real Estate and Construction">Real Estate and Construction</option>
                                <option value="Retail">Retail</option>
                                <option value="Technology, Media and Telecom">Technology, Media and Telecom</option>
                            </select>

                        </div>
                    </div>


                    <div class="w-full ">
                        <span class="text-lg font-medium text-center">Regions</span>
                        <div class="relative">
                            <select
                                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded pl-3 pr-8 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer">
                                <option value="" selected>All</option>
                                <option value="Africa">Africa</option>
                                <option value="Central America">Central America </option>
                                <option value="Middle East">Middle East</option>
                                <option value="Pacific">Pacific</option>
                                <option value="Asia">Asia</option>
                                <option value="Europe">Europe</option>
                                <option value="North America">North America</option>
                                <option value="South America">South America</option>


                            </select>

                        </div>
                    </div>

                <button class=" w-24 px-3 py-1 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-md shadow-md hover:bg-blue-600 max-md:max-h-min max-md:self-center">Filter</button>

                </div>

            </div>
            <div class="col-span-4 gap-5 max-md:col-span-5">

                @foreach ($reports as $report_url => $report_desc)
                    <x-reports-list-card reportTitle="{{ $report_desc['report_title'] }}"
                        reportUrl="{{ url('reports/' . $report_url) }}"
                        thumbnailImageUrl="{{ url('/images/website/blogs/blog-3.jpeg') }}"
                        thumbnailImageAlt="{{ url('/images/website/blogs/blog-3.jpeg') }}"
                        sortDescription="{{ $report_desc['report_sort_desc'] }}" />
                @endforeach



            </div>
        </div>
    </div>
@endsection
