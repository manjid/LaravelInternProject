<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#6b6b6b] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#a50034] focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-[#082f49] focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
