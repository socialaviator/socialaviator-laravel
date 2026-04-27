@extends('website/layout.master')
@section('content')
    <div class="h-full font-sans ">
        <div class="mx-16 max-lg:mx-8 max-sm:mx-3">
            <div class="breadcrumb px-2 mb-4 py-2 ">
                <x-breadcrumb />
            </div>
            <div class="flex flex-row border shadow-md rounded-md bg-white h-50 report_rd_title">
                <div class="basis-4/5 p-5  max-lg:basis-full max-sm:p-4 ">
                    <div class="float-left">
                        <img class="rounded-md h-40 max-md:h-40  max-sm:h-16 w-44 max-sm:w-16 max-md:w-44 mr-5 "
                            src="{{ url('images/website/image-4.jpg') }}" alt="Modern building architecture">
                    </div>
                    <div class="text-justify">
                        <h1 class="text-2xl font-semibold text-blue-600 pb-2 max-sm:text-base">
                            {{ $report['report_title'] }} </h1>

                        <h2 class=" text-base max-md:text-sm font-semibold  text-gray-700 max-sm:text-sm">
                            {{ $report['h1_long_title'] }}
                        </h2>


                        <div class="text-sm font-normal align-bottom contents bottom-0 ">
                            <span class=" ">
                                Report ID:MRFB - 104460 |
                            </span>
                            <span class="">
                                Pages: 298 |
                            </span>
                            <span class="  ">
                                Apr-2024 |
                            </span>
                            <span class="  ">
                                Formats*: PDF |
                            </span>
                            <span class="  ">
                                Category: Food and Beverages |
                            </span>
                            <span class=" border-right-0">
                                Delivery: 2 to 4 Hours
                            </span>
                        </div>
                    </div>

                </div>

                <div class="basis-1/5 justify-center content-center max-lg:hidden">
                    <div class="flex flex-col gap-5 px-5 ">
                        <div class="flex py-1 border-2 border-blue-200 rounded-md hover:shadow-lg justify-center gap-3">
                            <button> <i class="fa-solid fa-file-pdf pdf_icon text-red-500 "></i></button>
                            <button> <i class="fa-solid fa-file-excel excel_icon text-[rgb(27,157,94)]"></i></button>
                            <button> <i class="fa-solid fa-print print_icon"></i></button>

                        </div>
                        <a type="button" href="{{ url('/buy/1234') }}"
                            class="py-2 text-md font-semibold border-2 border-blue-400 hover:bg-blue-800 hover:text-white rounded-md hover:shadow-md text-center">Buy
                            New </a>
                        <a type="button" href="{{ url('/request_sample/1234') }}"
                            class="py-2 text-md font-semibold border-2 border-blue-400 hover:bg-blue-800 hover:text-white rounded-md hover:shadow-md text-center">
                            Request Sample </a>

                    </div>
                </div>
            </div>


            {{-- report RD --}}
            <div class="relative bg-white ">
                <div class="flex flex-row max-sm:flex-wrap gap-4 my-5  ">
                    <div class="basis-4/5 max-sm:w-full max-sm:basis-full border rounded-md max-lg:basis-3/4">

                        <div class="w-full card rounded-md  shadow-md overflow-y-scroll no-scrollbar ">
                            <div class=" sticky top-0    ">
                                {{-- tabs --}}
                                <ul
                                    class="w-full max-sm:w-full grid grid-flow-col justify-stretch max-sm:grid-flow-row max-sm:text-center rounded-md  bg-gray-100 tab-btns">

                                    <li class="hover:bg-blue-400 hover:text-white rounded-md shadow-md text-center ">
                                        <button
                                            class="tab-btn py-2 w-full text-md font-medium text-gray-600  hover:text-white  h-full md:py-1"
                                            data-tab="description_tab">Description</button>
                                    </li>
                                    <li class="hover:bg-blue-400 hover:text-white rounded-md shadow-md text-center">
                                        <button
                                            class="tab-btn py-2 w-full text-md font-medium text-gray-600  hover:text-white  h-full"
                                            data-tab="toc_tab">Table of Content</button>
                                    </li>

                                    <li class="hover:bg-blue-400 hover:text-white rounded-md shadow-md text-center  ">
                                        <button
                                            class="tab-btn py-2 w-full text-md font-medium text-gray-600 hover:text-white  h-full"
                                            data-tab="methodology_tab"> Methodology</button>
                                    </li>

                                    {{-- <li class="hover:bg-blue-400 hover:text-white rounded-md shadow-md text-center ">
                                        <button class="tab-btn py-2 w-full text-md font-medium text-gray-600  hover:text-white  h-full " >Download Sample </button>
                                    </li> --}}
                                </ul>
                            </div>

                            <!-- Tab Content -->
                            <div class=" tab-content mt-4 px-10 text-justify  max-sm:px-4 max-lg:px-2">

                                <div id="description_tab" class="tab-panel hidden">
                                    <div class="w-full text-between space-x-2 gap-8 pb-8">
                                        {!! $report['description'] !!}
                                        <div>
                                            {{-- FAQ  --}}
                                            <div class="w-full p-4 bg-blue-50 border  rounded-lg my-8">
                                                <h2 class="text-2xl font-bold mb-4 text-gray-700">Frequently Asked Questions
                                                </h2>
                                                <div class="space-y-2">
                                                    <!-- FAQ Item 1 -->
                                                    <div class="faq-item border border-gray-200 rounded-lg bg-white ">
                                                        <button
                                                            class="faq-question flex justify-between  items-center w-full py-2 px-4 text-gray-700 focus:outline-none  font-medium text-base  ">
                                                            <span>What is Tailwind CSS?</span>
                                                            <svg class="w-5 h-5 transition-transform transform"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M19 9l-7 7-7-7" />
                                                            </svg>
                                                        </button>
                                                        <div class="faq-answer hidden p-4 text-gray-600">
                                                            Tailwind CSS is a utility-first CSS framework for rapidly
                                                            building custom designs.
                                                        </div>
                                                    </div>

                                                    <!-- FAQ Item 2 -->
                                                    <div class="faq-item border border-gray-200 rounded-lg bg-white">
                                                        <button
                                                            class="faq-question flex justify-between  items-center w-full py-2 px-4 text-gray-700 focus:outline-none  font-medium text-base">
                                                            <span>How does it work?</span>
                                                            <svg class="w-5 h-5 transition-transform transform"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M19 9l-7 7-7-7" />
                                                            </svg>
                                                        </button>
                                                        <div class="faq-answer hidden p-4 text-gray-600">
                                                            Tailwind provides utility classes to style your HTML without
                                                            writing custom CSS.
                                                        </div>
                                                    </div>

                                                    <!-- FAQ Item 3 -->
                                                    <div class="faq-item border border-gray-200 rounded-lg bg-white">
                                                        <button
                                                            class="faq-question flex justify-between  items-center w-full py-2 px-4 text-gray-700 focus:outline-none  font-medium text-base">
                                                            <span>Is Tailwind customizable?</span>
                                                            <svg class="w-5 h-5 transition-transform transform"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M19 9l-7 7-7-7" />
                                                            </svg>
                                                        </button>
                                                        <div class="faq-answer hidden p-4 text-gray-600">
                                                            Yes! Tailwind is highly customizable through its configuration
                                                            file.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- FAQ end --}}

                                        </div>
                                    </div>
                                </div>

                                <div id="toc_tab" class="tab-panel hidden">
                                    <div class="disable-toc classSelect disable-css disable-right-click"
                                        oncontextmenu="return false">
                                        <p><strong><span class="number">1</span>.&nbsp; &nbsp; Introduction&nbsp;&nbsp;
                                                &nbsp;</strong><br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Market Definition &amp;
                                            Scope&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Market Ecosystem&nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Currency&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span>.<span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Key Stakeholders&nbsp;&nbsp;
                                            &nbsp;<br>
                                            <strong><span class="number">2</span>.&nbsp; &nbsp; Research
                                                Methodology&nbsp;&nbsp; &nbsp;</strong><br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">2</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Research Approach&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">2</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Data Collection &amp;
                                            Validation&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">2</span>.<span class="number">2</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Secondary Research&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">2</span>.<span class="number">2</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Primary Research/Interviews With
                                            Key Opinion Leaders from the Industry&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">2</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Market Sizing and
                                            forecasting&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">2</span>.<span class="number">3</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Market Size Estimation
                                            Approach&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">2</span>.<span class="number">3</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Growth Forecast
                                            Approach&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">2</span>.<span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Assumptions for the
                                            Study&nbsp;&nbsp; &nbsp;<br>
                                            <strong><span class="number">3</span>.&nbsp; &nbsp; Executive
                                                Summary&nbsp;&nbsp; &nbsp;</strong><br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">3</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Overview&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">3</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Segment Analysis&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">3</span>.<span class="number">2</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Edible Insects Market, by
                                            Product&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">3</span>.<span class="number">2</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Edible Insects Market, by Insect
                                            Type&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">3</span>.<span class="number">2</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Edible Insects Market, by
                                            Application&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">3</span>.<span class="number">2</span>.<span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Edible Insects Market, by End
                                            Use&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">3</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Edible Insects Market, by
                                            Region&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">3</span>.<span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Competitive Landscape &amp;
                                            Market Competitors&nbsp;&nbsp; &nbsp;<br>
                                            <strong><span class="number">4</span>.&nbsp; &nbsp; Market Insights&nbsp;&nbsp;
                                                &nbsp;</strong><br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">4</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Overview&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">4</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Factors Affecting Market
                                            Growth&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">2</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Growing Greenhouse Gas Emissions
                                            from the Livestock &amp; Poultry Industries Driving the Need for Alternative
                                            Protein Sources&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">2</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;High Nutritional Value Driving
                                            the Consumption of Edible Insects&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">2</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Environmental Benefits of Edible
                                            Insects Supporting Adoption&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">2</span>.<span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Rising Demand for Insect Protein
                                            in the Animal Feed Industry Driving Market Growth&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">2</span>.<span
                                                class="number">5</span>.&nbsp;&nbsp; &nbsp;Low Risk of Transmitting
                                            Zoonotic Diseases Supporting the Consumption of Edible Insects&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">2</span>.<span
                                                class="number">6</span>.&nbsp;&nbsp; &nbsp;Lack of A Standardized
                                            Regulatory Framework Restraining Market Growth&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">2</span>.<span
                                                class="number">7</span>.&nbsp;&nbsp; &nbsp;Psychological &amp; Ethical
                                            Barriers to Consuming Insects As Food Restricting the Adoption of Edible
                                            Insects&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">2</span>.<span
                                                class="number">8</span>.&nbsp;&nbsp; &nbsp;Risk of Allergies Due to Insect
                                            Consumption Hampering Market Growth&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">2</span>.<span
                                                class="number">9</span>.&nbsp;&nbsp; &nbsp;Business Expansion in Emerging
                                            &amp; Developed Economies Expected to Offer Growth Opportunities for Market
                                            Players&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">2</span>.<span
                                                class="number">1</span><span class="number">0</span>.&nbsp;&nbsp;
                                            &nbsp;Lack of Awareness Regarding the Benefits of Insect Consumption Impacting
                                            Market Growth&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">2</span>.<span
                                                class="number">1</span><span class="number">1</span>.&nbsp;&nbsp;
                                            &nbsp;Limitations in Scaling Up Production Expected to Remain A Major Challenge
                                            for Market Players&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">4</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Pricing Analysis&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">3</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Overview&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">3</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Whole Insects&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">3</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Insect Powder&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">3</span>.<span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Insect Meal&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">3</span>.<span
                                                class="number">5</span>.&nbsp;&nbsp; &nbsp;Insect Oil&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">4</span>.<span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Regulatory Analysis&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">4</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;North America&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; <span class="number">4</span>.<span
                                                class="number">4</span>.<span class="number">1</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;U.S.&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; <span class="number">4</span>.<span
                                                class="number">4</span>.<span class="number">1</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Canada&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">4</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Europe&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">4</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Asia-Pacific&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">4</span>.<span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Rest of the World&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">4</span>.<span
                                                class="number">5</span>.&nbsp;&nbsp; &nbsp;Porter’s Five Forces
                                            Analysis&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">5</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Bargaining Power of
                                            Suppliers&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">5</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Bargaining Power of
                                            Buyers&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">5</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Threat of
                                            Substitutes&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">5</span>.<span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Threat of New
                                            Entrants&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">4</span>.<span class="number">5</span>.<span
                                                class="number">5</span>.&nbsp;&nbsp; &nbsp;Degree of
                                            Competition&nbsp;&nbsp; &nbsp;<br>
                                            <strong><span class="number">5</span>.&nbsp; &nbsp; Global Edible Insects
                                                Market Assessment—by Product&nbsp;&nbsp; &nbsp;</strong><br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">5</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Overview&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">5</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Whole Insects&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">5</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Insect Powder&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">5</span>.<span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Insect Meal&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">5</span>.<span
                                                class="number">5</span>.&nbsp;&nbsp; &nbsp;Larvae/Insect Oil&nbsp;&nbsp;
                                            &nbsp;<br>
                                            <strong><span class="number">6</span>&nbsp;&nbsp; &nbsp;Global Edible Insects
                                                Market Assessment—by Insect Type&nbsp;&nbsp; &nbsp;</strong><br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">6</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Overview&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">6</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Crickets&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">6</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Black Soldier Flies&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">6</span>.<span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Mealworms&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">6</span>.<span
                                                class="number">5</span>.&nbsp;&nbsp; &nbsp;Buffalo Worms&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">6</span>.<span
                                                class="number">6</span>.&nbsp;&nbsp; &nbsp;Grasshoppers&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">6</span>.<span
                                                class="number">7</span>.&nbsp;&nbsp; &nbsp;Ants&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">6</span>.<span
                                                class="number">8</span>.&nbsp;&nbsp; &nbsp;Silkworms&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">6</span>.<span
                                                class="number">9</span>.&nbsp;&nbsp; &nbsp;Cicadas&nbsp; &nbsp;&nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">6</span>.<span
                                                class="number">1</span><span class="number">0</span>.&nbsp;&nbsp;
                                            &nbsp;Ohter Edible Insects&nbsp;&nbsp; &nbsp;<br>
                                            <strong><span class="number">7</span>.&nbsp; &nbsp; Global Edible Insects
                                                Market Assessment–by Application&nbsp;&nbsp; &nbsp;</strong><br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">7</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Overview<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">7</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Food &amp; Beverages&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">7</span>.<span class="number">2</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Processed Whole
                                            Insects&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">7</span>.<span class="number">2</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Processed Insect
                                            Powder&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">7</span>.<span class="number">2</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Protein Bars &amp; Protein
                                            Shakes<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">7</span>.<span class="number">2</span>.<span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Baked Products &amp; Snacks<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">7</span>.<span class="number">2</span>.<span
                                                class="number">5</span>.&nbsp;&nbsp; &nbsp;Insect Confectioneries<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">7</span>.<span class="number">2</span>.<span
                                                class="number">6</span>.&nbsp;&nbsp; &nbsp;Insect Beverages<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">7</span>.<span class="number">2</span>.<span
                                                class="number">7</span>.&nbsp;&nbsp; &nbsp;Other Food &amp; Beverage
                                            Applications&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">7</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Feed &amp; Pet Food<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">7</span>.<span class="number">3</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Aquaculture Feed&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">7</span>.<span class="number">3</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Animal Feed<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">7</span>.<span class="number">3</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Pet Food<br>
                                            <strong><span class="number">8</span>.&nbsp; &nbsp; Global Edible Insects
                                                Market Assessment—by End Use</strong><br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">8</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Overview<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">8</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Human Consumption<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">8</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Animal Nutrition<br>
                                            <strong><span class="number">9</span>.&nbsp; &nbsp; Edible Insects Market
                                                Assessment—by Geography&nbsp;&nbsp; &nbsp;</strong><br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">9</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Asia-Pacific&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">1</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Thailand<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">1</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;China<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">1</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;South Korea&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">1</span>.<span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Vietnam<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">1</span>.<span
                                                class="number">5</span>.&nbsp;&nbsp; &nbsp;Japan<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">1</span>.<span
                                                class="number">6</span>.&nbsp;&nbsp; &nbsp;Australia&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">1</span>.<span
                                                class="number">7</span>.&nbsp;&nbsp; &nbsp;Rest of Asia-Pacific&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; <span class="number">9</span>.<span
                                                class="number">1</span>.<span class="number">7</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Malaysia&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; <span class="number">9</span>.<span
                                                class="number">1</span>.<span class="number">7</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;India<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; <span class="number">9</span>.<span
                                                class="number">1</span>.<span class="number">7</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Singapore&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; <span class="number">9</span>.<span
                                                class="number">1</span>.<span class="number">7</span>.<span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Other Countries in APAC<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">9</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Europe<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">2</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Netherlands&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">2</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Belgium&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">2</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;France&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">2</span>.<span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Denmark&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">2</span>.<span
                                                class="number">5</span>.&nbsp;&nbsp; &nbsp;Finland&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">2</span>.<span
                                                class="number">6</span>.&nbsp;&nbsp; &nbsp;Germany<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">2</span>.<span
                                                class="number">7</span>.&nbsp;&nbsp; &nbsp;Rest of Europe (RoE)<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; <span class="number">9</span>.<span
                                                class="number">2</span>.<span class="number">7</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;U.K.&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; <span class="number">9</span>.<span
                                                class="number">2</span>.<span class="number">7</span>.<span
                                                class="number">2</span>.&nbsp; &nbsp; Spain&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; <span class="number">9</span>.<span
                                                class="number">2</span>.<span class="number">7</span>.<span
                                                class="number">3</span>.&nbsp; &nbsp; Poland&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; <span class="number">9</span>.<span
                                                class="number">2</span>.<span class="number">7</span>.<span
                                                class="number">4</span>.&nbsp; &nbsp; Ireland&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; <span class="number">9</span>.<span
                                                class="number">2</span>.<span class="number">7</span>.<span
                                                class="number">5</span>.&nbsp; &nbsp; Sweden&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; <span class="number">9</span>.<span
                                                class="number">2</span>.<span class="number">7</span>.<span
                                                class="number">6</span>.&nbsp; &nbsp; Italy&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; <span class="number">9</span>.<span
                                                class="number">2</span>.<span class="number">7</span>.<span
                                                class="number">7</span>.&nbsp;&nbsp; &nbsp;Other European Countries<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">9</span>.<span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;North America<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">3</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;U.S.&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">3</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Canada&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">9</span>.<span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Latin America&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">4</span>.<span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Mexico&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span
                                                class="number">9</span>.<span class="number">4</span>.<span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Brazil&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">9</span>.<span
                                                class="number">5</span>.&nbsp;&nbsp; &nbsp;Middle East &amp;
                                            Africa&nbsp;&nbsp; &nbsp;<br>
                                            <strong><span class="number">1</span><span class="number">0</span>.&nbsp;
                                                &nbsp; Competition Analysis&nbsp;&nbsp; &nbsp;</strong><br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">0</span>.<span class="number">1</span>.&nbsp;&nbsp;
                                            &nbsp;Overview<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">0</span>.<span class="number">2</span>.&nbsp;&nbsp;
                                            &nbsp;Key Growth Strategies<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">0</span>.<span class="number">3</span>.&nbsp;&nbsp;
                                            &nbsp;Competitive Benchmarking&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">0</span>.<span class="number">4</span>.&nbsp;&nbsp;
                                            &nbsp;Competitive Dashboard&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;<span class="number">1</span><span class="number">0</span>.<span
                                                class="number">4</span>.<span class="number">1</span>.&nbsp;&nbsp;
                                            &nbsp;Industry Leaders<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;<span class="number">1</span><span class="number">0</span>.<span
                                                class="number">4</span>.<span class="number">2</span>.&nbsp;&nbsp;
                                            &nbsp;Market Differentiators&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;<span class="number">1</span><span class="number">0</span>.<span
                                                class="number">4</span>.<span class="number">3</span>.&nbsp;&nbsp;
                                            &nbsp;Vanguards<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;<span class="number">1</span><span class="number">0</span>.<span
                                                class="number">4</span>.<span class="number">4</span>.&nbsp;&nbsp;
                                            &nbsp;Emerging Companies&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">0</span>.<span class="number">5</span>.&nbsp;&nbsp;
                                            &nbsp;Global Edible Insects Market: Company Market Position Analysis&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">0</span>.<span class="number">6</span>.&nbsp;&nbsp;
                                            &nbsp;Production Capacity of Key Players<br>
                                            <strong><span class="number">1</span><span class="number">1</span>.&nbsp;
                                                &nbsp; Company Profiles (Company Overview, Financial Overview, Product
                                                Portfolio, and Strategic Developments)</strong><br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">1</span>.&nbsp;&nbsp;
                                            &nbsp;Protix B.V.<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">2</span>.&nbsp;&nbsp;
                                            &nbsp;Ÿnsect (SAS)&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">3</span>.&nbsp;&nbsp;
                                            &nbsp;InnovaFeed SAS&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">4</span>.&nbsp;&nbsp;
                                            &nbsp;EnviroFlight, Llc<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">5</span>.&nbsp;&nbsp;
                                            &nbsp;Nutrition Technologies Group<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">6</span>.&nbsp;&nbsp;
                                            &nbsp;Bioflytech S.L.&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">7</span>.&nbsp;&nbsp;
                                            &nbsp;Entomo Farms&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">8</span>.&nbsp;&nbsp;
                                            &nbsp;Aspire Food Group<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">9</span>.&nbsp;&nbsp;
                                            &nbsp;Global Bugs Asia Co., Ltd.&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">1</span><span
                                                class="number">0</span>.&nbsp;&nbsp; &nbsp;Entobel Holding Pte.
                                            Ltd.&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">1</span><span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Entofood Sdn Bhd&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">1</span><span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;SFly Comgraf SAS&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">1</span><span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Hexafly&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">1</span><span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;F<span class="number">4</span>F
                                            SpA<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">1</span><span
                                                class="number">5</span>.&nbsp;&nbsp; &nbsp;Protenga Pte Ltd.<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">1</span><span
                                                class="number">6</span>.&nbsp;&nbsp; &nbsp;NextProtein<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">1</span><span
                                                class="number">7</span>.&nbsp;&nbsp; &nbsp;Enorm Biofactory A/S<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">1</span><span
                                                class="number">8</span>.&nbsp;&nbsp; &nbsp;Hargol FoodTech<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">1</span><span
                                                class="number">9</span>.&nbsp;&nbsp; &nbsp;All Things Bugs, Llc&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">2</span><span
                                                class="number">0</span>.&nbsp;&nbsp; &nbsp;Beta Hatch<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">2</span><span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Armstrong Crickets Georgia<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">2</span><span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Jr Unique Foods Ltd.<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">2</span><span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;TEBRIO<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">1</span>.<span class="number">2</span><span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Hipromine S.A.&nbsp;&nbsp;
                                            &nbsp;<br>
                                            <em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp;(Note: SWOT analysis of the top <span class="number">5</span>
                                                companies will be provided.)</em><br>
                                            <strong><span class="number">1</span><span class="number">2</span>.&nbsp;
                                                &nbsp; Emerging Startups&nbsp;&nbsp; &nbsp;</strong><br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">1</span>.&nbsp;&nbsp;
                                            &nbsp;Protanica Co. Ltd.&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">2</span>.&nbsp;&nbsp;
                                            &nbsp;Pro-Meal (Promeal Animal Feeds)<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">3</span>.&nbsp;&nbsp;
                                            &nbsp;CricketOne Asia<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">4</span>.&nbsp;&nbsp;
                                            &nbsp;Eat Crawlers<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">5</span>.&nbsp;&nbsp;
                                            &nbsp;BugEra<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">6</span>.&nbsp;&nbsp;
                                            &nbsp;Entoprotech Ltd<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">7</span>.&nbsp;&nbsp;
                                            &nbsp;Insectta<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">8</span>.&nbsp;&nbsp;
                                            &nbsp;Entosystem Inc.<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">9</span>.&nbsp;&nbsp;
                                            &nbsp;INSECTIFii India Pvt. Ltd.<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">1</span><span
                                                class="number">0</span>.&nbsp;&nbsp; &nbsp;Agroloop Hungary Kft.<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">1</span><span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Soldier Fly Technologies,
                                            Inc.<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">1</span><span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Life Origin<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">1</span><span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Insectum ApS&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">1</span><span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Keetup and Co.&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">1</span><span
                                                class="number">5</span>.&nbsp;&nbsp; &nbsp;Loopworm Pvt. Ltd.&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">1</span><span
                                                class="number">6</span>.&nbsp;&nbsp; &nbsp;Ento Proteins Private
                                            Limited&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">1</span><span
                                                class="number">7</span>.&nbsp;&nbsp; &nbsp;UltraNutri<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">1</span><span
                                                class="number">8</span>.&nbsp;&nbsp; &nbsp;Insectika Biotech Private
                                            Limited (IBPL)&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">1</span><span
                                                class="number">9</span>.&nbsp;&nbsp; &nbsp;Freshrooms Lifesciences Private
                                            Limited<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">2</span><span
                                                class="number">0</span>.&nbsp;&nbsp; &nbsp;Kovai BSF<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">2</span><span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Exocycle<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">2</span><span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Bioforte Biotechnology
                                            (Shenzhen) Co., Ltd.&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">2</span><span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Guangzhou Unique Biotechnology
                                            Co., Ltd<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">2</span><span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Symton Inc.<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">2</span><span
                                                class="number">5</span>.&nbsp;&nbsp; &nbsp;Beta Bugs Ltd.&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">2</span><span
                                                class="number">6</span>.&nbsp;&nbsp; &nbsp;Snas Bio-Tech<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">2</span><span
                                                class="number">7</span>.&nbsp;&nbsp; &nbsp;Farminsect Gmbh&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">2</span><span
                                                class="number">8</span>.&nbsp;&nbsp; &nbsp;Hermetia Baruth GmbH<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">2</span><span
                                                class="number">9</span>.&nbsp;&nbsp; &nbsp;Volare Solutions&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">3</span><span
                                                class="number">0</span>.&nbsp;&nbsp; &nbsp;Nasekomo<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">3</span><span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Mutatec&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">3</span><span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Nextalim SAS&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">3</span><span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Insectum UAB&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">3</span><span
                                                class="number">4</span>.&nbsp;&nbsp; &nbsp;Entogreen - Ingredient Odyssey,
                                            S.A.&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">3</span><span
                                                class="number">5</span>.&nbsp;&nbsp; &nbsp;Cyns&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">3</span><span
                                                class="number">6</span>.&nbsp;&nbsp; &nbsp;Illucens México
                                            Entobiorrefinería&nbsp;&nbsp; &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">3</span><span
                                                class="number">7</span>.&nbsp;&nbsp; &nbsp;Proticycle<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">3</span><span
                                                class="number">8</span>.&nbsp;&nbsp; &nbsp;Circa Biotech&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">3</span><span
                                                class="number">9</span>.&nbsp;&nbsp; &nbsp;CricketOne&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">4</span><span
                                                class="number">0</span>.&nbsp;&nbsp; &nbsp;Flylab Tech Co., Ltd&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">4</span><span
                                                class="number">1</span>.&nbsp;&nbsp; &nbsp;Invertapro As&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">4</span><span
                                                class="number">2</span>.&nbsp;&nbsp; &nbsp;Prime Insects&nbsp;&nbsp;
                                            &nbsp;<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">2</span>.<span class="number">4</span><span
                                                class="number">3</span>.&nbsp;&nbsp; &nbsp;Bulgarian Insect
                                            Company&nbsp;&nbsp; &nbsp;<br>
                                            <strong><span class="number">1</span><span class="number">3</span>.&nbsp;
                                                &nbsp; Appendix&nbsp;&nbsp; &nbsp;</strong><br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">3</span>.<span class="number">1</span>.&nbsp;&nbsp;
                                            &nbsp;Available Customization<br>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="number">1</span><span
                                                class="number">3</span>.<span class="number">2</span>.&nbsp;&nbsp;
                                            &nbsp;Related Reports<br>

                                        </p>
                                    </div>
                                </div>

                                <div id="top_companies_tab" class="tab-panel hidden">
                                    <div class="elementor-widget-container">
                                        <p class="py-3"><strong>The Edible Insects Market is projected to reach $17.9
                                                billion by 2033, at a CAGR of 28.6% during the forecast period of 2024 to
                                                2033,</strong> while in terms of volume, the market is expected to reach 4.7
                                            million tons by 2033, at a CAGR of 36.3% from 2024 to 2033. The report provides
                                            an in-depth analysis of the edible insects market across five major regions,
                                            emphasizing the current market trends, market sizes, recent developments, and
                                            forecasts till 2033.</p>

                                        <p class="py-3">The growth of the edible insects market is mainly driven by
                                            growing greenhouse gas emissions from the livestock &amp; poultry industries,
                                            the high nutritional value of edible insects, the environmental benefits of
                                            edible insects, the rising demand for insect protein in the animal feed
                                            industry, and the low risk of transmitting zoonotic diseases with the
                                            consumption of edible insects. In addition, business expansion in emerging &amp;
                                            developed economies is expected to generate growth opportunities for the players
                                            operating in this market.</p>

                                        <p class="py-3">However, the lack of a standardized regulatory framework,
                                            psychological &amp; ethical barriers to consuming insects as food, and the risk
                                            of allergies due to insect consumption restrain the growth of this market.
                                            Furthermore, the lack of awareness regarding the benefits of insect consumption
                                            and limitations in scaling up production are major challenges impacting market
                                            growth.</p>

                                        <p class="py-3"><strong style="display: none;">Here are the top 10 companies
                                                operating in the Edible Insects Market</strong></p>

                                        <p class="py-3"><a href="https://protix.eu/"><strong><em><u>Protix B.V.
                                                            (Netherlands)</u></em></strong></a></p>



                                        <p class="py-3">Founded in 2009 and headquartered in Dongen, the Netherlands,
                                            Protix manufactures and supplies insect ingredients for animal feed and human
                                            consumption. The company converts organic residual streams through various
                                            insect species, such as Real-world Evidence Solutions, cricket, mealworm, and
                                            locust. Protix
                                            is supported by the European program Plattelandsontwikkelingsprogramma (POP3) in
                                            developing smart insect farming technologies. Protix also produces chicken feed
                                            and sells its brand of eggs, OERei, laid by chickens that eat its feed. OERei
                                            eggs are commercially available in 750 supermarkets.</p>

                                        <p class="py-3">The company’s products are available in 18 countries, ranging
                                            from pig &amp; poultry feed to specialty pet foods. With more than 15 partners,
                                            the company has a geographical presence across Europe, North America, and
                                            Asia-Pacific.</p>

                                        <p class="py-3"><a href="https://www.ynsect.com/"
                                                target="_blank"><strong><em><u>Ÿnsect (SAS) (France)</u></em></strong></a>
                                        </p>



                                        <p class="py-3">Founded in 2011 and headquartered in Paris, France, Ÿnsect is
                                            engaged in designing, building, and operating insect production and processing
                                            facilities to provide ingredients for feed manufacturing. The company transforms
                                            farmed insects into premium ingredients required for animal feed. The company
                                            offers its products through three segments: Animal Nutrition, Human Nutrition,
                                            and Plants.</p>

                                        <p class="py-3">The company has over 380 patents or over 50% of the entire patent
                                            portfolio of the industry. The company has a geographical presence across North
                                            America, Europe, Asia-Pacific, Latin America, and the Middle East &amp; Africa.
                                            As of March 2024, the company has over 300 employees worldwide.</p>

                                        <p class="py-3"><strong><em><u>InnovaFeed SAS (France)</u></em></strong></p>



                                        <p class="py-3">Founded in 2016 and headquartered in Paris, France, InnovaFeed is
                                            a biotech company that produces natural and sustainable ingredients for animal
                                            feed and plant nutrition from insect rearing. The company also specializes in
                                            producing and marketing meals and oil (used in poultry and swine feed as an
                                            alternative to imported oils) extracted from the hermetia illucens larva and a
                                            supply of fertilizer made with insect droppings. The company offers hermetia
                                            illucens products for animal feed and aquaculture.</p>

                                        <p class="py-3">With more than 100 collaborators and two production sites in
                                            operation, and a third one announced in the U.S., the company has a geographical
                                            presence across Europe, North America, Asia-Pacific, and Latin America.</p>

                                        <p class="py-3"><strong><em><u>EnviroFlight, LLC (U.S.)</u></em></strong></p>



                                        <p class="py-3">Founded in 2009 and headquartered in Kentucky, the U.S.,
                                            EnviroFlight develops insect-based ingredients for animals and plants. The
                                            company operates in six markets, namely, poultry, aquaculture, pets, exotics,
                                            young animals, and fertilizers. EnviroFlight produces Real-world Evidence
                                            Solutions larvae
                                            (BSFL) products from oven-dried larvae without chemicals.</p>

                                        <p class="py-3">In January 2020, EnviroFlight was acquired by Darling Ingredients
                                            Inc., an international producer of organic ingredients used in sustainable
                                            protein and fat products and renewable clean energy. Darling operates on five
                                            continents. It collects waste from the agri-food industry and repurposes it into
                                            specialty ingredients, such as hydrolyzed collagen, edible and feed-grade fats,
                                            animal proteins and meals, plasma, pet food ingredients, fuel feedstocks, and
                                            green bioenergy.</p>

                                        <p class="py-3">The company has a geographical presence across North America,
                                            Latin America, Europe, and Asia-Pacific.</p>

                                        <p class="py-3"><strong><em><u>Nutrition Technologies Group
                                                        (Singapore)</u></em></strong></p>



                                        <p class="py-3">Founded in 2015 and headquartered in Singapore, Nutrition
                                            Technologies manufactures and supplies sustainable insect proteins, oils, and
                                            frass for animal feed, cosmetics, and organic fertilizers. The company derives
                                            its products from black soldier flies. Nutrition Technologies has research
                                            partnerships with key institutions to develop its products and conduct several
                                            feed trials on key consumer species. The company’s research partners include the
                                            National University of Singapore (NUS), Curtin University (Australia), Crops for
                                            the Future (Malaysia), USM (Malaysia), UTM (Malaysia), Nong Lam University
                                            (Vietnam), RMIT (Vietnam), and Kasetsart University (Thailand).</p>

                                        <p class="py-3">The company’s main production site is in Johor Bahru, Malaysia,
                                            with supporting sites and offices in Vietnam and Singapore. The company has a
                                            geographical presence in Asia-Pacific, Latin America, and Europe.</p>

                                        <p class="py-3"><br>
                                            <strong><em><u>Aspire Food Group (U.S.)</u></em></strong>
                                        </p>



                                        <p class="py-3">Founded in 2013 and headquartered in Texas, the U.S., Aspire Food
                                            Group commercially farms and processes usable ingredients for food and feed. In
                                            the U.S., the company raises food-grade crickets on a commercial scale. In
                                            Ghana, it commercially farms palm weevil larvae and runs a program that empowers
                                            peri-rural farmers to raise palm weevils locally.</p>

                                        <p class="py-3">The company has a geographical presence across North America,
                                            Europe, Asia-Pacific, Latin America, and the Middle East &amp; Africa.</p>

                                        <p class="py-3"><strong><em><u>Global Bugs Asia Co., Ltd.
                                                        (Thailand)</u></em></strong></p>



                                        <p class="py-3">Founded in 2016 and headquartered in Bangkok, Thailand, Global
                                            Bugs Asia produces and markets edible insect products. The company manufactures
                                            crickets, cricket powder, snacks, and protein bars. It controls the whole value
                                            chain, from the organic farming of cricket feed and house cricket production and
                                            processing to sales and distribution.</p>

                                        <p class="py-3">The company has a geographical presence across North America,
                                            Europe, Asia-Pacific, Latin America, and the Middle East &amp; Africa.</p>

                                        <p class="py-3"><strong><em><u>Entomo Farms (Canada)</u></em></strong></p>



                                        <p class="py-3">Founded in 2014 and headquartered in Ontario, Canada, Entomo
                                            Farms mainly manufactures cricket protein products. The company offers its
                                            products through five segments: powder, Whole Roasted, Starter Pack, Pets, and
                                            Fertilizer. Entomo Farms offers its products for both human and pet consumption.
                                            Apart from offering cricket powder, roasted crickets, and frozen crickets at
                                            wholesale pricing, the company also offers white-label services, pet foods, and
                                            livestock feed.</p>

                                        <p class="py-3">Further, the company also sells its products through the D2C
                                            sales channel. The company has a production capacity of 50 million crickets per
                                            week. The company has a geographical presence in North America.</p>

                                        <p class="py-3"><strong><em><u>Hargol FoodTech (Israel)</u></em></strong></p>



                                        <p class="py-3">Founded in 2014 and headquartered in Tnuvot, Israel, Hargol
                                            FoodTech (formerly Steak TzarTzar) operates as a commercial grasshopper farm.
                                            The company is engaged in insect farming and produces protein from edible
                                            insects. Hargol FoodTech offers protein powder from Grasshoppers.</p>

                                        <p class="py-3">The company supplies high-quality nutrients and healthy
                                            grasshoppers to markets around the world. For its first line of products, Hargol
                                            FoodTech relies on methods and technologies of intensive breeding and growing
                                            three grasshopper species that are processed into protein powders. The company
                                            has a geographic presence in North America, Europe, Asia-Pacific, Latin America,
                                            and the Middle East and Africa.</p>

                                        <p class="py-3"><strong><em><u>All Things Bugs, Llc (U.S.)</u></em></strong></p>



                                        <p class="py-3">Founded in 2011 and headquartered in Oklahoma, the U.S., All
                                            Things Bugs manufactures and sells finely milled whole crickets’ powder. The
                                            company offers its products under the brand name ‘Griopro.’ All Thing Bugs
                                            grinds its insects before spray drying them, creating a paler, fine powder with
                                            a neutral flavor and smaller particle size (&lt;100 microns).</p>

                                        <p class="py-3">The company has a geographical presence in North America, Europe,
                                            Asia-Pacific, Latin America, and the Middle East &amp; Africa.</p>

                                        <p class="py-3"><strong>Popular Mentions: </strong>Bioflytech S.L. (Spain),
                                            Entobel Holding Pte. Ltd. (Singapore), Entofood Sdn Bhd (Malaysia), SFly Comgraf
                                            SAS (France), Hexafly (Ireland), F4F SpA (Chile), Protenga Pte Ltd. (Singapore),
                                            nextProtein (France), Enorm Biofactory A/S (Denmark), Beta Hatch (U.S.),
                                            Armstrong Crickets Georgia (U.S.), JR Unique Foods Ltd. (Thailand), Tebrio
                                            (Spain), and HiProMine S.A. (Poland).</p>

                                        <h3>&nbsp;</h3>
                                    </div>
                                </div>

                                <div id="methodology_tab" class="tab-panel hidden">
                                    <h2 class="text-xl font-semibold">Request Report Methodology</h2>
                                    <div class="p-10 ">
                                        <form action="">
                                            <div class="grid grid-cols-2 max-md:grid-cols-1  gap-2">
                                                <div class="flex flex-wrap ">
                                                    <label for="full_name">Full Name <span><sup
                                                                class="text-red-600 font-semibold">*</sup></span></label>
                                                    <input type="text" name="full_name" id="full_name"
                                                        class="bg-white border border-gray-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md" />
                                                </div>
                                                <div class="flex flex-wrap ">
                                                    <label for="phone">Phone Number<span><sup
                                                                class="text-red-600  font-semibold">*</sup></span></label>
                                                    <input type="text" name="phone" id="phone"
                                                        class="bg-white border border-gray-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md" />
                                                </div>
                                            </div>
                                            <div>
                                                <label for="email"
                                                    class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                                                <input type="text" id="email"
                                                    class="bg-white border border-blue-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md"
                                                    placeholder="email address" required />
                                            </div>
                                            <div>
                                                <label for="job_title"
                                                    class="block mb-2 text-sm font-medium text-gray-900 ">Job title</label>
                                                <input type="text" id="job_title"
                                                    class="bg-white border border-blue-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md"
                                                    placeholder="Job Title" required />
                                            </div>
                                            <div>
                                                <label for="company"
                                                    class="block mb-2 text-sm font-medium text-gray-900 ">Company</label>
                                                <input type="text" id="company"
                                                    class="bg-white border border-blue-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md"
                                                    placeholder="Job Title" required />
                                            </div>
                                            <div class="col-span-2">
                                                <label for="description"
                                                    class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                                                <textarea id="description"
                                                    class="bg-white border border-blue-300 text-blue-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 transition duration-300 ease focus:outline-none  hover:border-slate-300 shadow-sm  focus:shadow-md"
                                                    required> </textarea>
                                            </div>
                                            <button class="px-2 py-1 border rounded-md shadow-md bg-blue-500 text-white my-3 float-right">Submit</button>
                                        </form>
                                    </div>
                                </div>


                            </div>



                        </div>
                    </div>
                    <div class="basis-1/5 max-sm:basis-4/5 justify-items-center max-sm:contents w-full max-lg:basis-1/4 ">
                        <div class="sticky top-16 isolate pt-3 w-full ">


                            <div
                                class="card my-3 w-full rounded-md shadow-sm border py-3 px-1 bg-gradient-to-b from-sky-300 to-sky-200">

                                <div class="flex flex-col gap-2">
                                    <div>
                                        <label for="single_user"
                                            class="w-full hover:bg-white p-2 rounded-md peer-checked/single_user:bg-white flex justify-between">
                                            <input type="radio" name="report_type" id="single_user"
                                                value="single_user" class="peer/single_user">
                                            <span class="text-center font-semibold">Single User</span>
                                            <span class="text-end">$3000</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label for="multi_user"
                                            class="w-full  flex justify-between hover:bg-white p-2 rounded-md">
                                            <input type="radio" name="report_type" id="multi_user" value="multi_user">
                                            <span class=" font-semibold">Multi User</span>
                                            <span>$3500</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label for="corporate_user"
                                            class="w-full  flex justify-between hover:bg-white p-2 rounded-md">
                                            <input type="radio" name="report_type" id="corporate_user"
                                                value="corporate_user">
                                            <span class=" font-semibold">Corporate User</span>
                                            <span>$4000</span>
                                        </label>
                                    </div>


                                    <div class="w-full text-center py-5">
                                        <button
                                            class="rounded-full shadow-md bg-blue-600 text-white w-2/4 py-2 text-center">Buy
                                            Now</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>




            {{-- releted reports --}}
            <div>
                <h3 class=" text-center justify-between  mt-10 py-5 text-gray-600 text-3xl max-sm:text-2xl font-bold">
                    Releted reports</h3>
            </div>
            <div class="flex justify-between 3 mb-16 mx-5 max-sm:flex-wrap max-sm:grid max-sm:justify-center">
                <div class="swiper releted_reports_slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <x-releted-reports-card reportImageUrl="{{ url('/images/website/blogs/blog-3.jpeg') }}"
                                imageAlt="trst" title="The Coldest Sunset"
                                sortDescription="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                                perferendis eaque, exercitationem praesentium nihil."
                                imageAlt="text" />
                        </div>
                        <div class="swiper-slide">
                            <x-releted-reports-card reportImageUrl="{{ url('/images/website/blogs/blog-1.jpeg') }}"
                                reportUrl="{{ url('reports/report-url') }}" imageAlt="trst" title="The Coldest Sunset"
                                sortDescription="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                                perferendis eaque, exercitationem praesentium nihil."
                                imageAlt="text" />
                        </div>
                        <div class="swiper-slide">
                            <x-releted-reports-card reportImageUrl="{{ url('/images/website/blogs/blog-2.jpeg') }}"
                                imageAlt="trst" title="The Coldest Sunset"
                                sortDescription="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                                perferendis eaque, exercitationem praesentium nihil."
                                imageAlt="text" />
                        </div>
                        <div class="swiper-slide">
                            <x-releted-reports-card reportImageUrl="{{ url('/images/website/blogs/blog-3.jpeg') }}"
                                imageAlt="trst" title="The Coldest Sunset"
                                sortDescription="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                            perferendis eaque, exercitationem praesentium nihil."
                                imageAlt="text" />
                        </div>
                        <div class="swiper-slide">
                            <x-releted-reports-card reportImageUrl="{{ url('/images/website/blogs/blog-1.jpeg') }}"
                                imageAlt="trst" title="The Coldest Sunset"
                                sortDescription="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                                perferendis eaque, exercitationem praesentium nihil."
                                imageAlt="text" />
                        </div>
                        <div class="swiper-slide">
                            <x-releted-reports-card reportImageUrl="{{ url('/images/website/blogs/blog-1.jpeg') }}"
                                imageAlt="trst" title="The Coldest Sunset"
                                sortDescription="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                                perferendis eaque, exercitationem praesentium nihil."
                                imageAlt="text" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden max-sm:block">
                <div class="grid grid-cols-2  w-full bottom-0 fixed text-center  ">
                    <div class="w-full text-between text-center rounded-md"><button
                            class="border  bg-blue-600 text-white text-center text-md font-semibold  w-full  py-3   ">Buy</button>
                    </div>
                    <div class="w-full text-between rounded-md"><button
                            class="border  bg-blue-600 text-white text-center text-md font-semibold w-full  py-3">Sample
                            PDF</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                // When a tab button is clicked
                $('.tab-btn').click(function() {
                    var tabId = $(this).data('tab');
                    $('.tab-btns').find('li').removeClass('bg-blue-400 text-white')
                    // Remove 'active' class from all tabs
                    $('.tab-btn').removeClass(
                        'text-blue-500 font-semibold border-b-2 border-blue-500 rounded-md text-white');
                    // Add 'active' class to clicked tab
                    $(this).addClass(
                        'text-blue-500 font-semibold border-b-2 border-blue-500 rounded-md text-white');
                    $(this).closest('li').addClass('bg-blue-400 text-white ')
                    // Hide all tab panels
                    $('.tab-panel').addClass('hidden');
                    // Show the clicked tab's panel
                    $('#' + tabId).removeClass('hidden');
                });

                // Optionally, set the first tab active by default
                $('.tab-btn:first').click();

                // FAQ tabs

                $('.faq-question').on('click', function() {
                    // Toggle the clicked item's answer
                    $(this).next('.faq-answer').slideToggle();

                    // Rotate the arrow icon
                    $(this).find('svg').toggleClass('rotate-180');

                    // Close other FAQ items
                    $('.faq-answer').not($(this).next()).slideUp();
                    $('.faq-question svg').not($(this).find('svg')).removeClass('rotate-180');
                });
            });
        </script>
    @endsection
