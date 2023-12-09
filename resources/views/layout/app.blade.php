<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/chart.js'])
</head>
<style>

</style>
<body class="bg-secondary  text-white">
    <x-header>
        @if(request()->routeIs('home'))
        <h1>{{ __('Home') }}</h1>
    @elseif(request()->routeIs(['project', 'detail-project', 'list-task']))
        <h1>{{ __('Project') }}</h1>
    @elseif(request()->routeIs('profile'))
        <h1>{{ __('Profile') }}</h1>
    @else
        <h1>{{ __('Default') }}</h1>
    @endif
    </x-header>

    <div class="container flex h-min-full h-fit w-full mt-16">
        @if(request()->routeIs(['home', 'detail-project', 'project', 'list-task']))
            @include('layout.sidebar')
        @endif

        <div class="container relative md:ml-72 mt-10 w-full px-6">

            @yield('content')

        </div>

    </div>

    <script>
        new Accordion('.accordion-container');
      </script>
</body>
</html>