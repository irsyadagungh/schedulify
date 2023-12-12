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
                  <a href="{{ __('Home') }}" class="py-2 text-sm font-medium text-gray-300 rounded-md px 5 hover:bg-gray-700 hover:text-white">Done</a>
                </div>
              </div>
            </div>
              </div>

                <hr class="my-4 border-white border-opacity-25" style = "margin-left: 30px; margin-top:-10px"/>

                <div style = "margin-top: 20px">
                    <div style = "display:flex;  padding-bottom: 15px">
                        <h1 class="mt-16 ml-12 text-white" style = "margin-top : -3px;"> <b> Today <b> </h1>

                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M12.9979 13.6L17.6127 9.01484L19.0082 10.4193L12.9889 16.4L7.00825 10.3807L8.41275 8.98522L12.9979 13.6Z" fill="white" />
                            </svg>
                    </div>
                    <hr class="my-4 border-white border-opacity-25" style = "margin-left: 30px; margin-top:-10px"/>
                </div>

                <div class="flex mt-4 ml-1 ">
                    <div class="text-white bg-[#643333] h-[180px] w-[170px]  rounded-xl" style="margin-left: 25px; margin-top: 30px">
                        <div class="flex">

                            <div class="inline">
                                <div class = "ikon gabungan" style = "display:flex; margin-left:10px; margin-top:10px">

                                   <div class = "ikon1" style ="display:flex; ">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style = " margin-right:10px">
                                          <mask id="mask0_118_357" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                          <rect width="24" height="24" fill="#D9D9D9"/>
                                          </mask>
                                          <g mask="url(#mask0_118_357)">
                                          <path d="M16 12L18 14V16H13V22L12 23L11 22V16H6V14L8 12V5H7V3H17V5H16V12ZM8.85 14H15.15L14 12.85V5H10V12.85L8.85 14Z" fill="white"/>
                                          </g>
                                      </svg>

                                   </div>

                                   <div class = "ikon2"style ="display:flex; margin-left:80px; margin-top:-15px   ">
                                      <img
                                      id="buatHapus"
                                      src="{{asset('assets/icons/delete.svg')}}"
                                      class="pt-3 pl-1 cursor-pointer"
                                      alt=""
                                      />
                                      <img
                                      id="untukKeluar"
                                      src="{{asset('assets/icons/check-circle.svg')}}"
                                      class="w-4 pt-3 pl-0 cursor-pointer"
                                      alt=""
                                      />
                                  </div>

                                  </div>


                                  <h2 class="text-[14px] w-[130px] pt-3 pl-3">Tubes PBO</h2>
                            </div>

                        </div>
                        <p class="text-[10px] pl-3 pt-2 pr-3 pb-3 opacity-95">
                          Lorem, ipsum dolor sit amet consectetur adipisicing elit. A id
                          soluta numquam blanditiis harum laboriosam adipisci.
                        </p>



                      </div>

                      <div class="text-white bg-[#2C3748] h-[180px] w-[170px]  rounded-xl" style="margin-left: 25px; margin-top: 30px">
                        <div class="flex">

                            <div class="inline">
                                <div class = "ikon gabungan" style = "display:flex; margin-left:10px; margin-top:10px">

                                   <div class = "ikon1" style ="display:flex; ">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style = " margin-right:10px">
                                          <mask id="mask0_118_357" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                          <rect width="24" height="24" fill="#D9D9D9"/>
                                          </mask>
                                          <g mask="url(#mask0_118_357)">
                                          <path d="M16 12L18 14V16H13V22L12 23L11 22V16H6V14L8 12V5H7V3H17V5H16V12ZM8.85 14H15.15L14 12.85V5H10V12.85L8.85 14Z" fill="white"/>
                                          </g>
                                      </svg>

                                   </div>

                                   <div class = "ikon2"style ="display:flex; margin-left:80px; margin-top:-15px   ">
                                      <img
                                      id="buatHapus"
                                      src="{{asset('assets/icons/delete.svg')}}"
                                      class="pt-3 pl-1 cursor-pointer"
                                      alt=""
                                      />
                                      <img
                                      id="untukKeluar"
                                      src="{{asset('assets/icons/check-circle.svg')}}"
                                      class="w-4 pt-3 pl-0 cursor-pointer"
                                      alt=""
                                      />
                                  </div>

                                  </div>


                                  <h2 class="text-[14px] w-[130px] pt-3 pl-3">Tubes DPL</h2>
                            </div>

                        </div>
                        <p class="text-[10px] pl-3 pt-2 pr-3 pb-3 opacity-95">
                          Lorem, ipsum dolor sit amet consectetur adipisicing elit. A id
                          soluta numquam blanditiis harum laboriosam adipisci.
                        </p>
                      </div>

                      <div class="text-white bg-[#466433] h-[180px] w-[170px]  rounded-xl" style="margin-left: 25px; margin-top: 30px">

                        <div class="flex">

                            <div class="inline">
                                <div class = "ikon gabungan" style = "display:flex; margin-left:10px; margin-top:10px">

                                   <div class = "ikon1" style ="display:flex; ">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style = " margin-right:10px">
                                          <mask id="mask0_118_357" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                          <rect width="24" height="24" fill="#D9D9D9"/>
                                          </mask>
                                          <g mask="url(#mask0_118_357)">
                                          <path d="M16 12L18 14V16H13V22L12 23L11 22V16H6V14L8 12V5H7V3H17V5H16V12ZM8.85 14H15.15L14 12.85V5H10V12.85L8.85 14Z" fill="white"/>
                                          </g>
                                      </svg>

                                   </div>

                                   <div class = "ikon2"style ="display:flex; margin-left:80px; margin-top:-15px   ">
                                      <img
                                      id="buatHapus"
                                      src="{{asset('assets/icons/delete.svg')}}"
                                      class="pt-3 pl-1 cursor-pointer"
                                      alt=""
                                      />
                                      <img
                                      id="untukKeluar"
                                      src="{{asset('assets/icons/check-circle.svg')}}"
                                      class="w-4 pt-3 pl-0 cursor-pointer"
                                      alt=""
                                      />
                                  </div>

                                  </div>


                                  <h2 class="text-[14px] w-[130px] pt-3 pl-3">Tubes PBW</h2>
                            </div>

                        </div>
                        <p class="text-[10px] pl-3 pt-2 pr-3 pb-3 opacity-95">
                          Lorem, ipsum dolor sit amet consectetur adipisicing elit. A id
                          soluta numquam blanditiis harum laboriosam adipisci.
                        </p>
                      </div>
                      <div class="text-white bg-[#222228] h-[180px] w-[170px]  rounded-xl" style="margin-left: 25px; margin-top: 30px">
                      </div>

                    </div>
                  </div>
                  <div style = "margin-top: 20px">
                    <div style = "display:flex;  padding-bottom: 15px">
                        <h1 class="mt-16 ml-12 text-white" style = "margin-top : 20px;"> <b> Prioritas <b> </h1>

                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none" style="margin: 20px; margin-left: 25px;">
                                <path d="M13.6001 12.0121L9.00452 7.40769L10.4059 6.00903L16.4001 12.0148L10.3944 18.009L8.99573 16.6077L13.6001 12.0121Z" fill="white"/>
                                </svg>
                    </div>

                    <div style = "margin-top: -5px">
                        <div style = "display:flex;  padding-bottom: -10px">
                            <h1 class="mt-16 ml-12 text-white" style = "margin-top : -5px;"> <b> Coming soon <b> </h1>

                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none" style="margin: -5px; margin-left: 25px;">
                                    <path d="M13.6001 12.0121L9.00452 7.40769L10.4059 6.00903L16.4001 12.0148L10.3944 18.009L8.99573 16.6077L13.6001 12.0121Z" fill="white"/>
                                    </svg>
                        </div>
                </div>
    </div>
    </nav>


@endsection
