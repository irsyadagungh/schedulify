<div id="hs-basic-modal" class="hs-overlay hs-overlay-backdrop-open:bg-secondary hs-overlay-backdrop-open:bg-opacity-50 hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto">
    <div class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
      <div class="flex flex-col bg-card  shadow-sm rounded-xl">
        <div class="flex justify-between items-center py-3 px-4 border-b border-card dark:border-gray-700">

            {{-- Header --}}
          <h3 class="font-bold text-gray-800">
            Modal title
          </h3>
          <button type="button" class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-basic-modal">
            <span class="sr-only">Close</span>
            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          </button>
        </div>

        {{-- Form Input --}}
        <div class="p-4 overflow-y-auto">
         <form action="">
            {{-- Task Name --}}
            <div id="task-name" class="flex flex-col">
                <label for="">Task Name</label>
                <input type="text" class="w-full fill-none bg-transparent border border-ternary p-1 rounded-md">
            </div>

            {{-- Description --}}
            <div id="description" class="flex flex-col">
                <label for="">Description</label>
                <textarea type="text" rows="10" class="w-full resize-none fill-none bg-transparent border border-ternary p-1 rounded-md"></textarea>
            </div>

            {{-- Dropdown Assignee --}}
            <div id="assignee" class="flex flex-col">
                <label for="">Assignee</label>
                <x-dropdown-assignee>
                    <option value="">Choose</option>
                    {{-- @foreach ( as ) --}}
                    <option value="Name">Name</option>
                    {{-- @endforeach --}}
                </x-dropdown-assignee>
            </div>

            {{-- Start Date --}}
            <div id="start-date" class="flex flex-col">
                <label for="">Start Date</label>
                <input type="date" class="w-full fill-none bg-transparent border border-ternary p-1 rounded-md">
            </div>

            {{-- End Date --}}
            <div id="end-date" class="flex flex-col">
                <label for="">End Date</label>
                <input type="date" class="w-full fill-none bg-transparent border border-ternary p-1 rounded-md">
            </div>
         </form>
        </div>
        {{-- End Form --}}

        {{-- Button --}}
        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-ternary dark:border-gray-700">
          <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg  bg-ternary text-gray-800 shadow-sm hover:bg-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 " data-hs-overlay="#hs-basic-modal">
            Close
          </button>
          <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-ternary bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
            Save changes
          </a>
        </div>
      </div>
    </div>
  </div>
