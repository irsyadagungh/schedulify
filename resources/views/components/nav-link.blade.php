@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-secondary w-full flex items-center gap-10 pl-10 p-4 text-center font-poppin
                md:p-4'
            : 'w-full flex items-center hover:bg-secondary gap-10 pl-10 p-4 text-center font-poppin
                md:p-4';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
