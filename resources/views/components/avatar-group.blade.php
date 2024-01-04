<div id="hs-slide-down-animation-modal" class="hs-overlay-backdrop-open:bg-black hs-overlay-backdrop-open:bg-opacity-25 hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div class="hs-overlay-open:mt-40 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
        <div class="flex flex-col bg-card  shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 ">
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                <h3 class="font-bold text-gray-800">
                    Project Contributors
                </h3>
                <button type="button" class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-slide-down-animation-modal">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
            </div>
            <div class="p-4 overflow-y-auto flex flex-col gap-4">
                    <div class="flex justify-between items-center">
                        @foreach ($member as $member)

                        <div class="flex gap-4">
                            <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="">
                            <div class="flex flex-col">
                                @if ($member->user)

                                    <p>{{ $member->user->username }}</p>
                                    <p class="opacity-50">{{ $member->user->email }}</p>
                                @else
                                    <!-- Handle the case where the user relationship is not available -->
                                    <p>Unknown User</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach

            </div>
        </div>
    </div>
</div>
