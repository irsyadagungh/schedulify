@extends('layout.app')

@section('content')



{{-- Bagian atas --}}
<div class="top flex gap-4 justify-center
            md:justify-start">

    {{-- Personal --}}
    <div id="popUpAddNote">
        <x-addNote>

        </x-addNote>
        <h1 class="mt-2">Personal</h1>
    </div>

    {{-- Create New Project --}}
    <div>
        <x-addNote>

        </x-addNote>
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
            <x-note>

            </x-note>
            <x-note>

            </x-note>
            <x-note>

            </x-note>
            <x-note>

            </x-note>
        </div>
    </div>

    {{-- Project --}}
    <div class="right  w-full flex flex-col gap-2 md:max-w-[50%] h-fit">
        <h1>Project</h1>
        <div class="card flex flex-wrap gap-2 ">
            <x-noteProject>
                <progress id="file" value="70" max="100" class="h-2 w-full mt-1.5" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
            </x-noteProject>

            <x-noteProject>
                <progress id="file" value="40" max="100" class="h-2 w-full mt-1.5" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
            </x-noteProject>

            <x-noteProject>
                <progress id="file" value="70" max="100" class="h-2 w-full mt-1.5" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
            </x-noteProject>

            <x-noteProject>
                <progress id="file" value="70" max="100" class="h-2 w-full mt-1.5" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
            </x-noteProject>
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
