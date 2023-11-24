<div class="side absolute z-10 -left-1/3 bg-primary w-1/3 h-full  flex flex-col duration-200
            md:relative md:left-0
            lg:w-1/6">
    <div class=" flex items-start ">
        <ul class="w-full flex flex-col">
            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                <img src="{{ asset('assets/icons/home_FILL0_wght400_GRAD0_opsz24 1.svg') }}" alt="" srcset="">
                {{ __('Home') }}
            </x-nav-link>
            <x-nav-link :href="route('home')" :active="request()->routeIs('dashboard')">
                <img src="{{ asset('assets/icons/person.svg') }}" alt="" srcset="">
                {{ __('Personal') }}
            </x-nav-link>
            <x-nav-link :href="route('home')" :active="request()->routeIs('dashboard')">
                <img src="{{ asset('assets/icons/groups.svg') }}" alt="" srcset="">
                {{ __('Projects') }}
            </x-nav-link>
        </ul>
    </div>
</div>