@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-[#082f49] focus:ring-[#082f49] rounded-md shadow-sm']) !!}>
