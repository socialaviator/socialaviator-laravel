<!-- component -->
<header class="header sticky top-0 bg-white shadow-md flex items-center justify-between h-16 z-50">
    <!-- logo -->
    <h1 class="w-3/12">
        <a href="/">
            <img class="w-auto h-[75px]" src="{{ url('/images/website/company_logo.png') }}" alt="Absolute Buisness research" title="Absolute Buisness research">
        </a>
    </h1>

    <!-- navigation -->
    <nav class="nav font-semibold text-lg">
        <div class="flex items-center gap-5 max-sm:hidden">
            <div class="px-3 py-2 hover:bg-blue-600 hover:text-white hover:rounded-md hover:shadow-md">
                <a href="{{ url('/') }}">Home</a>
            </div>
            <div class="px-3 py-2 hover:bg-blue-600  hover:rounded-md hover:shadow-md group hover:text-white">
                <a href="{{ url('/reports') }}" class="flex justify-between items-center space-2 ">Reports <svg
                        xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1 ml-1" viewBox="0 0 24 24">
                        <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                    </svg></a>
                <div class="group-hover:block hidden absolute  duration-300 py-4 hover:block text-gray-900  pt-5  ">
                    <div class="shadow-md rounded-md bg-blue-50 ">
                        <div class="grid grid-cols-2 gap-2 p-2">
                                <div class=" hover:bg-blue-600 hover:text-white px-2 py-1 hover:rounded-md">
                                    <a href="{{ url('/reports') }}"
                                        class="parent_category ">
                                        <p >Aerospace &amp; Defense</p>
                                    </a>
                                </div>
                                <div class=" hover:bg-blue-600 hover:text-white px-2 py-1 hover:rounded-md">
                                    <a href="{{ url('/reports') }}"
                                        class="parent_category">
                                        <p >Automotive &amp; Logistics</p>
                                    </a>
                                </div>
                                <div class=" hover:bg-blue-600 hover:text-white px-2 py-1 hover:rounded-md">
                                    <a href="{{ url('/reports') }}" class="parent_category">
                                        <p >Banking, Financial Services &amp; Insurance</p>
                                    </a>
                                </div>
                                <div class=" hover:bg-blue-600 hover:text-white px-2 py-1 hover:rounded-md">
                                    <a href="{{ url('/reports') }}"
                                        class="parent_category">
                                        <p >Construction &amp; Manufacturing</p>
                                    </a>
                                </div>
                                <div class=" hover:bg-blue-600 hover:text-white px-2 py-1 hover:rounded-md">
                                    <a href="{{ url('/reports') }}" class="parent_category">
                                        <p >Consumer Goods</p>
                                    </a>
                                </div>
                                <div class=" hover:bg-blue-600 hover:text-white px-2 py-1 hover:rounded-md">
                                    <a href="{{ url('/reports') }}" class="parent_category">
                                        <p >Energy &amp; Power</p>
                                    </a>
                                </div>
                                <div class=" hover:bg-blue-600 hover:text-white px-2 py-1 hover:rounded-md">
                                    <a href="{{ url('/reports') }}" class="parent_category">
                                        <p >Food &amp; Beverage</p>
                                    </a>
                                </div>
                                <div class=" hover:bg-blue-600 hover:text-white px-2 py-1 hover:rounded-md">
                                    <a href="{{ url('/reports') }}" class="parent_category">
                                        <p >Healthcare</p>
                                    </a>
                                </div>
                                <div class=" hover:bg-blue-600 hover:text-white px-2 py-1 hover:rounded-md">
                                    <a href="{{ url('/reports') }}"
                                        class="parent_category">
                                        <p >ICT, Semiconductor &amp; Electronics</p>
                                    </a>
                                </div>
                                <div class=" hover:bg-blue-600 hover:text-white px-2 py-1 hover:rounded-md">
                                    <a href="{{ url('/reports') }}"
                                        class="parent_category">
                                        <p >Materials &amp; Chemicals</p>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-3 py-2 hover:bg-blue-600 hover:text-white hover:rounded-md hover:shadow-md">
                <a href=" {{ url('/about_us') }}">About</a>
            </div>
            <div class="px-3 py-2 hover:bg-blue-600 hover:text-white hover:rounded-md hover:shadow-md">
                <a href="{{ url('/contact_us') }}">Contact</a>
            </div>
        </div>
    </nav>

    <!-- buttons --->
    <div class="w-3/12 flex justify-end">
        <a href="">
            <svg class="h-8 p-1 hover:text-blue-500 duration-200" aria-hidden="true" focusable="false" data-prefix="far"
                data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                class="svg-inline--fa fa-search fa-w-16 fa-9x">
                <path fill="currentColor"
                    d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z"
                    class=""></path>
            </svg>
        </a>

    </div>
</header>
