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

        <div class="flex gap-6">
            <img src="{{ asset('assets/icons/notification.svg') }}" />
            <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="">
        </div>
    </header>
</div>
