<x-app-layout>

    <div class="min-h-screen hero" style="background-image: url(https://daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="text-center hero-content">
          <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold">Hello {{ Auth::user()->name }}!</h1>
            <p class="mb-5">Welcome to our innovative IT Helpdesk platform, where users are empowered to report any IT-related issues they encounter with ease and efficiency. Our cutting-edge system streamlines the process, allowing users to submit detailed descriptions of their problems effortlessly. </p>
            <x-nav-link :href="route('helpdesk.index')" :active="request()->routeIs('helpdesk.index')" class="transition ease-in-out delay-75 hover:-translate-y-2 hover:scale-105  btn bg-[#a50034] text-sm font-sans border-[#a50034] hover:bg-gray-200 hover:border-white hover:text-gray-900">
            <button>{{ __('Get Started') }}</button>
            </x-nav-link>
          </div>
        </div>
      </div>

      <div class="my-10 mb-5 text-4xl font-bold text-center text-gray-800 ">
          This is an example of what we can help you with
        </div>
    <div class="flex flex-wrap rounded-l-lg">
        <a href="{{ route('helpdesk.index') }}" class="w-1/3 mt-6 mb-6 ml-40 transition ease-in-out delay-75 bg-gray-200 shadow-xl hover:animate-pulse hover:-translate-y-1 hover:scale-95 card card-side" >
        <figure>
          <img class="w-full h-full rounded-l-lg " src="image/windows-10.jpg" />
        </figure>
        <div class="card-body">
          <h2 class="text-gray-900 card-title">Windows Problem</h2>
          <p class="text-gray-900 text-balance">We can help you with troubleshooting<br> common issues in Windows 10. <br>Whether you're experiencing <br>slow performance, connectivity problems, or software glitches, we've got you covered.</p>
        </div>
        </a>

        <a href="{{ route('helpdesk.index') }}" class="w-1/3 mt-6 mb-6 ml-40 transition ease-in-out delay-75 bg-gray-200 shadow-xl hover:animate-pulse hover:-translate-y-1 hover:scale-95 card card-side" >
            <figure>
          <img class="w-full h-full rounded-l-lg" src="image/SDLC.png" />
        </figure>
        <div class="card-body">
          <h2 class="text-gray-900 card-title">faulty</h2>
          <p class="text-gray-900 text-balance ">Any troubleshoot problem, let us deal with it. Click to open Helpdesk.</p>
        </div>
    </a>
    </div>

</x-app-layout>
