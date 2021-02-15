@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center my-auto px-1 pt-1 text-xs md:text-base lg:text-2xl border-b-4 border-l-blue-3 md:text-sm font-medium leading-5 text-l-blue-3 focus:outline-none focus:border-l-blue-3 transition duration-150 ease-in-out'
            : 'inline-flex items-center my-auto px-1 pt-1 text-xs md:text-base lg:text-2xl border-b-4 border-transparent md:text-sm font-medium leading-5 text-l-blue-3 hover:border-l-blue-3 focus:outline-none focus:text-l-blue-3 focus:border-l-blue-3 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
