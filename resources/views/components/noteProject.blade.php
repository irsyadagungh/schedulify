<div class="card w-44 h-44 bg-card rounded-lg p-4 overflow-hidden">
    <div class="flex flex-col gap-2">
        {{-- Header --}}
       <div class="">
        <h1 class="text-xs font-bold">Memancing Anak Kelas</h1>
        <p class="text-[10px]">Created on 11.9.2023</p>
       </div>

       {{-- Deskripsi --}}
       <div class="">
        <p class="text-xs">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. kdoawkdo
        </p>
       </div>

       {{-- Bar Progress --}}
       <div class="flex gap-2">
        <div>
        <p class="text-xs flex">Task</p>
        </div>
        {{$slot}}
        <div>
            <p class="text-xs">100%</p>
        </div>
        </div>

       {{-- Member --}}
       <div class="flex">
        <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="" class="w-1/6 h-1/6">
        <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="" class="w-1/6 h-1/6">
        <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="" class="w-1/6 h-1/6">
       </div>
    </div>
    </div>
