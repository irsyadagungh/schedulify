<div class="flex justify-between items-center font-poppin top w-full relative bg-primary p-4">
    <header class=" flex gap-20 items-center justify-between w-full
                    md:mx-10
                    ">
        <div class="tools flex gap-7 items-center">
            <h1 class="font-cursive text-xl">Schedulify</h1>
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
        
        <div class="flex gap-2">
            <img src="{{ asset('assets/icons/notification.svg') }}" />
            <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="">
        </div>
    </header>
</div>