    <footer class="bg-gradient-to-r from-slate-500 to-slate-800 text-white  py-5">
        <div
            class="grid grid-cols-4 gap-5 max-md:grid-cols-2 max-sm:grid-cols-1 max-md:px-8 px-16 font-normal content-center">
            {{-- first row --}}
            <div class="p-2">
                <img src="{{ url('/images/website/company_logo.png') }}" alt="Absolute Buisness research"
                    class="w-auto h-[75px] ">
                <p class="my-3">Absolute Buisness research is a business division of Fairfield Consultancy
                    Services
                    Limited. A company
                    registered with the Registrar of Companies in India.</p>

                <p class="font-semibold text-base my-3">Registration Number : 12345678</p>
                <p class="font-semibold text-base my-3">Dun & Bradstreet D-U-N-S® Number: 123456789</p>
            </div>
            {{-- second row --}}
            <div class="p-2">
                <p class="font-semibold text-lg">Office Address</p>
                <p class="my-4">G04 Golden Mile House,
                    Clayponds Lane, Brentford,
                    London TW8 0GU United Kingdom
                    UK: +44 (0)20 30025888</p>
                <b>Email</b>
                <p class="mb-3"> sales@fairfieldmarketresearch.com</p>
                <b class="">Stay Connected</b>
                <div class="flex flex-wrap gap-5 mt-3 content-center">
                    <i class="fa-brands fa-linkedin w-8 h-8"></i>
                    <i class="fa-brands fa-square-twitter w-8 h-8"></i>
                    <i class="fa-brands fa-facebook w-8 h-8"></i>
                    <i class="fa-brands fa-square-instagram w-8 h-8"></i>
                </div>
            </div>
            <div class="p-2">
                <b>Certified By</b>
                <div class="flex flex-wrap gap-3 my-3">
                    <img src="{{ url('/images/website/IAF.png') }}" alt="IAF" class="h-12 w-15">
                    <img src="{{ url('/images/website/ISO.png') }}" alt="ISO" class="h-12 w-15">
                    <img src="{{ url('/images/website/ESOMAR_corporate.jpg') }}" alt="ESOMAR_corporate"
                        class="h-12 w-15">
                </div>
            </div>
            <div class="p-2 ">
                <div class="grid gap-3">
                    <b>My Account</b>
                    <div class="grid ">
                        <a href="/">My Basket</a>
                        <a href="/">My Account</a>
                        <a href="/">My Order</a>
                        <a href="/">Login</a>
                    </div>
                    <b>Legal</b>
                    <div class="grid ">
                        <a href="">Privacy Policy</a>
                        <a href="">Terms of Service</a>
                        <a href="">GDPR & Other Policies</a>
                        <a href="">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('asset/js/aos.js') }}"></script>
    <script src="{{ asset('asset/js/swiper-bundle.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/fontawesome.min.js"></script> --}}
    <script>
        AOS.init({
            easing: 'ease-in-out-sine'
        });
        $(document).ready(function() {

            new Swiper('.our_client_swiper', {
                spaceBetween: 30,
                // centeredSlides: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    375: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 6,
                        spaceBetween: 40,
                    },
                },
                // Optional parameters
                direction: 'horizontal',
                loop: true,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                // And if we need scrollbar
                //   scrollbar: {
                //     el: '.swiper-scrollbar',
                //   },
            });

            new Swiper('.why_choose_us_slider', {
                //             effect: "cards",
                //   grabCursor: true,
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                // Optional parameters
                direction: 'horizontal',
                loop: true,
                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },
                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

            new Swiper('.releted_reports_slider', {
                spaceBetween: 30,
                // centeredSlides: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 40,
                    },
                },
                // Optional parameters
                direction: 'horizontal',
                loop: true,
                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },
                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

            });


        })
    </script>
    </body>

    </html>
