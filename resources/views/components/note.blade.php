@props(['customBg'])

@php
    $customBg = $customBg ?? 'bg-card';
@endphp

<div class="flex flex-col cursor-pointer">
    <div class="card w-44 h-44 {{ $customBg }} rounded-lg p-4 overflow-hidden relative">
        <div class="flex flex-col gap-2 h-full">
             {{ $slot }}
        </div>
    </div>
</div>
