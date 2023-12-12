@extends('layout.app')

@section('content')
{{-- Bagian atas --}}
<div class="top flex gap-4 justify-center
            md:justify-start">

    {{-- Personal --}}
    <div id="tombolAddNote">
        <button data-hs-overlay="#hs-slide-down-animation-modal4">
        <x-note>
            <h1 class=" font-bold text-[50px] text-center mt-7">+</h1>
        </x-note>
    </button>
        <h1 class="mt-2">Personal</h1>
    </div>

    {{-- Create New Project --}}
    <div>
        <x-note>
            <h1 class=" font-bold text-[50px] text-center mt-7">+</h1>
        </x-note>
        <h1 class="mt-2 font-poppin">Create New Project</h1>
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
            @for ($i = 0; $i < 4; $i++)
            <x-note>

                <div class="flex -ml-1 ">
                    <img
                    id="untukPin"
                    src="{{asset('assets/icons/push_pin (1).svg')}}"
                    class="mr-16 pl-0 pr-3 cursor-pointer w-10 h-5"
                    alt=""
                    />


                    <button data-hs-overlay="#hs-slide-down-animation-modal3">
                   <img
                   id="buatHapus"
                   src="{{asset('assets/icons/delete.svg')}}"
                   class="pt-0 pl-4     cursor-pointer "
                   alt=""
                   />
                    </button>

                    <button data-hs-overlay="#hs-slide-down-animation-modal4">
                   <img
                   id="untukKeluar"
                   src="{{asset('assets/icons/check_fig.svg')}}"
                   class="pt-0  cursor-pointer w-4 h-5"
                   alt=""
                   />
                    </button>
                        </div>

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

            </x-note>
            @endfor
        </div>
    </div>


    <x-modal-hapus-personal></x-modal-hapus-personal>
    <x-modal-add-task-personal></x-modal-add-task-personal>




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
        </div>
    </div>
</div>









<script>
    // Untuk Add Note
    const tombolAddNote = document.getElementById("tombolAddNote");
    const munculAddNote = document.getElementById("popUpAddNote");

    tombolAddNote.addEventListener("click", function () {
      munculAddNote.classList.remove("hidden");
      munculAddNote.classList.add("absolute");
    });

    // Untuk Close Add Note
    const tombolX = document.getElementById("tombolX");

    tombolX.addEventListener("click", function () {
      munculAddNote.classList.remove("absolute");
      munculAddNote.classList.add("hidden");
    });

    // Untuk Confirm Delete
    const tombolHapus = document.getElementById("buatHapus");
    const munculConfirm = document.getElementById("munculHapus");

    tombolHapus.addEventListener("click", function () {
      munculConfirm.classList.remove("hidden");
      munculConfirm.classList.add("absolute");
    });

    // Untuk Hapus
    const hapus = document.getElementById("untukHapus");

    hapus.addEventListener("click", function () {
      munculConfirm.classList.remove("absolute");
      munculConfirm.classList.add("hidden");
    });

    // Untuk Hapus
    const batal = document.getElementById("untukBatal");

    batal.addEventListener("click", function () {
      munculConfirm.classList.remove("absolute");
      munculConfirm.classList.add("hidden");
    });
  </script>
@endsection
