@extends('layout.app')

@section('content')
<style>
    .ProseMirror:focus {
      outline: none;
    }

    .tiptap ul p,
    .tiptap ol p {
      display: inline;
    }

    .tiptap p.is-editor-empty:first-child::before {
      font-size: 14px;
      content: attr(data-placeholder);
      float: left;
      height: 0;
      pointer-events: none;
    }

    label input[type="radio"]:checked ~ .icon-box{
      border: 2px solid white;
    }



  </style>

    <div>
        {{-- Start Form --}}
    <form action="{{route('plUpdate', $data->id)}}" method="POST">
        @csrf
        @method('put')
      <div class="flex justify-between items-center py-3 px-4 border-ternary border-b dark:border-gray-700">

        <input hidden name="id_user" value="{{$data -> id_user}}" class="bg-transparent focus:outline-none w-fit font-poppin" type="text" placeholder="Title">

        @php
            // dd($data);
        @endphp
        {{-- Title --}}
        <input name="judul"  value="{{$data -> judul}}" class="bg-transparent focus:outline-none w-fit font-poppin" type="text" placeholder="Title">

        {{-- Button Close --}}
        <button id="save-button" type="submit" class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-slide-down-animation-modal">
          <span class="sr-only">Close</span>
          <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
      </div>
      <div class="p-4 overflow-y-auto">

        {{-- Text Editor --}}
        <div class=" rounded-lg overflow-hidden">
          <div id="hs-editor-tiptap" class="font-poppin font-light">
            <div class="flex justify-between border rounded-xl border-ternary mb-4 p-2 dark:border-gray-700">
              <button class="w-8 h-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" type="button" data-hs-editor-bold>
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 12a4 4 0 0 0 0-8H6v8"/><path d="M15 20a4 4 0 0 0 0-8H6v8Z"/></svg>
              </button>
              <button class="w-8 h-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" type="button" data-hs-editor-italic>
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" x2="10" y1="4" y2="4"/><line x1="14" x2="5" y1="20" y2="20"/><line x1="15" x2="9" y1="4" y2="20"/></svg>
              </button>
              <button class="w-8 h-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" type="button" data-hs-editor-underline>
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 4v6a6 6 0 0 0 12 0V4"/><line x1="4" x2="20" y1="20" y2="20"/></svg>
              </button>
              <button class="w-8 h-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" type="button" data-hs-editor-strike>
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4H9a3 3 0 0 0-2.83 4"/><path d="M14 12a4 4 0 0 1 0 8H6"/><line x1="4" x2="20" y1="12" y2="12"/></svg>
              </button>
              <button class="w-8 h-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" type="button" data-hs-editor-link>
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
              </button>
              <button class="w-8 h-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" type="button" data-hs-editor-ol>
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="10" x2="21" y1="6" y2="6"/><line x1="10" x2="21" y1="12" y2="12"/><line x1="10" x2="21" y1="18" y2="18"/><path d="M4 6h1v4"/><path d="M4 10h2"/><path d="M6 18H4c0-1 2-2 2-3s-1-1.5-2-1"/></svg>
              </button>
              <button class="w-8 h-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" type="button" data-hs-editor-ul>
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" x2="21" y1="6" y2="6"/><line x1="8" x2="21" y1="12" y2="12"/><line x1="8" x2="21" y1="18" y2="18"/><line x1="3" x2="3.01" y1="6" y2="6"/><line x1="3" x2="3.01" y1="12" y2="12"/><line x1="3" x2="3.01" y1="18" y2="18"/></svg>
              </button>
              <button class="w-8 h-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" type="button" data-hs-editor-blockquote>
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 6H3"/><path d="M21 12H8"/><path d="M21 18H8"/><path d="M3 12v6"/></svg>
              </button>
              <button class="w-8 h-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" type="button" data-hs-editor-code>
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 16 4-4-4-4"/><path d="m6 8-4 4 4 4"/><path d="m14.5 4-5 16"/></svg>
              </button>
            </div>

            <script>
                // Set initial content for Tiptap editor
                const initialContent = {!! json_encode($data->deskripsi) !!};
            </script>

            <div id="hs-editor-tiptap" class="font-poppin font-light h-full">
                <!-- Other Tiptap setup code here -->

                <!-- The editable content area -->
                <div data-hs-editor-field class="h-96 overflow-y-scroll"></div>

                <!-- Hidden input to store the editor content -->
                <textarea type="texta" name="deskripsi" id="editor-content" hidden></textarea>

                <script>
                    // Event listener for the save button
                    const saveButton = document.getElementById('save-button');
                    saveButton.addEventListener('click', () => {
                        // Get the content from the Tiptap editor
                        const editorContent = editor.getHTML();

                        // Update the hidden textarea with the editor content
                        document.getElementById('editor-content').value = editorContent;
                    });
                </script>
            </div>
        </div>
        </div>
        {{-- End Text Editor --}}

      </div>
      <div class="flex justify-between items-center gap-x-2 py-3 px-4 border-ternary border-t dark:border-gray-700">

        {{-- Tanggal --}}
        <div class="flex gap-2">
          <label for="">Tenggat</label>
          <input type="date" value="{{$data -> tanggal_deadline}}" name="tanggal_deadline" id="" class="bg-transparent border border-ternary rounded-md px-2">
        </div>

        {{-- Warna --}}
        <div class="flex gap-4">
            <label for="">Pilih Warna</label>
            <div class="flex gap-1">
                <label for="red">
                    <input type="radio" name="warna" id="red" value="#643333" class="absolute opacity-0 w-7 h-7" {{$data->warna == '#643333' ? 'checked' : ''}}>
                    <div class="icon-box bg-red w-7 h-7 rounded-md"></div>
                </label>

                <label for="green">
                    <input type="radio" name="warna" id="green" value="#466433" class="absolute opacity-0 w-7 h-7" {{$data->warna == '#466433' ? 'checked' : ''}}>
                    <div class="icon-box bg-green w-7 h-7 rounded-md"></div>
                </label>

                <label for="yellow">
                    <input type="radio" name="warna" id="yellow" value="#645C33" class="absolute opacity-0 w-7 h-7" {{$data->warna == '#645C33' ? 'checked' : ''}}>
                    <div class="icon-box bg-yellow w-7 h-7 rounded-md"></div>
                </label>

                {{-- Warna buat reset ke warna asal gara" gatau cara unchecked radio button :v --}}
                <label for="reset">
                    <input type="radio" name="warna" id="reset" value="#222228" class="absolute opacity-0 w-7 h-7" {{$data->warna == '#222228' ? 'checked' : ''}}>
                    <div class="icon-box bg-ternary w-7 h-7 rounded-md"></div>
                </label>
            </div>
        </div>

        </div>
      </div>
    </form>
    {{-- End Form --}}
    </div>

@endsection
