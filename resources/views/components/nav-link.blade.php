@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-2 border-b-2 text-sm navbar bg-base-100 text-gray-300  transition duration-150 ease-in-out'
            : 'inline-flex items-center px-2 border-b-2 navbar bg-base-100 border-b-transparent text-sm leading-5 text-gray-300 hover:text-[#075985]  focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
