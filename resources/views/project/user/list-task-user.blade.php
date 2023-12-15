@extends('layout.app')

@section('content')

    <div class="mb-10">
   <a href="{{ route('project') }}" class="font-bold hover:underline">Home</a> <span>/</span> <a href="{{ route('detail-project') }}" class="font-bold hover:underline">Dashboard</a> <span>/</span> <span class="font-bold">List</span>
    </div>

    @for ($a = 0; $a < 5; $a++)
    <x-accordion-list-project>
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 font-poppin">
            <thead class="bg-gray-50 dark:bg-gray-700">
              <tr>
                <th scope="col" class="th">Task Name</th>
                <th  class="th overflow-hidden overflow-ellipsis">Description</th>
                <th scope="col" class="th">Status</th>
                <th scope="col" class="th">Date</th>
                <th scope="col" class="th">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @for ($i = 0; $i < 3; $i++)
              <tr>
                <td class="td dark:text-gray-200">qwerty</td>
                <td class="td max-w-[300px] overflow-hidden overflow-ellipsis">
                  <div class="whitespace-normal break-words text-justify">
                    <!-- Isi deskripsi disini -->
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur modi veniam deserunt natus. Architecto a, quisquam commodi ut cumque reprehenderit mollitia tempora exercitationem est dolore, omnis sunt? Quidem, modi quod?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur modi veniam deserunt natus. Architecto a, quisquam commodi ut cumque reprehenderit mollitia tempora exercitationem est dolore, omnis sunt? Quidem, modi quod?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur modi veniam deserunt natus. Architecto a, quisquam commodi ut cumque reprehenderit mollitia tempora exercitationem est dolore, omnis sunt? Quidem, modi quod?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur modi veniam deserunt natus. Architecto a, quisquam commodi ut cumque reprehenderit mollitia tempora exercitationem est dolore, omnis sunt? Quidem, modi quod?
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore dolorem perspiciatis labore sunt quae ab, rem sed doloribus nihil voluptatum eligendi cumque aliquam excepturi! Laudantium ipsa officia sequi ad dolorum.</td>
                </div>
                <td class="td">qwerty</td>
                <td class="td">qwerty</td>
                <td class="td">
                    <form>
                        <div class="flex flex-col gap-2">
                            <input type="file" name="file-input" id="file-input" class="block w-2/3 border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600
                            file:bg-bla-50 file:border-0
                            file:bg-gray-100 file:me-4
                            file:py-1 file:px-1
                            dark:file:bg-gray-700 dark:file:text-gray-400">
                            <button class="px-1 flex justify-center gap-4 w-2/3 py-1 rounded-md bg-Request"><img src="{{ asset('assets/icons/ceklis.png') }}" alt="" srcset="">Request</button>
                        </div>
                            </form>
                </td>
              </tr>
              @endfor
            </tbody>
          </table>
    </x-accordion-list-project>

    @endfor

@endsection

