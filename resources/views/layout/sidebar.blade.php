<div class="fixed z-10 flex flex-col w-2/3 h-full duration-200 side -left-2/3 bg-primary md:fixed md:w-2/6 md:left-0 md:h-screen lg:w-1/6">
    <div class="flex items-start h-full pt-20 ">
        <ul class="flex flex-col w-full">
            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                <img src="{{ asset('assets/icons/home_FILL0_wght400_GRAD0_opsz24 1.svg') }}" alt="" srcset="">
                {{ __('Home') }}
            </x-nav-link>
            <x-nav-link :href="route('personal')" :active="request()->routeIs('personal')">
                <img src="{{ asset('assets/icons/person.svg') }}" alt="" srcset="">
                {{ __('Personal') }}
            </x-nav-link>
            <x-nav-link :href="route('project')" :active="request()->routeIs('project')">
                <img src="{{ asset('assets/icons/groups.svg') }}" alt="" srcset="">
                {{ __('Projects') }}
            </x-nav-link>
        </ul>
    </div>
</div>
