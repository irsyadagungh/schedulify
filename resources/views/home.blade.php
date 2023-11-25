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
<body class="bg-secondary overflow-hidden text-white w-full h-[100vh]">
    <x-header>
        <h1>{{ __('Home') }}</h1>
    </x-header>

    <div class="container flex h-full w-full">
        @include('layout.sidebar')


        <div class="container relative m-8 w-full">

            {{-- Bagian atas --}}
        <div class="top flex gap-4">
            {{-- Personal --}}
            <div>
            <x-addNote></x-addNote>
            <h1 class="mt-2">Personal</h1>
            </div>

            {{-- Create New Project --}}
            <div>
            <x-addNote></x-addNote>
            <h1 class="mt-2">Create New Project</h1>
             </div>
        </div>

        <hr class="my-4 border-white border-opacity-25" />

        {{--Bagian bawah  --}}
        <div class="bottom flex flex-warp gap-4 w-full h-full">
            {{-- Kiri --}}
            <div class="kiri w-1/2 flex flex-warp gap-2 h-f">
                <x-note>

                </x-note>


                <x-note>

                </x-note>

                <x-note>

                </x-note>

            </div>


            {{-- Kanan --}}
            <div class="kanan w-1/2 flex justify-start gap-2">
                <x-addNote>

                </x-addNote>
                <x-addNote>

                </x-addNote>
                <x-addNote>

                </x-addNote>
                <x-addNote>

                </x-addNote>
            </div>
        </div>





        </div>

    </div>
</body>
</html>
