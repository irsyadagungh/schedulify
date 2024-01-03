<div class="side fixed z-10 -left-2/3 bg-primary w-2/3 h-full  flex flex-col duration-200
            md:fixed md:w-2/6 md:left-0 md:h-screen
            lg:w-1/6">
    <div class=" flex flex-col items-start pt-20 h-full">
        <ul class="w-full h-4/5 justify-between flex flex-col px-4 gap-1">
            <div>
            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                <img src="{{ asset('assets/icons/home_FILL0_wght400_GRAD0_opsz24 1.svg') }}" alt="" srcset="">
                {{ __('Home') }}
            </x-nav-link>
            <x-nav-link :href="route('personal')" :active="request()->routeIs(['personal', 'plEdit'])">
                <img src="{{ asset('assets/icons/person.svg') }}" alt="" srcset="">
                {{ __('Personal') }}
            </x-nav-link>
            <x-nav-link :href="route('project')" :active="request()->routeIs(['project', 'detail-project', 'list-task'])">
                <img src="{{ asset('assets/icons/groups.svg') }}" alt="" srcset="">
                {{ __('Projects') }}
            </x-nav-link>
        </div>
            {{-- <form action="{{route('logout')}}"> --}}
                <x-nav-link  :href="route('logout')" :active="request()->routeIs('logout')">
                    <img src="{{ asset('assets/icons/logout.svg') }}" alt="" srcset="">
                    {{ __('Logout') }}
                </x-nav-link>
            {{-- </form> --}}
        </ul>

    </div>
</div>
