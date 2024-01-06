@extends('layout.app')

@section('content')
<div class="flex gap-4 flex-wrap">
@foreach ($data as $p)
@if ($p->tanggal_deadline == $formatDate && $p->status != 'done')



<x-note :note-id="$p->id" :customBg="$p->warna">
<div data-hs-overlay="" class="w-full h-44 flex flex-col gap-2">
    <div class="flex justify-between">

            <div>
                {{-- Kiri --}}
                <a href="">
                    <img src="{{asset('assets/icons/push_pin.svg')}}" alt="">
                </a>
            </div>



            <div class="flex gap-2">
                {{-- Kanan --}}
                <a href="{{ url('personal/destroy/'.$p->id) }}" onclick="return confirm('Are you sure you want to delete?')">
                    <img src="{{asset('assets/icons/delete.svg')}}" alt="" class="w-5 h-5">
                </a>


                <a href="">
                    <img src="{{asset("assets/icons/done.svg")}}" alt="" class="w-5 h-5">
                </a>
            </div>



            </div>
            <a href="{{ route('plEdit', ['id' => $p->id]) }}">
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

            </div>
            </a>
            </x-note>
            @endif
            @endforeach
        </div>
@endsection

