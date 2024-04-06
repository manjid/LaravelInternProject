<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Go die. No la just kidding (^_^). Insert your email so that we can send you the reset link.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4 ">
            <a
                href="{{ route('login') }}"
                class="items-center text-gray-400 ml-28 hover:text-gray-900"
                wire:navigate>
                back
            </a>
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>

        </div>
    </form>
</x-guest-layout>
