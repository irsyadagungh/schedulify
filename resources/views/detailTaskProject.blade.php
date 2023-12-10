@extends('layout.app')

@section('content')

@for ($i = 0; $i < 3; $i++)
<x-accordion-list-project>
    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
        <thead class="bg-gray-50 dark:bg-gray-700">
          <tr>
            <th scope="col" class="th">Task Name</th>
            <th scope="col" class="th">Description</th>
            <th scope="col" class="th">Status</th>
            <th scope="col" class="th">Date</th>
            <th scope="col" class="th">Penanggung Jawab</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            {{-- @foreach ($users as $user) --}}
          <tr>
            <td class="td dark:text-gray-200">qwerty</td>
            <td class="td">Task 1</td>
            <td class="td">qwerty</td>
            <td class="td">qwerty</td>
            <td class="td">
                Martin Rahman Hakim
            </td>

          </tr>
          {{-- @endforeach --}}
        </tbody>
      </table>
</x-accordion-list-project>
@endfor

@endsection
