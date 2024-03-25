@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-2 border-b-2 text-sm text-gray-300  transition duration-150 ease-in-out'
            : 'inline-flex items-center px-2 bg-[#a50034] border-b-transparent text-sm text-gray-300 hover:text-[#1f2937]  focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
