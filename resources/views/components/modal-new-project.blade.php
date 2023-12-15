<div id="hs-vertically-centered-modal2" class="hs-overlay hs-overlay-backdrop-open:bg-secondary hs-overlay-backdrop-open:bg-opacity-50 hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto">
    <div class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto mt-40">
      <div class="flex flex-col bg-card  shadow-sm rounded-xl">
        <div class="flex justify-center items-center py-3 px-4 border-b border-card dark:border-gray-700">

            <div class="flex bg-gray-100 hover:bg-gray-200 rounded-lg transition p-1 dark:bg-gray-700 dark:hover:bg-gray-600">
                <nav class="flex -space-x-4" aria-label="Tabs" role="tablist">
                  <button type="button" class="tab-btn hs-tab-active:bg-ternary bg-join hs-tab-active:text-gray-700 hs-tab-active:dark:bg-gray-800 hs-tab-active:dark:text-gray-400 dark:hs-tab-active:bg-gray-800 py-2 px-8 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 font-medium rounded-lg hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:text-white active" id="segment-item-1" data-hs-tab="#segment-1" aria-controls="segment-1" role="tab">
                    Create
                  </button>
                  <button type="button" class="tab-btn hs-tab-active:bg-ternary bg-join hs-tab-active:text-gray-700 hs-tab-active:dark:bg-gray-800 hs-tab-active:dark:text-gray-400 dark:hs-tab-active:bg-gray-800 py-2 px-10 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 font-medium rounded-lg hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:text-white dark:hover:text-gray-300" id="segment-item-2" data-hs-tab="#segment-2" aria-controls="segment-2" role="tab">
                    Join
                  </button>
                </nav>
              </div>
            </div>
            <div class="p-4 overflow-y-auto">
              <div id="segment-1" class="tab-content">
                <div id="task-name" class="flex flex-col gap-2">
                    <label for="">Task Name</label>
                    <input type="text" class="w-full fill-none bg-transparent border border-ternary p-1 rounded-md">
                </div>

                <div id="description" class="flex flex-col">
                    <label for="">Description</label>
                    <textarea type="text" rows="10" class="w-full resize-none fill-none bg-transparent border border-ternary p-1 rounded-md"></textarea>
                </div>

                <div class="flex justify-center items-center gap-x-2 py-3 px-4 ">
                    <button type="button" class="py-1 px-20 inline-flex items-center gap-x-2 text-sm rounded-md bg-ternary text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-vertically-centered-modal2">
                      Submit
                    </button>
                  </div>

              </div>
              <div id="segment-2" class="tab-content hidden">
                <div id="task-name" class="flex flex-col gap-2">
                    <label for="">Input the code</label>
                    <input type="text" class="w-full fill-none bg-transparent border border-ternary p-1 rounded-md">
                </div>

                <div class="flex justify-center items-center gap-x-2 py-5 px-4 ">
                    <button type="button" class="py-1 px-10 inline-flex items-center gap-x-2 text-sm rounded-md bg-ternary text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-vertically-centered-modal2">
                      Join
                    </button>
                  </div>
              </div>
            </div>

      </div>
    </div>
  </div>
