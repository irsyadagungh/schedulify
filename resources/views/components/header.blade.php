<div class="head flex justify-between items-center font-poppin w-full fixed z-20 h-16 top-0 px-8 bg-primary
            md:px-20">
    <header class=" flex items-center justify-between w-full">
        <div class="tools flex gap-7 items-center">
            <a class="font-cursive text-xl cursor-pointer" href="/">Schedulify</a>
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
            
            <div class="hs-tooltip inline-block [--trigger:click] [--placement:bottom]">
                <button type="button" class="hs-tooltip-toggle flex justify-center items-center h-10 w-10 text-sm font-semibold rounded-lg focus:border focus:border-gray-200 bg-transparent text-gray-800 shadow-sm hover:bg-gray-50 ">
                  <img src="{{ asset('assets/icons/notification.svg') }}" alt="" srcset="">
                  <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border font-poppin font-thin text-sm text-black rounded-lg shadow-md" role="tooltip">
                    <div class="w-full">
                        
                    </div>
                  </span>
                </button>
              </div>

            <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="">
        </div>
    </header>
</div>
