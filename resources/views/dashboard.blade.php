<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You are logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-row py-8 ">
        <div class="ml-44 ">
            <div class="p-5 overflow-hidden shadow-md bg-slate-50 md:rounded-lg ">
            {{ ("so this is where you put something interesting") }}
            </div>
        </div>

        <div class="ml-2">
            <div class="p-5 overflow-hidden shadow-md bg-slate-50 md:rounded-lg ">
            {{ ("heyyyyy his is where you put something interesting") }}
            </div>
        </div>
    </div>

    <div class="p-5 ml-40 overflow-hidden rounded-lg card w-80">
        <figure>
          <img class="rounded-t-xl" src="https://picsum.photos/id/103/500/250" />
        </figure>
          <h2 class="py-2 text-gray-300 card-title">Example of Card</h2>
          <p class="overflow-hidden text-gray-300 shadow-md">this is a part where i try card for new things.</p>
      </div>

</x-app-layout>
