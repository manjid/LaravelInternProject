<nav class="">
    <h1>{{ $name }}</h1>
    @auth
        <a
            href="{{ url('/dashboard') }}"
            class=" text-white/70 hover:text-black/70"
        >
            Dashboard
        </a>
    @else
        <a
            href="{{ route('login') }}"
            class="px-3 rounded-md text-white/70 hover:text-black/70"
        wire:navigate>
            Log in
        </a>

        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="px-3 rounded-md text-white/70 hover:text-black/70"
            wire:navigate>
                Register
            </a>
        @endif
    @endauth
</nav>
