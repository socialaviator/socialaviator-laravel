{{-- <div
    class="w-full lg:flex relative flex bg-white rounded-xl shadow-md overflow-hidden  my-3 hover:shadow-xl border-t-2 border-blue-500">

    <div class="  bg-white  p-2 flex flex-col justify-between leading-normal">
        <div class=" overflow-hidden h-40 max-md:h-44 ">
            <img class="h-40 mr-5 float-left max-sm:h-24  object-cover w-48 max-sm:w-20 rounded-md"
            src="{{ $thumbnailImageUrl }}" alt="{{ $thumbnailImageAlt }}">
            <a href="{{ $reportUrl }}" class="block  leading-tight  text-black h-32">
                <h2 class="text-xl font-medium max-sm:text-sm max-md:text-base pb-2 hover:underline text-blue-700 ">
                    {{ $reportTitle }}
                </h2>
                <p class=" text-slate-700 max-sm:text-sm text-base  max-md:h-24">{{ $sortDescription }}</p>
            </a>
            
        </div>
      <div class="flex gap-5 float-end justify-end">
        <button class="px-3 text-xl font-semibold text-blue-700 cursor-auto ">$4000</button>
        <button
        class=" border-2 rounded-md border-blue-500 hover:shadow-lg hover:bg-blue-700 hover:text-white px-4 py-1 my-2  max-md:px-auto max-md:my-auto">Download
        Sample</button>
    <button
        class=" border-2 rounded-md border-amber-500 hover:shadow-lg hover:bg-amber-700 hover:text-white px-4 py-1 my-2 ">Buy
        New</button>
      </div>
        <div class="flex justify-between gap-5  max-sm:self-center">
            <div class="max-sm:hidden"> 

                <span> Apr-2024 | </span> <span> Pages: 298 | </span> <span> Formats*: PDF | </span> <span> Category: Food and Beverages | </span>
                <span> Delivery: 2 to 4 Hours </span>

            </div>
            <div class="text-sm  max-sm:text-center ">
                <button
                    class=" border-2 rounded-md border-blue-500 hover:shadow-lg hover:bg-blue-700 hover:text-gray px-4 py-1 my-2  max-md:px-2 max-md:my-1">Download
                    Sample</button>
                <button
                    class=" border-2 rounded-md border-amber-500 hover:shadow-lg hover:bg-amber-700 hover:text-gray px-4 py-1 my-2 ">Buy
                    New</button>
            </div>
        </div>
    </div>
</div> --}}



<div
    class="w-full max-md:py-3  bg-white rounded-xl shadow-md hover:shadow-blue-100/50 overflow-hidden  my-3 px-2 max-sm:px-1 hover:shadow-xl border-t-2 border-blue-500">
    <div class="sm:flex">
        <img class="float-left m-auto h-40 p-2 max-md:p-1 rounded-md object-cover max-md:h-16 max-md:w-16 w-48"
            src="{{ $thumbnailImageUrl }}" alt="{{ $thumbnailImageAlt }}">
        <a href="{{ $reportUrl }}"
            class="block mt-1 text-base max-md:text-base max-md:font-normale leading-tight hover:no-underline">

            <div class="px-2 ">
               
                <h1 class="text-blue-600 text-lg font-bold "> {{ $reportTitle }} </h1>
                <p class="my-2 max-md:my-1 font-semibold text-cyan-600"> <i class="fa-solid fa-calendar-days px-3 "></i>12-12-2024</p>

                <h2 class="mt-2 text-justify max-md:text-start">{{ $sortDescription }}</h2>
            </div>
        </a>
    </div>
    <div class="max-sm:justify-self-center mb-2">
        <a type="button" href="{{ url('/buy/1234') }}" class="ml-10 max-md:ml-2 px-3 py-1   rounded-md shadow-md bg-gradient-to-r from-blue-500 to-blue-600  text-white ">Buy New</a>

    </div>
</div>
