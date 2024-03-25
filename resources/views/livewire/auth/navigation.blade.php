<nav class="">

    @auth
        <a
            href="{{ url('/dashboard') }}"
            class="text-gray-900  hover:text-slate-50"
        >
            Dashboard
        </a>
    @else
        <a
            href="{{ route('login') }}"
            class="px-3 text-gray-900 rounded-md hover:text-slate-50"
        wire:navigate>
            Log in
        </a>

        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="px-3 text-gray-900 rounded-md hover:text-slate-50"
            wire:navigate>
                Register
            </a>
        @endif
    @endauth
</nav>
