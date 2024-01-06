@extends('layout.app')

@section('content')
{{-- Bagian atas --}}
        <h1 class="font-bold ">My Task</h1>
        <div style = "margin-top: 20px">
            <div style = "display:flex;  padding-bottom: 10px;">
            </div>

        <div>

            <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
              <button type="button" class="inline-flex items-center px-1 py-4 text-sm text-white/50 border-b-2 border-transparent hs-tab-active:font-bold hs-tab-active:border-blue-600 hs-tab-active:text-white gap-x-2 whitespace-nowrap hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:text-blue-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 active" id="basic-tabs-item-1" data-hs-tab="#basic-tabs-1" aria-controls="basic-tabs-1" role="tab">
                To Do
              </button>
              <button type="button" class="inline-flex items-center px-1 py-4 text-sm text-white/50 border-b-2 border-transparent hs-tab-active:font-bold hs-tab-active:border-blue-600 hs-tab-active:text-white gap-x-2 whitespace-nowrap hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:text-blue-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" id="basic-tabs-item-2" data-hs-tab="#basic-tabs-2" aria-controls="basic-tabs-2" role="tab">
                Done
              </button>
            </nav>
            <hr class="my-2 border-white border-opacity-25" style = "margin-left: -2px; margin-top:1px"/>
        </div>


           {{-- Tab To Do --}}
        <div class="p-4 mt-3">
            <div id="basic-tabs-1" role="tabpanel" aria-labelledby="basic-tabs-item-1">


              {{-- Kategori Today --}}
                <div class="hs-accordion-group">
                    <div class="hs-accordion active" id="hs-basic-heading-one " style="margin-left: -80px">
                        <button class="inline-flex items-center w-full py-3 font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-blue-600 gap-x-3 text-start hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-with-arrow-collapse-one">

                            <h1 class="mt-16 ml-12 font-bold text-white" style = "margin-top : -4px; margin-left:62px" >  Today </h1></a>
                            <svg class="block w-4 h-4 hs-accordion-active:hidden"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.5992 12.2853L9.10566 7.58127L10.5373 6.21367L16.3985 12.3494L10.2628 18.2105L8.89517 16.7789L13.5992 12.2853Z"/></svg>
                            <svg class="hidden w-4 h-4 hs-accordion-active:block"   xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.1304 12.7362L16.7827 8.18907L18.1666 9.60499L12.0984 15.536L6.16739 9.46773L7.58331 8.08384L12.1304 12.7362Z"/></svg>

                      </button>

                      {{-- Bagian Transisi --}}
                      <div id="hs-basic-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-heading-one">
                              {{-- garis border --}}
                      <hr class="my-5 border-white border-opacity-25" style = "margin-left: 62px; margin-top:10px"/>
                      {{-- Bagian Lihat semua --}}
                      <a href = "{{route ('today') }}">
                  <div style="margin-top: -5px; display: flex; justify-content: flex-end">

                      <div style="padding-bottom: -10px;">
                        <h1 class="mt-16 ml-12 font-bold text-white" style="margin-top: -5px;">Lihat Semua</h1>
                      </div>
                      <div>

                        <svg class="block w-4 h-4 hs-accordion-active:hidden"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.5992 12.2853L9.10566 7.58127L10.5373 6.21367L16.3985 12.3494L10.2628 18.2105L8.89517 16.7789L13.5992 12.2853Z"/></svg>
                        <svg class="hidden w-4 h-4 hs-accordion-active:block"   xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.1304 12.7362L16.7827 8.18907L18.1666 9.60499L12.0984 15.536L6.16739 9.46773L7.58331 8.08384L12.1304 12.7362Z"/></svg>
                      </div>

                    </div>
                </a>
                    {{-- Bagian note --}}
                        <div class="px-6 pb-4">
                            <div style = "margin-top: 5px">
                                <div style = "display:flex;  margin-left: 30px;">
                                    <div class="flex flex-wrap gap-2 card ">

                                        @foreach ($dataToday as $p)
                                        @if ($p->tanggal_deadline == $formatDate && ($p->status != 'done' || $p->status == 'prioritas'))
                                        <x-note :note-id="$p->id" :customBg="$p->warna">
                                        <div data-hs-overlay="" class="w-full h-44 flex flex-col gap-2">
                                            <div class="flex justify-between">

                                                    <div>
                                                        {{-- Kiri --}}
                                                        <form action="{{ route('plChange',$p->id) }}" method="post">
                                                            @csrf
                                                            @method('put')
                                                            <input type="hidden" name="status" value="{{ $p->status }}">
                                                            <button type="submit" onclick="return confirm('Are you sure you want to change?')">
                                                                @if ($p->status == "prioritas")

                                                                <img src="{{asset('assets/icons/pin-white-fill.svg')}}" alt="" class="w-5 h-5">
                                                                @else
                                                                <img src="{{asset('assets/icons/push_pin.svg')}}" alt="" class="w-5 h-5">

                                                                @endif
                                                            </button>
                                                        </form>

                                                    </div>



                                                    <div class="flex gap-2">
                                                        {{-- Kanan --}}
                                                        <a href="{{ url('personal/destroy/'.$p->id) }}" onclick="return confirm('Are you sure you want to delete?')">
                                                            <img src="{{asset('assets/icons/delete.svg')}}" alt="" class="w-5 h-5">
                                                        </a>



                                                        <div>
                                                            <form action="{{ route('done', $p->id) }}" method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <input type="hidden" name="status" value="{{ $p->status }}">
                                                                    <button type="submit" onclick="return confirm('Are you sure you want to done this note ?')">
                                                                        <img src="{{asset("assets/icons/done.svg")}}" alt="" class="w-5 h-5">
                                                                    </button>
                                                                </form>
                                                            </div>
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

                                         {{-- Tambah note --}}
                                         <div id="">
                                            <button data-hs-overlay="#hs-slide-down-animation-modal">
                                            <x-note>
                                                <h1 class=" font-bold text-[50px] text-center mt-7">+</h1>
                                            </x-note>
                                        </button>
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                     </div>
                   </div>

                </div>
                 {{-- Kategori Prioritas --}}
                 <div class="hs-accordion-group">
                    <div class="hs-accordion active" id="hs-basic-heading-one " style="margin-left: -80px">
                        <button class="inline-flex items-center w-full py-3 font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-blue-600 gap-x-3 text-start hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-with-arrow-collapse-one">

                            <h1 class="mt-16 ml-12 font-bold text-white" style = "margin-top : -4px; margin-left:62px" >  Prioritas </h1></a>
                            <svg class="block w-4 h-4 hs-accordion-active:hidden"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.5992 12.2853L9.10566 7.58127L10.5373 6.21367L16.3985 12.3494L10.2628 18.2105L8.89517 16.7789L13.5992 12.2853Z"/></svg>
                            <svg class="hidden w-4 h-4 hs-accordion-active:block"   xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.1304 12.7362L16.7827 8.18907L18.1666 9.60499L12.0984 15.536L6.16739 9.46773L7.58331 8.08384L12.1304 12.7362Z"/></svg>

                      </button>

                      {{-- Bagian Transisi --}}
                      <div id="hs-basic-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-heading-one">
                              {{-- garis border --}}
                      <hr class="my-5 border-white border-opacity-25" style = "margin-left: 62px; margin-top:10px"/>
                      {{-- Bagian Lihat semua --}}
                      <a href = "{{route ('prioritas') }}">
                  <div style="margin-top: -5px; display: flex; justify-content: flex-end">

                      <div style="padding-bottom: -10px;">
                        <h1 class="mt-16 ml-12 font-bold text-white" style="margin-top: -5px;">Lihat Semua</h1>
                      </div>
                      <div>

                        <svg class="block w-4 h-4 hs-accordion-active:hidden"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.5992 12.2853L9.10566 7.58127L10.5373 6.21367L16.3985 12.3494L10.2628 18.2105L8.89517 16.7789L13.5992 12.2853Z"/></svg>
                        <svg class="hidden w-4 h-4 hs-accordion-active:block"   xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.1304 12.7362L16.7827 8.18907L18.1666 9.60499L12.0984 15.536L6.16739 9.46773L7.58331 8.08384L12.1304 12.7362Z"/></svg>
                      </div>

                    </div>
                </a>
                    {{-- Bagian note --}}
                        <div class="px-6 pb-4">
                            <div style = "margin-top: 5px">
                                <div style = "display:flex;  margin-left: 30px;">
                                    <div class="flex flex-wrap gap-2 card ">

                                        @foreach ($data_prioritas as $p)
                                        
                                        <x-note :note-id="$p->id" :customBg="$p->warna">
                                        <div data-hs-overlay="" class="w-full h-44 flex flex-col gap-2">
                                            <div class="flex justify-between">

                                                    <div>
                                                        {{-- Kiri --}}
                                                        <form action="{{ route('plChange',$p->id) }}" method="post">
                                                            @csrf
                                                            @method('put')
                                                            <input type="hidden" name="status" value="{{ $p->status }}">
                                                            <button type="submit" onclick="return confirm('Are you sure you want to change?')">
                                                                @if ($p->status == "prioritas")

                                                                <img src="{{asset('assets/icons/pin-white-fill.svg')}}" alt="" class="w-5 h-5">
                                                                @else
                                                                <img src="{{asset('assets/icons/push_pin.svg')}}" alt="" class="w-5 h-5">

                                                                @endif
                                                            </button>
                                                        </form>

                                                    </div>



                                                    <div class="flex gap-2">
                                                        {{-- Kanan --}}
                                                        <a href="{{ url('personal/destroy/'.$p->id) }}" onclick="return confirm('Are you sure you want to delete?')">
                                                            <img src="{{asset('assets/icons/delete.svg')}}" alt="" class="w-5 h-5">
                                                        </a>



                                                        <div>
                                                            <form action="{{ route('done', $p->id) }}" method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <input type="hidden" name="status" value="{{ $p->status }}">
                                                                    <button type="submit" onclick="return confirm('Are you sure you want to done this note ?')">
                                                                        <img src="{{asset("assets/icons/done.svg")}}" alt="" class="w-5 h-5">
                                                                    </button>
                                                                </form>
                                                            </div>
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
                                        @endforeach

                                         {{-- Tambah note --}}
                                         <div id="">
                                            <button data-hs-overlay="#hs-slide-down-animation-modal">
                                            <x-note>
                                                <h1 class=" font-bold text-[50px] text-center mt-7">+</h1>
                                            </x-note>
                                        </button>
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                     </div>
                   </div>

                </div>
                {{-- Bagian Coming Soon --}}
                <div class="hs-accordion-group">
                    <div class="hs-accordion active" id="hs-basic-heading-one " style="margin-left: -80px">
                        <button class="inline-flex items-center w-full py-3 font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-blue-600 gap-x-3 text-start hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-with-arrow-collapse-one">
                            <h1 class="mt-16 ml-12 font-bold text-white" style = "margin-top : -4px; margin-left:62px" >  Coming Soon </h1></a>
                            <svg class="block w-4 h-4 hs-accordion-active:hidden"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.5992 12.2853L9.10566 7.58127L10.5373 6.21367L16.3985 12.3494L10.2628 18.2105L8.89517 16.7789L13.5992 12.2853Z"/></svg>
                            <svg class="hidden w-4 h-4 hs-accordion-active:block"   xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.1304 12.7362L16.7827 8.18907L18.1666 9.60499L12.0984 15.536L6.16739 9.46773L7.58331 8.08384L12.1304 12.7362Z"/></svg>
                      </button>

                      {{-- Bagian Transisi --}}
                      <div id="hs-basic-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-heading-one">
                           {{-- garis border --}}
                           <hr class="my-5 border-white border-opacity-25" style = "margin-left: 62px; margin-top:10px"/>
                          {{-- Bagian Lihat semua --}}
                          <a href = "{{route ('comingsoon') }}">
                      <div style="margin-top: -5px; display: flex; justify-content: flex-end">
                          <div style="padding-bottom: -10px;">
                              <h1 class="mt-16 ml-12 font-bold text-white" style="margin-top: -5px;">Lihat Semua</h1>
                          </div>
                          <div>
                            <svg class="block w-4 h-4 hs-accordion-active:hidden"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.5992 12.2853L9.10566 7.58127L10.5373 6.21367L16.3985 12.3494L10.2628 18.2105L8.89517 16.7789L13.5992 12.2853Z"/></svg>
                            <svg class="hidden w-4 h-4 hs-accordion-active:block"   xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.1304 12.7362L16.7827 8.18907L18.1666 9.60499L12.0984 15.536L6.16739 9.46773L7.58331 8.08384L12.1304 12.7362Z"/></svg>
                          </div>
                        </div>
                          </a>
                        {{-- Bagian note --}}
                        <div class="px-6 pb-4">
                            <div style = "margin-top: 5px">
                                <div style = "display:flex;  margin-left: 30px;">
                                    <div class="flex flex-wrap gap-2 card ">


                                         {{-- Tambah note --}}

                                        @foreach ($dataComingSoon as $p)
                                        <x-note :note-id="$p->id" :customBg="$p->warna">
                                        <div data-hs-overlay="" class="w-full h-44 flex flex-col gap-2">
                                            <div class="flex justify-between">

                                                <div>
                                                    {{-- Kiri --}}
                                                    <form action="{{ route('plChange',$p->id) }}" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <input type="hidden" name="status" value="{{ $p->status }}">
                                                        <button type="submit" onclick="return confirm('Are you sure you want to change?')">
                                                            @if ($p->status == "prioritas")

                                                            <img src="{{asset('assets/icons/pin-white-fill.svg')}}" alt="" class="w-5 h-5">
                                                            @else
                                                            <img src="{{asset('assets/icons/push_pin.svg')}}" alt="" class="w-5 h-5">

                                                            @endif
                                                        </button>
                                                    </form>

                                                </div>



                                                    <div class="flex gap-2">
                                                        {{-- Kanan --}}
                                                        <a href="{{ url('personal/destroy/'.$p->id) }}" onclick="return confirm('Are you sure you want to delete?')">
                                                            <img src="{{asset('assets/icons/delete.svg')}}" alt="" class="w-5 h-5">
                                                        </a>


                                                        <div>
                                                            <form action="{{ route('done', $p->id) }}" method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <input type="hidden" name="status" value="{{ $p->status }}">
                                                                    <button type="submit" onclick="return confirm('Are you sure you want to done this note ?')">
                                                                        <img src="{{asset("assets/icons/done.svg")}}" alt="" class="w-5 h-5">
                                                                    </button>
                                                                </form>
                                                            </div>
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
                                        @endforeach

                                     </div>
                                </div>
                            </div>
                        </div>
                     </div>
                   </div>

                </div>
                </div>
        
            {{-- Tab Done --}}

            <div id="basic-tabs-2" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-2">
                {{-- Kategori Done --}}
                <div class="hs-accordion-group">
                    <div class="hs-accordion active" id="hs-basic-heading-one " style="margin-left: -80px">
                        <button class="inline-flex items-center w-full py-3 font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-blue-600 gap-x-3 text-start hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-with-arrow-collapse-one">
                            <h1 class="mt-16 ml-12 font-bold text-white" style = "margin-top : -4px; margin-left:62px" >  Done </h1></a>
                            <svg class="block w-4 h-4 hs-accordion-active:hidden"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.5992 12.2853L9.10566 7.58127L10.5373 6.21367L16.3985 12.3494L10.2628 18.2105L8.89517 16.7789L13.5992 12.2853Z"/></svg>
                            <svg class="hidden w-4 h-4 hs-accordion-active:block"   xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.1304 12.7362L16.7827 8.18907L18.1666 9.60499L12.0984 15.536L6.16739 9.46773L7.58331 8.08384L12.1304 12.7362Z"/></svg>

                      </button>

                       {{-- Bagian Transisi --}}

                      <div id="hs-basic-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-heading-one">
                              {{-- garis border --}}
                              <hr class="my-5 border-white border-opacity-25" style = "margin-left: 62px; margin-top:10px"/>
                      {{-- Bagian Lihat semua --}}
                      <a href = "{{route ('todaylihatsemua') }}">
                  <div style="margin-top: -5px; display: flex; justify-content: flex-end">
                      <div style="padding-bottom: -10px;">
                        <h1 class="mt-16 ml-12 font-bold text-white" style="margin-top: -5px;">Lihat Semua</h1>

                      </div>
                      <div>
                        <svg class="block w-4 h-4 hs-accordion-active:hidden"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.5992 12.2853L9.10566 7.58127L10.5373 6.21367L16.3985 12.3494L10.2628 18.2105L8.89517 16.7789L13.5992 12.2853Z"/></svg>
                        <svg class="hidden w-4 h-4 hs-accordion-active:block"   xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.1304 12.7362L16.7827 8.18907L18.1666 9.60499L12.0984 15.536L6.16739 9.46773L7.58331 8.08384L12.1304 12.7362Z"/></svg>
                      </div>
                    </div>
                      </a>
                    {{-- Bagian note --}}
                        <div class="px-6 pb-4">
                            <div style = "margin-top: 5px">
                                <div style = "display:flex;  margin-left: 30px;">
                                    <div class="flex flex-wrap gap-2 card ">

                                        @for ($i =0; $i<3; $i++)
                                        <x-note>

                                            <div class="flex -ml-1 ">
                                                <img
                                                id="untukPin"
                                                src="{{asset('assets/icons/push_pin.svg')}}"
                                                class="w-10 h-5 pl-0 pr-3 mr-16 cursor-pointer"
                                                alt=""
                                                />

                                                {{-- Ada Button --}}
                                                <button data-hs-overlay="#hs-slide-down-animation-modal3">
                                               <img
                                               id="buatHapus"
                                               src="{{asset('assets/icons/delete.svg')}}"
                                               class="pt-0 pl-4 cursor-pointer "
                                               alt=""
                                               />
                                                </button>

                                                <button data-hs-overlay="#hs-slide-down-animation-modal4">
                                               <img
                                               id="untukKeluar"
                                               src="{{asset('assets/icons/check_fig.svg')}}"
                                               class="w-4 h-5 pt-0 cursor-pointer"
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
                            </div>
                        </div>
                     </div>
                   </div>

                </div>
                {{-- Kategori Kadaluwarsa--}}
                <div class="hs-accordion-group">
                    <div class="hs-accordion active" id="hs-basic-heading-one " style="margin-left: -80px">
                        <button class="inline-flex items-center w-full py-3 font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-blue-600 gap-x-3 text-start hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400" aria-controls="hs-basic-with-arrow-collapse-one">

                            <h1 class="mt-16 ml-12 font-bold text-white" style = "margin-top : -4px; margin-left:62px" >  Kadaluwarsa </h1></a>
                            <svg class="block w-4 h-4 hs-accordion-active:hidden"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.5992 12.2853L9.10566 7.58127L10.5373 6.21367L16.3985 12.3494L10.2628 18.2105L8.89517 16.7789L13.5992 12.2853Z"/></svg>
                            <svg class="hidden w-4 h-4 hs-accordion-active:block"   xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.1304 12.7362L16.7827 8.18907L18.1666 9.60499L12.0984 15.536L6.16739 9.46773L7.58331 8.08384L12.1304 12.7362Z"/></svg>
                      </button>
                      {{-- Bagian Transisi --}}
                      <div id="hs-basic-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-heading-one">


                      {{-- garis border --}}
                      <hr class="my-5 border-white border-opacity-25" style = "margin-left: 62px; margin-top:10px"/>


                        {{-- Bagian Lihat semua --}}
                        <a href = "{{route ('todaylihatsemua') }}">
                      <div style="margin-top: -5px; display: flex; justify-content: flex-end">
                          <div style="padding-bottom: -10px;">
                              <h1 class="mt-16 ml-12 font-bold text-white" style="margin-top: -4px;">Lihat Semua</h1>
                          </div>
                          <div>
                            <svg class="block w-4 h-4 hs-accordion-active:hidden"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.5992 12.2853L9.10566 7.58127L10.5373 6.21367L16.3985 12.3494L10.2628 18.2105L8.89517 16.7789L13.5992 12.2853Z"/></svg>
                            <svg class="hidden w-4 h-4 hs-accordion-active:block"   xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.1304 12.7362L16.7827 8.18907L18.1666 9.60499L12.0984 15.536L6.16739 9.46773L7.58331 8.08384L12.1304 12.7362Z"/></svg>
                          </div>
                        </div>
                        </a>
                        {{-- Bagian note --}}
                        <div class="px-6 pb-4">
                            <div style = "margin-top: 5px">
                                <div style = "display:flex;  margin-left: 30px;">
                                    <div class="flex flex-wrap gap-2 card ">

                                        @for ($i =0; $i<3; $i++)
                                        <x-note>

                                            <div class="flex -ml-1 ">
                                                <img
                                                id="untukPin"
                                                src="{{asset('assets/icons/push_pin.svg')}}"
                                                class="w-10 h-5 pl-0 pr-3 mr-16 cursor-pointer"
                                                alt=""
                                                />

                                                {{-- Ada Button --}}
                                                <button data-hs-overlay="#hs-slide-down-animation-modal3">
                                               <img
                                               id="buatHapus"
                                               src="{{asset('assets/icons/delete.svg')}}"
                                               class="pt-0 pl-4 cursor-pointer "
                                               alt=""
                                               />
                                                </button>

                                                <button data-hs-overlay="#hs-slide-down-animation-modal4">
                                               <img
                                               id="untukKeluar"
                                               src="{{asset('assets/icons/check_fig.svg')}}"
                                               class="w-4 h-5 pt-0 cursor-pointer"
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

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const buttons = document.querySelectorAll('#buatHapus, #untukKeluar');

                    buttons.forEach(button => {
                        button.addEventListener('click', function(event) {
                            // Mencegah event default
                            event.preventDefault();

                            // Mencegah event penyebaran (event propagation)
                            event.stopPropagation();
                        });
                    });
                });
            </script>



@endsection



