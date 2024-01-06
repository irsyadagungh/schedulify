<div class="head flex justify-between items-center font-poppin w-full fixed z-20 h-16 top-0 px-8 bg-primary
            md:px-20">
    <header class=" flex items-center justify-between w-full">
        <div class="tools flex gap-7 items-center">
            <a class="font-cursive text-xl cursor-pointer" href="{{route ('home')}}">Schedulify</a>
            <div class="menu flex flex-col gap-2 cursor-pointer
                        md:hidden">
                <span class="w-6 h-px bg-white"></span>
                <span class="w-6 h-px bg-white"></span>
                <span class="w-6 h-px bg-white"></span>
            </div>
        </div>
        <div class="">
            {{ $slot }}
        </div>

        <div class="flex gap-10">
            <!-- Popover -->
            <div class="hs-tooltip inline-block [--trigger:click] [--placement:bottom]">
                <button type="button" class="hs-tooltip-toggle flex justify-center items-center h-10 w-10 text-sm font-semibold rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                <img class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400" role="tooltip">
                    Bottom popover
                </span>
                </button>
            </div>
  <!-- End Popover -->
           <a href="{{route ('p')}}"> <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset=""></a>
        </div>
    </header>
</div>
