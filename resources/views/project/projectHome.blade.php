@extends('layout.app')

@section('content')
<div class="flex flex-col gap-8">
<div class="flex flex-col gap-2">
    <h1 class="font-bold ">Project</h1>
    <div class="flex flex-wrap gap-4">
        {{-- Note 1 --}}


        @for ($i = 0; $i < 2; $i++)
        <a href="{{ route('detail-project')}}">
        <x-note>
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
        <progress id="file" value="70" max="100" class="h-2 w-full mt-1.5" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
        <div>
            <p class="text-xs">70%</p>
        </div>
        </div>

       {{-- Member --}}
       <div class="flex">
        <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="" class="w-1/6 h-1/6">
        <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="" class="w-1/6 h-1/6">
        <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="" class="w-1/6 h-1/6">
       </div>

        </x-note>
        </a>
        @endfor

        {{-- Add noteProject --}}
        <div>
            <button data-hs-overlay="#hs-vertically-centered-modal2">
            <x-note>
                <h1 class=" font-bold text-[50px] text-center mt-7">+</h1>
            </x-note>
            </button>
            <h1 class="mt-2">Create New Project</h1>
        </div>


    </div>
</div>

<div class="flex flex-col gap-2">
    <h1 class="font-bold ">History Project</h1>
    <div class="flex flex-wrap gap-4">


        @for ($i = 0; $i < 5; $i++)
        {{-- Note 1 --}}
        <x-note>
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
             <progress id="file" value="100" max="100" class="h-2 w-full mt-1.5" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
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

        </x-note>
        @endfor

    </div>
</div>

</div>

<x-modal-new-project></x-modal-new-project>


@endsection

