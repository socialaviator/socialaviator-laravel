@extends('website/layout.master')
@section('content')
    <div
        class="py-16 z-50   max-w-full bg-cover bg-gray-200 bg-center bg-no-repeat flex justify-center items-center  tracking-wide">
        <div class="heading text-6xl max-sm:text-2xl font-bold container grid gap-14">
            <h1 data-aos="fade-right" class="text-center">Precise <span class="text-blue-900"> market intelligence
                </span>and <span class="text-blue-900 ">advisory</span>.</h1>

            <h3 data-aos="fade-left" class="text-center">
                <span
                    class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-pink-500 relative inline-block">
                    <span class="relative text-white">25000+</span>
                </span> reports across 100+ industry segments exhaustively covered.
            </h3>

            <div class=" justify-between text-center">
                <div class="relative max-sm:w-full w-1/2 inline-flex h-16 ">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none ">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search"
                        class="block  w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300  rounded-full bg-white focus:outline-none focus:border-blue-500 focus:ring-skbluey-500 focus:ring-1 sm:text-sm"
                        placeholder="Search market name, category..." required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full  text-lg px-5 py-2">Search</button>
                </div>
            </div>

        </div>
    </div>

    {{-- Our clients --}}
    <div class=" text-center justify-between py-8 our_clients" data-aos="fade-up">
        <h3 class="text-3xl font-bold  py-8 uppercase">Our clients</h3>
        <!-- Additional required wrapper -->
        <div class="swiper our_client_swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="{{ asset('asset/our_clients/company_img_1.jpg') }}"
                        class="img-fluid h-28 w-44 max-sm:h-20 max-sm:w-32 max-md:h-24 max-md:w-36 rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/our_clients/company_img_2.jpg') }}"
                        class="img-fluid h-28 w-44 max-sm:h-20 max-sm:w-32 max-md:h-24 max-md:w-36  rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/our_clients/company_img_3.jpg') }}"
                        class="img-fluid h-28 w-44 max-sm:h-20 max-sm:w-32 max-md:h-24 max-md:w-36  rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/our_clients/company_img_4.jpg') }}"
                        class="img-fluid h-28 w-44 max-sm:h-20 max-sm:w-32 max-md:h-24 max-md:w-36  rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/our_clients/company_img_5.png') }}"
                        class="img-fluid h-28 w-44 max-sm:h-20 max-sm:w-32 max-md:h-24 max-md:w-36  rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/our_clients/company_img_6.png') }}"
                        class="img-fluid h-28 w-44 max-sm:h-20 max-sm:w-32 max-md:h-24 max-md:w-36  rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/our_clients/company_img_7.png') }}"
                        class="img-fluid  h-28 w-44 max-sm:h-20 max-sm:w-32 max-md:h-24 max-md:w-36 rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/our_clients/company_img_8.jpg') }}"
                        class="img-fluid  h-28 w-44 max-sm:h-20 max-sm:w-32 max-md:h-24 max-md:w-36 rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/our_clients/company_img_9.png') }}"
                        class="img-fluid  h-28 w-44 max-sm:h-20 max-sm:w-32 max-md:h-24 max-md:w-36 rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/our_clients/company_img_10.jpg') }}"
                        class="img-fluid h-28 w-44 max-sm:h-20 max-sm:w-32 max-md:h-24 max-md:w-36  rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/our_clients/company_img_11.png') }}"
                        class="img-fluid h-28 w-44 max-sm:h-20 max-sm:w-32 max-md:h-24 max-md:w-36  rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('asset/our_clients/company_img_12.jpg') }}"
                        class="img-fluid h-28 w-44 max-sm:h-20 max-sm:w-32 max-md:h-24 max-md:w-36  rounded-circle"
                        alt="image1">
                </div>
            </div>
        </div>
    </div>

    {{-- Our blogs --}}
    <div class=" text-center justify-between py-8 max-md:px-8 ">
        <h3 class="text-3xl font-bold pb-8 uppercase text-center justify-between " data-aos="fade-up">Market Research Blogs</h3>
        <div class="  flex flex-wrap gap-10 justify-center" data-aos="fade-up">
            @php $img_url=url('/images/website/blogs/blog-1.jpeg') @endphp

            <x-blogs imageUrl="{{ url('/images/website/blogs/blog-1.jpeg') }}" title="The Coldest Sunset"
                message="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                            perferendis eaque, exercitationem praesentium nihil." />

            <x-blogs imageUrl="{{ url('/images/website/blogs/blog-2.jpeg') }}" title="The Coldest Sunset"  
                message="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                            perferendis eaque, exercitationem praesentium nihil." />

            <x-blogs imageUrl="{{ url('/images/website/blogs/blog-3.jpeg') }}" title="The Coldest Sunset"
                message="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                            perferendis eaque, exercitationem praesentium nihil." />


        </div>

    </div>

    {{-- Why us? The ABRR Advantage  --}}
    <div class="w-full py-16 my-5 max-md:py-8 bg-gradient-to-r from-indigo-400 to-cyan-400">
        <div class="container justify-self-center">
            <div class="grid grid-cols-2 gap-5 justify-around max-md:grid-cols-1">
                <div>
                    <h2 class="text-3xl font-bold  py-8 uppercase text-center text-white">Why us? The ABRR Advantage</h2>
                    <p class="text-white py-4 text-lg font-semibold">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Omnis alias nihil sapiente temporibus
                        labore at aspernatur magnam itaque minima molestiae.</p>
                </div>
                <div class=" text-white">
                    <div class="swiper why_choose_us_slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="p-3 max-w-sm rounded-md bg-no-repeat bg-cover object-fill  "
                                    style="background-image: url({{ url('/images/website/card_bg-1.png') }})">
                                    <h2 class="py-4 text-lg font-semibold">Flash Delivery </h2>
                                    <p class="text-justify">With our vast database of market intelligence and an
                                        ever-growing
                                        network of
                                        experts across the
                                        value chain, we make sure you get top-notch solutions with swift turnarounds that
                                        suit
                                        your
                                        deadlines.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-3  max-w-sm rounded-md bg-no-repeat bg-cover object-fill"
                                    style="background-image: url({{ url('/images/website/card_bg-1.png') }})">
                                    <h2 class="py-4 text-lg font-semibold">Strategic Location </h2>
                                    <p class="text-justify">We believe our location in India is of strategic advantage to
                                        you.
                                        Without the
                                        overheads of other
                                        firms, we can get you intelligence at the level of accuracy you deserve, at a
                                        significantly
                                        lower cost to your organization. </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-3  max-w-sm rounded-md bg-no-repeat bg-cover object-fill"
                                    style="background-image: url({{ url('/images/website/card_bg-1.png') }})">
                                    <h2 class="py-4 text-lg font-semibold">Distributed Expertise </h2>
                                    <p class="text-justify">No organization can seemingly hire all the necessary expertise
                                        to
                                        answer every
                                        business problem.
                                        We
                                        realize this challenge and turn it into our advantage by using a distributed
                                        expertise
                                        model.
                                    </p>
                                </div>
                            </div>
                            </divv>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- letest reports --}}
    <div class=" text-center justify-between py-8 max-md:px-8">
        <h3 class=" text-center justify-between uppercase  pb-8 text-gray-700 text-3xl max-sm:text-2xl font-bold"
            data-aos="fade-up">Letest reports</h3>
        <div class="flex justify-center gap-3  ">
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
    </div>
@endsection
