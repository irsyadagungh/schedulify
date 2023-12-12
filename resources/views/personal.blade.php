@extends('layout.app')


@section('content')

    <h1 style = "font-size : 20px"> <b>My task</b></h1>
    <nav class="bg-gray-800" style = "margin-left : -70px;">

        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!-- Mobile menu button-->
              <button type="button" class="relative inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <svg class="block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg class="hidden w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>

            <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
              <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4"  style = "">
                  <a href="#" class="px-3 py-2 text-sm font-medium #767678 bg-gray-900 rounded-md" aria-current="page">To Do</a>
                  <a href="{{ __('Home') }}" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Done</a>
                </div>
              </div>
            </div>
              </div>

                <hr class="my-4 border-white border-opacity-25" style = "margin-left: 30px; margin-top:-10px"/>

                <div style = "margin-top: 20px">
                    <div style = "display:flex;  padding-bottom: 10px">
                        <a href = "{{ __('personaltoday') }}">
                            <h1 class="mt-16 ml-12 font-bold text-white" style = "margin-top : -5px;">  Today </h1></a>

                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none" style="margin: -3px; margin-left: -2px;">
                              <path d="M13.6001 12.0121L9.00452 7.40769L10.4059 6.00903L16.4001 12.0148L10.3944 18.009L8.99573 16.6077L13.6001 12.0121Z" fill="white"/>
                              </svg>
                    </div>

                </div>
                <div style = "margin-top: -10px">
                  <div style = "display:flex;  padding-bottom: 10px">
                    <a href = "{{ __('personaltoday') }}">
                    <div style = "display:flex;  padding-bottom: 15px">
                        <h1 class="mt-16 ml-12 text-white" style = "margin-top : 20px;"> <b> Prioritas <b> </h1>

                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none" style="margin: 20px; margin-left: -2px;">
                                <path d="M13.6001 12.0121L9.00452 7.40769L10.4059 6.00903L16.4001 12.0148L10.3944 18.009L8.99573 16.6077L13.6001 12.0121Z" fill="white"/>
                                </svg>
                    </div>

                    <div style = "margin-top: -5px">
                        <div style = "display:flex;  padding-bottom: -10px">
                            <h1 class="mt-16 ml-12 text-white" style = "margin-top : -5px;"> <b> Coming soon <b> </h1>

                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none" style="margin: -5px; margin-left: -2px;">
                                    <path d="M13.6001 12.0121L9.00452 7.40769L10.4059 6.00903L16.4001 12.0148L10.3944 18.009L8.99573 16.6077L13.6001 12.0121Z" fill="white"/>
                                    </svg>
                        </div>

                    <hr class="my-5 border-white border-opacity-25" style = "margin-left: 30px; margin-top:10px"/>


                    </div>
                  </div>
                  </div>






    </div>
    </nav>









        <!-- Mobile menu, show/hide based on menu state. -->


@endsection
