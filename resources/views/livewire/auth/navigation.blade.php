<nav class="">

    @auth
        <a
            href="{{ url('/dashboard') }}"
            class="transition ease-in-out delay-75 text-slate-200 hover:text-gray-900 hover:-translate-y-1 hover:scale-95"
        >
            Dashboard
        </a>
    @else
        <a
            href="{{ route('login') }}"
            class="px-3 transition ease-in-out delay-75 rounded-md text-slate-200 hover:text-gray-900 hover:-translate-y-1 hover:scale-95"
        wire:navigate>
            Log in
        </a>



        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="px-3 transition ease-in-out delay-75 rounded-md text-slate-200 hover:text-gray-900 hover:-translate-y-1 hover:scale-95"
            wire:navigate>
                Register
            </a>
        @endif
    @endauth
</nav>
