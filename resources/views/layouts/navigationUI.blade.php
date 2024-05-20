
<div class="text-gray-900 shadow-lg navbar bg-white-200">
    <div class=" navbar-start">
      <div class="flex-1 ml-9 min-w-24 ">
        <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
      <img class="ml-10 transition ease-in-out scale-105 delay-50 hover:translate-y-1 size-16 min-w-36 " src="image/it-helpdesk-2nd-horizontal.png" ></img>
    </a>
    </div>
    </div>
    <div class="hidden navbar-center lg:flex">
      <ul class="px-1 menu menu-horizontal">
          <li><a>Dashboard</a></li>
        <li><a>Admin Profile</a></li>
        <li><a>Reports</a></li>
        <li><a>User</a></li>
        <li><a>Report Settled</a></li>
      </ul>
    </div>
    <div class="navbar-end">
      <!-- Settings Dropdown -->
      <div class="hidden sm:flex sm:items-center sm:ms-6 ">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-3 py-2 text-sm bg-white-200 font-medium leading-4 text-gray-900 transition duration-150 ease-in-out  border border-transparent rounded-lg hover:bg-[#f0f1f3] focus:outline-none">
                    <div>{{ Auth::user()->name }}</div>

                    <div class="ms-1">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">

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
    </div>
  </div>
