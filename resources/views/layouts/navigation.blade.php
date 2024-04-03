<nav x-data="{ open: false }" class="text-gray-200 shadow-md bg-[#a50034] border-shadow ">

    <div class="navbar bg-[#a50034] hover:bg-[#a50034] ">
        <div class="flex-1 ml-11">
          <a class="font-mono text-xl transition ease-in-out delay-50 hover:translate-y-1 hover:scale-105 hover:font-bold" href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">IMANJID</a>
 </div>

    <!-- Primary Navigation Menu -->
    <div class="px-4 ">
        <div class="flex justify-between h-16">
            <div class="flex text-gray-300">


                <!-- Navigation Links -->
                <div class="flex justify-center bg-[#a50034]  text-gray-300 ">
                    <div class="flex text-xl ">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                        {{ ('Dashboard') }}
                    </x-nav-link>
                    </div>
                    <div class="flex text-xl">
                    <x-nav-link :href="route('helpdesk.helpdesk')" :active="request()->routeIs('helpdesk')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 antialiased " fill="#000000" viewBox="0 0 64 64" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M37.71,34.54a13.428,13.428,0,0,0,5.51-4.86H46.7a2.915,2.915,0,0,0,2.74-3.06V19.43a3.124,3.124,0,0,0-.2-1.11V18.3a25.246,25.246,0,0,0-5.2-9.54l-.13-.15a15.275,15.275,0,0,0-5.72-3.97,17.135,17.135,0,0,0-14.11.8,15.539,15.539,0,0,0-3.99,3.17l-.13.15a25.246,25.246,0,0,0-5.2,9.54v.02a3.124,3.124,0,0,0-.2,1.11v7.19a2.915,2.915,0,0,0,2.74,3.06h3.48a13.428,13.428,0,0,0,5.51,4.86,20.226,20.226,0,0,0-15.02,19.5V59.5a1,1,0,0,0,1,1H51.73a1,1,0,0,0,1-1V54.04A20.226,20.226,0,0,0,37.71,34.54Zm9.73-15.11v7.19c0,.56-.35,1.06-.74,1.06H44.29c.17-.42.33-.85.46-1.29,0-.01,0-.01.01-.02a13.235,13.235,0,0,0-.1-8H46.7C47.09,18.37,47.44,18.87,47.44,19.43ZM17.3,27.68c-.39,0-.74-.5-.74-1.06V19.43c0-.56.35-1.06.74-1.06h2.04a13.261,13.261,0,0,0,.37,9.31Zm.26-11.31a22.694,22.694,0,0,1,3.89-6.28l.12-.13A13.124,13.124,0,0,1,25.05,7.2a15.268,15.268,0,0,1,12.41-.7,13.159,13.159,0,0,1,4.97,3.46l.12.13a22.694,22.694,0,0,1,3.89,6.28H43.82a13.311,13.311,0,0,0-23.64,0Zm3.11,6.14A11.33,11.33,0,1,1,43.05,25H39.71a2.991,2.991,0,0,0-2.82-2h-3a3,3,0,0,0,0,6h3a2.991,2.991,0,0,0,2.82-2H42.4a11.329,11.329,0,0,1-21.73-4.49Zm17.22,3.48v.02a.994.994,0,0,1-1,.99h-3a1,1,0,0,1,0-2h3A.994.994,0,0,1,37.89,25.99ZM50.73,58.5H13.27V54.04a18.228,18.228,0,0,1,18.2-18.2h1.06a18.228,18.228,0,0,1,18.2,18.2Z"/></svg>
                        {{ __('IT HelpDesk') }}
                    </x-nav-link>
                    </div>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 text-sm bg-[#a50034] font-medium leading-4 text-gray-300 transition duration-150 ease-in-out  border border-transparent rounded-md hover:text-[#1f2937] focus:outline-none">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -me-2 sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('helpdesk.helpdesk')" :active="request()->routeIs('helpdesk')">
                {{ __('IT HelpDesk') }}
            </x-responsive-nav-link>
        </div>


        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                <div class="text-sm font-medium text-gray-800">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
    </div>
</nav>
