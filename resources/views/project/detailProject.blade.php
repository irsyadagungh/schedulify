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
                    <x-list-task-link>

                    </x-list-task-link>
                @endif

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

            @if ($userStatus == "host")
                <x-list-task-link>

                </x-list-task-link>
            @elseif ($userStatus == "member")
                <button>bakso tanpa tepung</button>
            @endif
        </div>


        {{-- Overlay / Pop up --}}
        <x-modal-add-task-project>

        </x-modal-add-task-project>

        {{-- @foreach ($member as $m) --}}
        <x-avatar-group :member="$member" />
        {{-- @endforeach --}}

        {{-- </x-avatar-group> --}}
    </div>

    <x-modal-share-task></x-modal-share-task>
@endsection
