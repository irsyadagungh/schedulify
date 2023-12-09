@extends('layout.app')

@section('content')

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
                    <button class="px-4 rounded-sm bg-reject">Reject</button>
                    <button class="px-4 rounded-sm bg-done">Done</button>
                </td>
                
              </tr>
              @endfor
            </tbody>
          </table>
    </x-accordion-list-project>
        
    @endfor

@endsection