@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-2 border-b-2 text-sm  bg-base-100 text-gray-300  transition duration-150 ease-in-out'
            : 'inline-flex items-center px-2 border-b-2  bg-[#6b6b6b] border-b-transparent text-sm leading-5 text-gray-300 hover:text-[#a50034]  focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
