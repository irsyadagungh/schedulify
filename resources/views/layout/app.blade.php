<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
=======
<html lang="en" class="h-full">
>>>>>>> b2bbb4b89ddb59aea4b0fcfe23edc87c478e5593
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<<<<<<< HEAD
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>

</style>
<body class="bg-secondary  text-white">
=======
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
>>>>>>> b2bbb4b89ddb59aea4b0fcfe23edc87c478e5593
    <x-header>
        @if(request()->routeIs('home'))
        <h1>{{ __('Home') }}</h1>
    @elseif(request()->routeIs('project'))
        <h1>{{ __('Project') }}</h1>
<<<<<<< HEAD
    @elseif(request()->routeIs('profile'))
        <h1>{{ __('Profile') }}</h1>
=======
>>>>>>> b2bbb4b89ddb59aea4b0fcfe23edc87c478e5593
    @else
        <h1>{{ __('Default') }}</h1>
    @endif
    </x-header>

<<<<<<< HEAD
    <div class="container flex h-min-full h-fit w-full mt-16">
        @if(request()->routeIs('home') || request()->routeIs('project'))
        @include('layout.sidebar')
    @endif

        <div class="container relative md:ml-72   mt-10 w-full px-6">
=======
    <div class="container flex h-full w-full mt-16">

        @include('layout.sidebar')

        <div class="container relative mt-10 w-full px-6 h-full
                    md:ml-72">
>>>>>>> b2bbb4b89ddb59aea4b0fcfe23edc87c478e5593

            @yield('content')

        </div>

    </div>
</body>
</html>
