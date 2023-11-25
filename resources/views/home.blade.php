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
<body class="bg-secondary  text-white">
    <x-header>
        <h1>{{ __('Home') }}</h1>
    </x-header>

    <div class="container flex h-min-full h-fit w-full mt-16">

        @include('layout.sidebar')

        <div class="container relative md:ml-72   mt-10 w-full px-6">

            {{-- Bagian atas --}}
        <div class="top flex gap-4 justify-center
                    md:justify-start">

            {{-- Personal --}}
            <div>
                <x-addNote>

                </x-addNote>
                <h1 class="mt-2">Personal</h1>
            </div>

            {{-- Create New Project --}}
            <div>
                <x-addNote>

                </x-addNote>
                <h1 class="mt-2">Create New Project</h1>
             </div>
        </div>

        <hr class="my-4 border-white border-opacity-25" />

        {{--Bagian bawah  --}}
        <div class="bottom flex flex-wrap gap-4 w-full h-fit   
                    lg:flex-nowrap">

           {{-- Personal --}}
            <div class="left w-full flex flex-col gap-2 md::max-w-[50%] h-fit">
                <h1>Personal</h1>
                <div class="card flex flex-wrap gap-1 ">
                    <x-note>
                        
                    </x-note>
                    <x-note>
                        
                    </x-note>
                    <x-note>
                        
                    </x-note>
                    <x-note>
                        
                    </x-note>
                </div>
            </div>

            {{-- Project --}}
            <div class="right  w-full flex flex-col gap-2 md:max-w-[50%] h-fit">
                <h1>Project</h1>
                <div class="card flex flex-wrap gap-1 ">
                    <x-note>
                        
                    </x-note>
                    <x-note>
                        
                    </x-note>
                    <x-note>
                        
                    </x-note>
                    <x-note>
                        
                    </x-note>
                </div>
            </div>

        </div>

    </div>
</body>
</html>
