@extends('layout.app')

@section('content')

    <div class="mb-10">
   <a href="{{ route('project') }}" class="font-bold hover:underline">Home</a> <span>/</span> <a href="{{ route('detail-project') }}" class="font-bold hover:underline">Dashboard</a> <span>/</span> <span class="font-bold">List</span>
    </div>

    @foreach ($data as $d)
    <x-accordion-list-project :email="$d->user->email" :username="$d->user->username">
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
              <tr>
                <td class="td dark:text-gray-200"> {{$d->judul}}</td>
                <td class="td max-w-[300px] overflow-hidden overflow-ellipsis">
                  <div class="whitespace-normal break-words text-justify">
                    <!-- Isi deskripsi disini -->
                    {{$d->deskripsi}}
                    </div>
                <td class="td">
                  <x-status-badge>
                    {{$d->status}}
                  </x-status-badge>
                </td>
                <td class="td"> {{$d->start_date}}/{{$d->end_date}}</td>
                <td class="td">
                    <button class="mx-1 p-1 rounded-md focus:outline focus:outline-1 focus:outline-offset-2 focus:outline-reject bg-reject">
                      <img src="{{ asset('assets/icons/reject.svg') }}" alt="" srcset="">
                    </button>
                    <button class="mx-1 p-1 rounded-md focus:outline focus:outline-1 focus:outline-offset-2 focus:outline-done bg-done">
                      <img src="{{asset('assets/icons/done.svg')}}" alt="" srcset="">
                    </button>
                    <button class="mx-1 p-1 rounded-md focus:outline focus:outline-1 focus:outline-offset-2 focus:outline-done bg-done">
                      <img src="{{asset('assets/icons/edit.svg')}}" alt="" srcset="">
                    </button>
                    <button class="mx-1 p-1 rounded-md focus:outline focus:outline-1 focus:outline-offset-2 focus:outline-done bg-done">
                      <img src="{{asset('assets/icons/delete-white.svg')}}" alt="" srcset="">
                    </button>
                    <button class="mx-1 p-1 rounded-md focus:outline focus:outline-1 focus:outline-offset-2 focus:outline-done bg-done">
                      <img src="{{asset('assets/icons/eye.svg')}}" alt="" srcset="">
                    </button>
                </td>
              </tr>
            </tbody>
          </table>
    </x-accordion-list-project>
    @endforeach
@endsection

