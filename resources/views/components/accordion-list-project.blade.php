<div class="container mb-5">
    <button class="flex gap-5 items-center accordion transition-all duration-400 ease-in-out bg-card border-none text-gray-700 font-poppin cursor-pointer py-4 px-6 w-full text-left focus:outline-none text-base rounded-lg">
        <img src="{{ asset('assets/icons/user.svg') }}" alt="" srcset="">
        <div>
            <h5>{{$username}}</h5>
            <p class="opacity-75 text-xs">{{$email}}</p>
        </div>
    </button>
    <div class="panel max-h-0 overflow-hidden bg-ternary rounded-b-lg transition-max-h duration-200 ease-out text-left px-6">
        {{$slot}}
      </div>
</div>

