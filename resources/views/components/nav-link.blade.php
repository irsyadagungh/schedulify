@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-secondary rounded-lg w-full flex items-center gap-10 pl-10 p-4 text-center font-poppin focus:outline focus:outline-offset-2 focus:outline-secondary
                md:p-4'
            : 'w-full flex rounded-lg items-center hover:bg-secondary gap-10 pl-10 p-4 text-center font-poppin focus:outline focus:outline-offset-2 focus:outline-secondary
                md:p-4';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
