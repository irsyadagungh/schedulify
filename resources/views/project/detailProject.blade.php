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

    @php
    $userIsParticipant = $data->member->where('id_user', Auth::id())->first();
    $userStatus = $userIsParticipant ? $userIsParticipant->status : '';
    // dd($userStatus);
    @endphp

    <div class="container flex flex-col gap-8 h-full w-full">

        {{-- First Section --}}
        <div class="first flex justify-between">
            {{-- Account section --}}
            <div class="flex items-center cursor-pointer" data-hs-overlay="#hs-slide-down-animation-modal">
                @for ($i = 0; $i < 4; $i++)
                <img class="absolute" style="left: {{ $i * 15 }}px;" src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="">
                @endfor
                <img class="absolute" style="left: {{ $i * 15 }}px;" src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="">
            </div>

            {{-- Title --}}
            <h1>
                {{$data -> judul}}
            </h1>

            {{-- Button Section --}}

            <div class="flex justify-between items-center gap-5">
                @if ($userStatus == "host")
                    <x-btn-header-super-user>

                    </x-btn-header-super-user>
                @elseif ($userStatus == "member")
                    <x-list-task-link :detail="$data -> id" >

                    </x-list-task-link>
                @endif

            </div>
        </div>

        {{-- Second Section --}}
        <div class="chart w-full max-h-3/6 overflow-scroll border border-ternary rounded-xl">
            <div class="chart-container h-[30rem] w-fit">
                <canvas id="chart" class="w-full h-[90vh]" ></canvas>
            </div>
        </div>

        <script>
            const chartData = @json($chartData); // Assuming $chartData is an array of arrays
        </script>


        {{-- Third Section --}}
        <div class="flex justify-between">

            @if ($userStatus == "host")
                <div class="flex w-full justify-between">
                    <div class="flex gap-4">
                        <x-list-task-link :detail="$data -> id">

                        </x-list-task-link>
                    </div>
                    <div class="flex gap-4">
                        <a href="" class="bg-redLight rounded-md py-1 px-2 focus:outline focus:outline-1 focus:outline-redLight focus:outline-offset-2">Delete Project</a>
                        <a href="" class="bg-blue py-1 px-4 rounded-md focus:outline focus:outline-1 focus:outline-blue focus:outline-offset-2">Done</a>
                    </div>
                </div>
            @elseif ($userStatus == "member")
                <a href="{{ url('project/leave/'.auth()->user()->id) }}" class="bg-redLight p-1 rounded-md focus:outline focus:outline-redLight focus:outline-offset-2 focus:outline-1">
                    Leave Project
                </a>
            @endif
        </div>


        {{-- Overlay / Pop up --}}
        <x-modal-add-task-project :assign="$member" :project="$data->id">

        </x-modal-add-task-project>

        {{-- @foreach ($member as $m) --}}
        <x-avatar-group :member="$member" />
        {{-- @endforeach --}}

        {{-- </x-avatar-group> --}}
    </div>

    <x-modal-share-task :code="$data->room_code">

    </x-modal-share-task>
@endsection
