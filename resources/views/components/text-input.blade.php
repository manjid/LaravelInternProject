@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-[#a50034] focus:ring-[#a50034] text-black rounded-md shadow-sm']) !!}>
