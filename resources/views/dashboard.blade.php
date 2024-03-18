<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl  leading-tight bg-[#075985] text-gray-300 shadow-black">
            {{ __('Dashboardd') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You are logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-row py-2">
        <div class="ml-44 ">
            <div class="p-5 overflow-hidden shadow-md bg-slate-50 md:rounded-lg basis-1/4">
            {{ ("so this is where you put something interesting") }}
            </div>
        </div>

        <div class="ml-2">
            <div class="p-5 overflow-hidden shadow-md bg-slate-50 md:rounded-lg basis-1/4">
            {{ ("heyyyyy his is where you put something interesting") }}
            </div>
        </div>
    </div>

</x-app-layout>
