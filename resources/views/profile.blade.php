@extends('layout.app')

@section('content')
    <div class="flex w-full gap-10">
        <div class="px-6">
            {{-- foto --}}
            @php
            $fotoPath = auth()->user()->foto ? asset('storage/' . auth()->user()->foto) : asset('assets/icons/user.svg');
            @endphp

            <img src="{{ $fotoPath }}" alt="" width="200px" height="200px">

        </div>
        <div>

         <form action="{{ route('pp') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="flex flex-col gap-2 ">
                {{-- Nama input --}}
                <label for="" class="">Nama Lengkap</label>
                <input type="text" name="fullname" value=" {{auth()->user()->fullname}}" class=" rounded-sm bg-secondary outline outline-1 outline-white">

                {{-- username input --}}
                <label for="" class="">Username</label>
                <input type="text" name="username" value="{{auth()->user()->username}}" class=" rounded-sm bg-secondary outline outline-1 outline-white">

                {{-- tanggal lahir input --}}
                <label for="" class="">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" value="{{auth()->user()->tanggal_lahir}}" class=" rounded-sm bg-secondary outline outline-1 outline-white">

                {{-- jenis kelamin input --}}
                <label for="" class="">Jenis Kelamin</label>
                {{-- <input type="text" class=" rounded-sm bg-secondary outline outline-1 outline-white"> --}}
                {{-- style="margin-right:10px;" --}}
                <select class="form-select bg-black text-white rounded-sm outline outline-1 outline-white" aria-label="Default select example" name="jenis_kelamin">
                    @if (auth()->user()->jenis_kelamin === null)
                        {{-- If jenis_kelamin is null, hide the option --}}
                        <option value="{{ auth()->user()->jenis_kelamin }}" selected hidden></option>
                    @else
                        {{-- If jenis_kelamin is not null, display the option --}}
                        <option value="{{ auth()->user()->jenis_kelamin }}" selected hidden>{{ auth()->user()->jenis_kelamin }}</option>
                    @endif
                    <option value="#">- Pilih Jenis Kelamin -</option>
                    <option value="laki-laki">Laki - Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>


                {{-- no telp input --}}
                <label for="" class="">No. Telp</label>
                <input type="text" name="no_telepon" value="{{ auth()->user()->no_telepon }}" class=" rounded-sm bg-secondary outline outline-1 outline-white">

                {{-- foto --}}
                <label for="" class="">Foto</label>
                <input type="file" name="foto" class="rounded-sm bg-secondary outline outline-1 outline-white">

                {{-- email input --}}
                <label for="" class="">Email</label>
                <input type="email" name="email" value="{{ auth()->user()->email }}" class="rounded-sm bg-secondary outline outline-1 outline-white">

                <div class="items-end justify-end mt-4">
                    <button type="submit" class="bg-white text-[#000] text-center w-2/12 rounded-sm">Save</button>
                </div>
            </div>
        </form>
    </div>

@endsection
