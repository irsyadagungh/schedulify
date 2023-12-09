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
    <div class="container flex flex-col gap-8 h-full w-full">

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
                <button data-hs-overlay="#hs-basic-modal" type="button" class="bg-ternary px-4 py-1 rounded-md focus:outline focus:outline-offset-2 focus:outline-ternary duration-200 ease-in-out">
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
            <div class="chart-container h-[30rem] w-fit">
                <canvas id="chart" class="w-full h-[90vh]"></canvas>
            </div>
        </div>

        {{-- Third Section --}}
        <div class="flex justify-between">
            <a href="{{route('list-task')}}" class="btn-list">
                <img src="{{ asset('assets/icons/list.svg') }}" alt="" srcset="">
                List
            </a>

            <a href="" class="btn-list">
                <img src="{{ asset('assets/icons/details.svg') }}" alt="" srcset="">
                Details
            </a>
        </div>
    </div>
@endsection
