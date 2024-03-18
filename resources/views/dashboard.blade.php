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

    <div class="flex flex-row py-8">
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

    <div class="p-5 ml-40 overflow-hidden card w-80 md:rounded-lg">
        <figure>
          <img class=" md:rounded-t-xl" src="https://picsum.photos/id/103/500/250" />
        </figure>
          <h2 class="py-2 text-gray-300 card-title">Example of Card</h2>
          <p class="overflow-hidden text-gray-300 shadow-md">Rerum reiciendis beatae tenetur excepturi aut pariatur est eos. Sit sit necessitatibus.</p>
      </div>

</x-app-layout>
