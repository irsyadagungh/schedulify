<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>

</style>
<body class="text-white bg-secondary">
    <x-header>
        @if(request()->routeIs('home'))
        <h1>{{ __('Home') }}</h1>
    @elseif(request()->routeIs('project'))
        <h1>{{ __('Project') }}</h1>
    @elseif(request()->routeIs('personaltoday'))
        <h1>{{ __('Personal') }}</h1>
    @else
        <h1>{{ __('Default') }}</h1>
    @endif
    </x-header>

    <div class="container flex w-full mt-16 h-min-full h-fit">

        @include('layout.sidebar')

        <div class="container relative w-full px-6 mt-10 md:ml-72">

            @yield('content')

        </div>

    </div>
</body>
</html>
