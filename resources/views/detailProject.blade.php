@extends('layout.app')

@section('content')
    <style>
        .chart {
    /* Hide scrollbar on Firefox */
    scrollbar-width: none;
    /* Hide scrollbar on other browsers */
    -ms-overflow-style: none;
    /* Hide scrollbar on WebKit-based (like Chrome, Safari) */
    &::-webkit-scrollbar {
        display: none;
    }
}
    </style>
    <div class="container flex flex-col gap-10 h-full w-[99%]">

        {{-- First Section --}}
        <div class="first flex justify-between">
            {{-- Account section --}}
            <div class="flex items-center">
                @for ($i = 0; $i < 4; $i++)
                <img class="absolute" style="left: {{ $i * 15 }}px;" src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="">
                @endfor
                <img class="absolute" style="left: {{ $i * 15 }}px;" src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="">
            </div>

            {{-- Title --}}
            <h1>
                My Project
            </h1>

            {{-- Button Section --}}
            <div class="flex justify-between items-center w-1/6">
                <button class="bg-ternary px-4 rounded-md focus:outline focus:outline-offset-2 focus:outline-ternary duration-200 ease-in-out">
                    Add Task <span>&#43;</span>
                </button>
                <div class="flex gap-2">
                    <img src="{{ asset('assets/icons/share.svg') }}" alt="" srcset=""> 
                    <span>Share</span>
                </div>
            </div>
        </div>

        {{-- Second Section --}}
        <div class="chart w-full max-h-3/6 overflow-scroll border border-ternary rounded-xl">
            <div class="chart-container h-[33rem]  w-fit">
                <canvas id="chart" class="w-[2000vw] h-[100vh]"></canvas>
            </div>
        </div>
    </div>
@endsection