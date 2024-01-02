@extends('layout.app')

@section('content')



{{-- Bagian atas --}}
<div class="top flex gap-4 justify-center
            md:justify-start">

    {{-- Personal --}}

    <div id="tombolAddNote">
        <button data-hs-overlay="#hs-slide-down-animation-modal">
        <x-note>
            <h1 class=" font-bold text-[50px] text-center mt-7">+</h1>
        </x-note>
    </button>

        <h1 class="mt-2">Personal</h1>
    </div>

    {{-- Create New Project --}}
    <div>
            <button data-hs-overlay="#hs-vertically-centered-modal2">
            <x-note>
                <h1 class=" font-bold text-[50px] text-center mt-7">+</h1>
            </x-note>
            </button>
            <h1 class="mt-2">Create New Project</h1>
        </div>
</div>

<hr class="my-4 border-white border-opacity-25" />

{{--Bagian bawah  --}}
<div class="bottom flex flex-wrap gap-4 w-full h-fit
            lg:flex-nowrap">

    {{-- Personal --}}
    <div class="left w-full flex flex-col gap-2 md::max-w-[50%] h-fit">
        <h1>Personal</h1>
        <div class="card flex flex-wrap gap-2 ">

            @foreach ($data as $p)
                                        <x-note>

                                            <div class="flex -ml-1 ">
                                                <img
                                                id="untukPin"
                                                src="{{asset('assets/icons/push_pin.svg')}}"
                                                class="w-10 h-5 pl-0 pr-3 mr-16 cursor-pointer"
                                                alt=""
                                                />

                                                {{-- Ada Button --}}
                                                <button data-hs-overlay="#hs-slide-down-animation-modal3">
                                               <img
                                               id="buatHapus"
                                               src="{{asset('assets/icons/delete.svg')}}"
                                               class="pt-0 pl-4 cursor-pointer "
                                               alt=""
                                               />
                                                </button>

                                                <button data-hs-overlay="#hs-slide-down-animation-modal4">
                                               <img
                                               id="untukKeluar"
                                               src="{{asset('assets/icons/check_fig.svg')}}"
                                               class="w-4 h-5 pt-0 cursor-pointer"
                                               alt=""
                                               />
                                                </button>
                                                    </div>

                                             {{-- Header --}}
                                   <div class="">
                                    <h1 class="text-xs font-bold">{{$p->judul}}</h1>
                                    <p class="text-[10px]">Created on {{$p->created_at}}</p>
                                   </div>

                                   {{-- Deskripsi --}}
                                   <div class="">
                                    <p class="text-xs">
                                        {!! $p->deskripsi !!}
                                    </p>
                                   </div>


                                        </x-note>
                                        @endforeach
        </div>
    </div>
    <x-modal-add-task-personal></x-modal-add-task-personal>
    <x-note-tambah></x-note-tambah>
    <x-modal-hapus-personal></x-modal-hapus-personal>




    {{-- Project --}}
    <div class="right  w-full flex flex-col gap-2 md:max-w-[50%] h-fit">
        <h1>Project</h1>
        <div class="card flex flex-wrap gap-2 ">

            @for ($i = 0; $i < 4; $i++)
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
        <progress id="file" value="70" max="100" class="h-2 w-full mt-1.5 rounded-full" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
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

        </div>
    </div>
</div>
{{-- <x-modalNotes></x-modalNotes> --}}
@endsection
