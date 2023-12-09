@extends('layout.app')

@section('content')
    <div class="flex w-full gap-10">
        <div class="px-6">
            {{-- foto --}}
            <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="" width="200px" height="200px">
        </div>

        <div class="flex flex-col gap-2 w-1/2">
            {{-- Input 1 --}}
            <div>
            <label for="" class="">Nama Lengkap</label>
            <input type="text" class=" rounded-sm bg-secondary outline outline-1 outline-white">
            </div>
            <div>
            <label for="" class="">Username</label>
            <input type="text" class=" rounded-sm bg-secondary outline outline-1 outline-white">
            </div>
            <label for="" class="">Tanggal Lahir</label>
            <input type="text" class=" rounded-sm bg-secondary outline outline-1 outline-white">
            <label for="" class="">Jenis Kelamin</label>
            <input type="text" class=" rounded-sm bg-secondary outline outline-1 outline-white">
            <label for="" class="">No. Telp</label>
            <input type="text" class=" rounded-sm bg-secondary outline outline-1 outline-white">
            <label for="" class="">Email</label>
            <input type="text" class=" rounded-sm bg-secondary outline outline-1 outline-white">

            <div class="items-end justify-end mt-4">
                <button class="bg-white text-[#000] text-center w-2/12 rounded-sm">Save</button>
            </div>

        </div>
    </div>

@endsection
