<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/chart.js'])
</head>
<style>
    .chart {
    /* Hide scrollbar on Firefox */
    scrollbar-width: none;
    /* Hide scrollbar on other browsers */
    -ms-overflow-style: none;
    /* Hide scrollbar on WebKit-based (like Chrome, Safari) */
    &::-webkit-scrollbar {
        display: none;
    }
}
</style>
<body class="bg-secondary  text-white max-w-[1200px]">
    <x-header>
        @if(request()->routeIs('home'))
        <h1>{{ __('Home') }}</h1>
    @elseif(request()->routeIs('project'))
        <h1>{{ __('Project') }}</h1>
    @else
        <h1>{{ __('Default') }}</h1>
    @endif
    </x-header>

    <div class="container flex h-full w-full mt-16">

        @include('layout.sidebar')

        <div class="container relative mt-10 w-full px-6 h-full
                    md:ml-72">

            @yield('content')

        </div>

    </div>
</body>
</html>
