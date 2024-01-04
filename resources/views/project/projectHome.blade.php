@extends('layout.app')

@section('content')
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="flex flex-col gap-8">
<div class="flex flex-col gap-2">
    <h1 class="font-bold ">Project</h1>
    <div class="flex flex-wrap gap-4">
        {{-- Note 1 --}}


        @foreach ($data as $p)
        {{-- Note 1 --}}
        @php
            $userIsParticipant = $p->member->where('id_user', Auth::id())->first();
            $userStatus = $userIsParticipant ? $userIsParticipant->status : '';
            // dd($userStatus);
        @endphp
        @if ($userStatus == "host")
        <x-note>
            <a href="{{route('pjShow', ['id' => $p -> id])}}" class="h-full">
                {{-- Header --}}
                <div class="">
                    <h1 class="text-xs font-bold">{{$p -> judul}}</h1>
                    <p class="text-[10px]">Created on {{$p -> created_at}}</p>
                </div>

                {{-- Deskripsi --}}
                <div class="">
                    <p class="text-xs">
                        {{$p -> deskripsi}}
                    </p>
                </div>

                {{-- Bar Progress --}}
                <div class="flex gap-2">
                    <div>
                        <p class="text-xs flex">Task</p>
                    </div>
                    <progress id="file" value="100" max="100" class="h-2 w-full mt-1.5" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
                    <div>
                        <p class="text-xs">100%</p>
                    </div>
                </div>

                {{-- Member --}}
                <div class="flex">
                    <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="" class="w-1/6 h-1/6">
                    <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="" class="w-1/6 h-1/6">
                    <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="" class="w-1/6 h-1/6">
                </div>

            </a>
        </x-note>
        @elseif ($userStatus == "member")
        <x-note>
            <a href="{{route('pjShow', ['id' => $p -> id])}}" class="h-full">
                {{-- Header --}}
                <div class="">
                    <h1 class="text-xs font-bold">{{$p -> judul}}</h1>
                    <p class="text-[10px]">Created on {{$p -> created_at}}</p>
                </div>

                {{-- Deskripsi --}}
                <div class="">
                    <p class="text-xs">
                        {{$p -> deskripsi}}
                    </p>
                </div>

                {{-- Bar Progress --}}
                <div class="flex gap-2">
                    <div>
                        <p class="text-xs flex">Task</p>
                    </div>
                    <progress id="file" value="100" max="100" class="h-2 w-full mt-1.5" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
                    <div>
                        <p class="text-xs">100%</p>
                    </div>
                </div>

                {{-- Member --}}
                <div class="flex">
                    <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="" class="w-1/6 h-1/6">
                    <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="" class="w-1/6 h-1/6">
                    <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="" class="w-1/6 h-1/6">
                </div>

            </a>
        </x-note>
        @endif

        @endforeach

        {{-- Add noteProject --}}
        <div>
            <button data-hs-overlay="#hs-vertically-centered-modal2">
            <x-note>
                <h1 class=" font-bold text-[50px] text-center mt-7">+</h1>
            </x-note>
            </button>
            <h1 class="mt-2">Create New Project</h1>
        </div>



    </div>
</div>

<div class="flex flex-col gap-2">
    <h1 class="font-bold ">History Project</h1>
    <div class="flex flex-wrap gap-4">


        @foreach ($data as $p)
        {{-- Note 1 --}}
        <x-note>
            {{-- Header --}}
            <div class="">
             <h1 class="text-xs font-bold">{{$p -> judul}}</h1>
             <p class="text-[10px]">Created on {{$p -> created_at}}</p>
            </div>

            {{-- Deskripsi --}}
            <div class="">
             <p class="text-xs">
                 {{$p -> deskripsi}}
             </p>
            </div>

            {{-- Bar Progress --}}
            <div class="flex gap-2">
             <div>
             <p class="text-xs flex">Task</p>
             </div>
             <progress id="file" value="100" max="100" class="h-2 w-full mt-1.5" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
             <div>
                 <p class="text-xs">100%</p>
             </div>
             </div>

            {{-- Member --}}
            <div class="flex">
             <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="" class="w-1/6 h-1/6">
             <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="" class="w-1/6 h-1/6">
             <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="" class="w-1/6 h-1/6">
            </div>

        </x-note>
        @endforeach

    </div>
</div>

</div>

<x-modal-new-project></x-modal-new-project>


@endsection

