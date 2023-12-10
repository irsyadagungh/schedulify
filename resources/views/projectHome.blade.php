@extends('layout.app')

@section('content')
<div class="flex flex-col gap-8">
<div class="flex flex-col gap-2">
    <h1 class="font-bold ">Project</h1>
    <div class="flex flex-wrap gap-4">
        {{-- Note 1 --}}
        <x-noteProject>
            <progress id="file" value="70" max="100" class="h-2 w-full mt-1.5" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
        </x-noteProject>

        {{-- Note 2 --}}
        <x-noteProject>
            <progress id="file" value="40" max="100" class="h-2 w-full mt-1.5" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
        </x-noteProject>

        {{-- Add noteProject --}}
        <div>
            <x-addNote>

            </x-addNote>
            <h1 class="mt-2">Create New Project</h1>
        </div>
    </div>
</div>

<div class="flex flex-col gap-2">
    <h1 class="font-bold ">History Project</h1>
    <div class="flex flex-wrap gap-4">

        {{-- Note 1 --}}
        <x-noteProject>
            <progress id="file" value="100" max="100" class="h-2 w-full mt-1.5" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
        </x-noteProject>

        {{-- Note 2 --}}
        <x-noteProject>
            <progress id="file" value="100" max="100" class="h-2 w-full mt-1.5" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
        </x-noteProject>

        {{-- Note 3 --}}
        <x-noteProject>
            <progress id="file" value="100" max="100" class="h-2 w-full mt-1.5" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
        </x-noteProject>

        {{-- Note 4 --}}
        <x-noteProject>
            <progress id="file" value="100" max="100" class="h-2 w-full mt-1.5" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
        </x-noteProject>

        {{-- Note 5 --}}
        <x-noteProject>
            <progress id="file" value="100" max="100" class="h-2 w-full mt-1.5" style="background-color: #8B5CF6; border-radius: 8px;"></progress>
        </x-noteProject>

    </div>
</div>


</div>




@endsection

