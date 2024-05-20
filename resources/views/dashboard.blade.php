@if(auth()->user()->usertype === 'user')
<x-app-layout>
    <div class="min-h-screen hero" style="background-image: url(image/it_helpdesk_bg.jpg);">
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
    @endif

</x-app-layout>

@if (auth()->user()->usertype === 'admin')
<x-admin-layout>

<body>
    <div class="h-[calc(100vh-148px)] overflow-y-scroll">
    <div class="min-h-screen" style="height: 500px ">
    <div class="mt-12 text-5xl text-center text-gray-900">
        <div> Hye {{ Auth::user()->name }}</div>
    </div>
    <div class="pt-12 pb-7 container-fluid">
        <div class="text-gray-900 sm:rounded-lg">
            <div class="flex">
                <div class="grid flex-grow mx-4 mb-4 bg-white rounded-lg shadow-lg sm:p-3 ">
                    <div class="card">
                        <div class="p-3 card-header">
                            <div class="flex mb-4 ml-10 mr-10 rounded-lg shadow-lg bg-slate-100 sm:p-3 ">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><style>.st1{fill:#dfdfdf}.st2{fill:#4a555f}.st3{fill:#ffd452}</style><path class="st2" d="M44.881 0v433.158h48.356V46.004h290.355V0H44.881zm332.117 39.41H86.642v387.154H51.475V6.594h325.523V39.41z"/><path class="st1" d="M59.167 14.287v404.584h19.782V31.717h290.356v-17.43z"/><path class="st2" d="M86.642 39.41v433.157h48.356V85.436h290.355V39.41H86.642zm332.117 39.432H128.404v387.131H93.236V46.004h325.523v32.838z"/><path class="st1" d="M100.929 53.697V458.28h19.782V71.149h290.355V53.697z"/><path class="st2" d="M128.4 78.843V512h338.72V78.843H128.4zm332.125 426.563H134.994V85.437h325.532v419.969z"/><path class="st2" d="M190.061 315.531v148.682h41.727V315.531h-41.727zm35.133 142.088h-28.54V322.125h28.54v135.494z"/><path style="fill:#f58e6f" d="M204.347 329.818h13.154v120.109h-13.154z"/><path class="st2" d="M247.954 375.27v88.943h41.727V375.27h-41.727zm35.133 82.349h-28.54v-75.755h28.54v75.755z"/><path class="st3" d="M262.241 389.557h13.154v60.37h-13.154z"/><path class="st2" d="M305.846 345.444v118.769h41.727V345.444h-41.727zm35.134 112.175h-28.54V352.038h28.54v105.581z"/><path class="st3" d="M320.133 359.731h13.154v90.195h-13.154z"/><path class="st2" d="M363.741 331.556v132.657h41.725V331.556h-41.725zm35.132 126.063h-28.538V338.15h28.538v119.469z"/><path style="fill:#71cce0" d="M378.028 345.843h13.151v104.083h-13.151z"/><path class="st2" d="m225.086 246.3 4.459 4.857 4.857-4.459-4.459-4.857-4.857 4.459zm-9.714 8.918 4.459 4.857 4.858-4.459-4.459-4.857-4.858 4.459zm43.718-40.132-4.857 4.459 4.46 4.857 4.857-4.459-4.46-4.857zm-14.572 13.377 4.459 4.857 4.858-4.459-4.459-4.857-4.858 4.459zm-9.716 8.918 4.458 4.857 4.857-4.459-4.458-4.857-4.857 4.459zM315.154 229.944l4.473 4.847 4.847-4.472-4.474-4.847-4.846 4.472zm-9.692 8.942 4.469 4.847 4.847-4.471-4.469-4.847-4.847 4.471zm29.076-26.827 4.473 4.847 4.847-4.472-4.473-4.847-4.847 4.472zm-9.691 8.943 4.473 4.846 4.844-4.471-4.473-4.846-4.844 4.471zm24.234-22.357-4.847 4.471 4.469 4.847 4.847-4.471-4.469-4.847zM292.983 215.279l-4.847 4.471 4.471 4.846 4.847-4.471-4.471-4.846zm8.942 9.693-4.847 4.471 4.471 4.846 4.847-4.471-4.471-4.846zM276.672 184.822c-9.058 0-16.429 7.369-16.429 16.428s7.371 16.428 16.429 16.428 16.427-7.369 16.427-16.428-7.369-16.428-16.427-16.428zm0 26.262c-5.424 0-9.835-4.411-9.835-9.834s4.411-9.834 9.835-9.834c5.422 0 9.833 4.411 9.833 9.834s-4.411 9.834-9.833 9.834zM368.148 169.604c-9.058 0-16.427 7.369-16.427 16.428s7.369 16.428 16.427 16.428 16.429-7.369 16.429-16.428-7.371-16.428-16.429-16.428zm0 26.262c-5.422 0-9.833-4.411-9.833-9.834s4.411-9.834 9.833-9.834c5.424 0 9.835 4.411 9.835 9.834s-4.411 9.834-9.835 9.834z"/><path class="st2" d="M217.533 287.604V144.129h-6.594v150.069h169.356v-6.594z"/></svg>
                            </div>
                                <p class="mb-0 text-lg ">Total Report: {{ $totalReport }} </p>
                        </div>
                    </div>
                </div>
                <div class="grid flex-grow mx-4 mb-4 bg-white rounded-lg shadow-lg sm:p-3 ">
                    <div class="card">
                        <div class="p-3 card-header">
                            <div class="flex justify-center mb-4 ml-10 mr-10 rounded-lg shadow-lg bg-slate-100 ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="25 30 150 150" xml:space="preserve"><path fill="#282828" d="M135.832 140.848h-70.9c-2.9 0-5.6-1.6-7.4-4.5-1.4-2.3-1.4-5.7 0-8.6l4-8.2c2.8-5.6 9.7-9.1 14.9-9.5 1.7-.1 5.1-.8 8.5-1.6 2.5-.6 3.9-1 4.7-1.3-.2-.7-.6-1.5-1.1-2.2-6-4.7-9.6-12.6-9.6-21.1 0-14 9.6-25.3 21.5-25.3s21.5 11.4 21.5 25.3c0 8.5-3.6 16.4-9.6 21.1-.5.7-.9 1.4-1.1 2.1.8.3 2.2.7 4.6 1.3 3 .7 6.6 1.3 8.4 1.5 5.3.5 12.1 3.8 14.9 9.4l3.9 7.9c1.5 3 1.5 6.8 0 9.1-1.6 2.9-4.4 4.6-7.2 4.6zm-35.4-78.2c-9.7 0-17.5 9.6-17.5 21.3 0 7.4 3.1 14.1 8.2 18.1.1.1.3.2.4.4 1.4 1.8 2.2 3.8 2.2 5.9 0 .6-.2 1.2-.7 1.6-.4.3-1.4 1.2-7.2 2.6-2.7.6-6.8 1.4-9.1 1.6-4.1.4-9.6 3.2-11.6 7.3l-3.9 8.2c-.8 1.7-.9 3.7-.2 4.8.8 1.3 2.3 2.6 4 2.6h70.9c1.7 0 3.2-1.3 4-2.6.6-1 .7-3.4-.2-5.2l-3.9-7.9c-2-4-7.5-6.8-11.6-7.2-2-.2-5.8-.8-9-1.6-5.8-1.4-6.8-2.3-7.2-2.5-.4-.4-.7-1-.7-1.6 0-2.1.8-4.1 2.2-5.9.1-.1.2-.3.4-.4 5.1-3.9 8.2-10.7 8.2-18-.2-11.9-8-21.5-17.7-21.5z"/></svg>
                            </div>
                                <p class="mb-0 text-lg ">Total Users : {{ $totalUsers }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid justify-center flex-grow mx-4 mb-4 bg-white rounded-lg shadow-lg sm:p-3 ">
                    <div class="card">
                        <div class="justify-center p-3 card-header">
                            <div class="flex mb-4 ml-10 mr-10 rounded-lg shadow-lg size-28 bg-slate-100 sm:p-3 ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="20 30 200 200"><defs><style>.cls-1{fill:#1d384d}</style></defs><g id="icons_without_caption" data-name="icons without caption"><g id="REPORT"><path class="cls-1" d="M85.13 188.44H59.35V44.07h113.52v25.45h-4V48.07H63.35v136.37h21.78v4z"/><path class="cls-1" d="M196.65 211.93H83.13V67.56h113.52zm-109.52-4h105.52V71.56H87.13z"/><path class="cls-1" d="M140.43 88.57h32.77v4h-32.77zM140.43 108.24h32.77v4h-32.77zM140.43 127.91h32.77v4h-32.77zM107.66 147.58h65.54v4h-65.54zM107.66 167.26h65.54v4h-65.54zM107.66 186.93h65.54v4h-65.54zM130.72 117c0 4.66-3.28 7.94-8.83 8.38v5.53h-3.06v-5.58a15.92 15.92 0 0 1-9.34-4.48l2.39-2.85a13 13 0 0 0 8.81 3.79c3.37 0 5.86-1.67 5.86-4.55 0-3.28-2.63-4.37-6.85-5.69-5-1.61-9.54-3.17-9.54-8.61 0-4.44 3.1-7.8 8.68-8.07v-5.79h3.05v6a18.68 18.68 0 0 1 7.78 3.32l-2.3 2.83a14.18 14.18 0 0 0-7.69-2.7c-3.19 0-5.42 1.49-5.42 4.17 0 2.85 2.77 3.9 6.58 5.15 5.62 1.78 9.88 3.28 9.88 9.14z"/></g></g></svg>
                            </div>
                                <p class="mb-0 text-lg ">Today's Report: {{ $todaysReport }} </p>
                        </div>
                    </div>
                </div>
                <div class="grid justify-center flex-grow mx-4 mb-4 bg-white rounded-lg shadow-lg sm:p-3 ">
                    <div class="card">
                        <div class="p-2 card-header">
                            <div class="flex justify-center mb-4 ml-10 mr-10 rounded-lg shadow-lg size-28 bg-slate-100 sm:p-3 ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 70"><defs><style>.cls-1{fill-rule:evenodd}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="report"><path class="cls-1" d="M53 5.2h-6.58V1a1 1 0 0 0-1-1H15a1 1 0 0 0-.37.07l-.13.08a1 1 0 0 0-.16.1L.34 12.6a1 1 0 0 0-.18.24 1 1 0 0 0-.07.16 1 1 0 0 0-.09.4V56a1 1 0 0 0 1 1h5.09v6a1 1 0 0 0 1 1H53a1 1 0 0 0 1-1V6.2a1 1 0 0 0-1-1zm-39-2v9.15H3.64zM2 55V14.35h13a1 1 0 0 0 1-1V2h28.42v53H2zm50 7H8.09v-5h37.33a1 1 0 0 0 1-1V7.2H52z"/><path class="cls-1" d="M22.07 36H11.35a1 1 0 0 0 0 2h10.72a1 1 0 0 0 0-2zM22.07 43.6H11.35a1 1 0 0 0 0 2h10.72a1 1 0 0 0 0-2zM36.89 20.3H11.35a1 1 0 0 0 0 2h25.54a1 1 0 0 0 0-2zM36.89 28H11.35a1 1 0 0 0 0 2h25.54a1 1 0 0 0 0-2zM33.44 39.5c-.35-.1-.72-.15-1.08-.23s-1.19-.3-1.44-.77a.87.87 0 0 1-.09-.39 1.06 1.06 0 0 1 .37-.87 1.72 1.72 0 0 1 1.44-.14 2.79 2.79 0 0 1 1.07.52 1 1 0 0 0 1.26.16 1 1 0 0 0 .41-.8 1.47 1.47 0 0 0-.53-1.09 3.67 3.67 0 0 0-1.47-.77L33 35v-1.23a.78.78 0 0 0-.29-.65c-.5-.39-1.62-.24-1.62.55V35l-.33.1a2.64 2.64 0 0 0-1.62 1.39 3.58 3.58 0 0 0-.42 2.34 2.14 2.14 0 0 0 .94 1.56 4.84 4.84 0 0 0 1.57.61 5.17 5.17 0 0 1 1.15.4 2.81 2.81 0 0 1 .52.35 1.23 1.23 0 0 1 .52 1.25 1.38 1.38 0 0 1-1.19.86 2.07 2.07 0 0 1-1.78-.77 1.52 1.52 0 0 0-.85-.62 1 1 0 0 0-.75.14 1.06 1.06 0 0 0-.45.7 1.29 1.29 0 0 0 .27 1 3.89 3.89 0 0 0 2.13 1.46l.34.09v1.04a.87.87 0 0 0 .42.8 1 1 0 0 0 1.5-.76V45.8l.33-.1A3.69 3.69 0 0 0 35 44.58a2.83 2.83 0 0 0 .73-2.42 3.07 3.07 0 0 0-2.29-2.66z"/></g></g></svg>
                            </div>
                                <p class="text-lg ">This Month Report: {{ $thisMonthReport }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid flex-grow mx-4 mb-4 bg-white rounded-lg shadow-lg sm:p-3 ">
                    <div class="card">
                        <div class="p-3 card-header">
                            <div class="flex mb-4 ml-10 mr-10 rounded-lg shadow-lg bg-slate-100 sm:p-3 ">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64" xml:space="preserve"><style>.st1,.st11,.st2,.st5{fill:#78909c;stroke:#37474f;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.st11,.st2,.st5{fill:#eceff1}.st11,.st5{fill:none}.st11{fill:#26c6da}</style><circle cx="46.8" cy="19.5" r="15" style="fill:#689f38;stroke:#37474f;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10"/><path class="st1" d="M47.2 63.5h-1c-1.4 0-2.5-1.1-2.5-2.5V30.5h6V61c.1 1.4-1.1 2.5-2.5 2.5z"/><path d="M19.2 58.5h5c1.4 0 2.5-1.1 2.5-2.5V43c0-1.4-1.1-2.5-2.5-2.5h-5c-1.4 0-2.5 1.1-2.5 2.5v13c.1 1.3 1.2 2.5 2.5 2.5z" style="fill:#455a64;stroke:#37474f;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10"/><path d="M56.2 55c-.4.3-.9.5-1.5.5H36.8c-2 0-4-.4-5.9-1.2l-4.2-1.8v4l4.2 1.8c1.9.8 3.9 1.2 5.9 1.2h17.9c1.4 0 2.5-1.1 2.5-2.5 0-.8-.4-1.5-1-2z" style="fill:#b0bec5;stroke:#37474f;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10"/><path class="st2" d="M57.2 43c0-1.4-1.1-2.5-2.5-2.5 1.5 0 2.6-1.3 2.5-2.8-.1-1.3-1.3-2.2-2.6-2.2H43.7V33c0-1.4-1.1-2.5-2.5-2.5h-.4c-1.3 0-2.6.5-3.5 1.5l-1.5 1.5c-1.3 1.3-2.9 2.4-4.7 3.2l-4.3 1.9v14l4.2 1.8c1.9.8 3.9 1.2 5.9 1.2h17.8c1.3 0 2.5-.9 2.6-2.2.1-1.5-1-2.8-2.5-2.8 1.4 0 2.5-1.1 2.5-2.5s-1.1-2.5-2.5-2.5c1.3-.1 2.4-1.2 2.4-2.6z"/><path d="m28.7 39.8 3.1-1.3c2-.9 3.8-2.1 5.3-3.6l1.5-1.5c.6-.6 1.3-.9 2.1-.9" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10"/><path class="st1" d="M19.2 54.5h5c1.4 0 2.5-1.1 2.5-2.5V39c0-1.4-1.1-2.5-2.5-2.5h-5c-1.4 0-2.5 1.1-2.5 2.5v13c.1 1.3 1.2 2.5 2.5 2.5z"/><path class="st5" d="M54.8 40.5h-3M54.8 45.5h-3M54.8 50.5h-3"/><circle class="st11" cx="21.8" cy="40.5" r="2"/><circle cx="46.8" cy="15.5" r="15" style="fill:#9ccc65;stroke:#37474f;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10"/><path d="M33.8 15.5c0-7.2 5.8-13 13-13" style="fill:none;stroke:#c5e1a5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10"/><path class="st2" d="m38.1 16.7 4.9 4.9c.6.6 1.5.6 2.1 0l10.3-10.3c.6-.6.6-1.5 0-2.1-.6-.6-1.5-.6-2.1 0l-9.2 9.2-3.9-3.9c-.6-.6-1.5-.6-2.1 0-.6.7-.6 1.7 0 2.2z"/><path d="M4.8 56.5h12v-14h-12c-1.4 0-2.5 1.1-2.5 2.5v9c-.1 1.4 1.1 2.5 2.5 2.5z" style="fill:#0097a7;stroke:#37474f;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10"/><path class="st11" d="M4.8 52.5h12v-14h-12c-1.4 0-2.5 1.1-2.5 2.5v9c-.1 1.3 1.1 2.5 2.5 2.5z"/></svg>
                            </div>
                                <p class="mb-0 text-lg ">Reports Settled: </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid flex-grow mx-4 mb-20 bg-white rounded-lg shadow-lg sm:p-3">
        <div class="card">
            <div class="p-3 card-header">
                    <p class="mb-0 text-lg text-gray-900">All Reports:</p><br>
                    <table class="table text-center justify-content-center">
                        <thead class=" bg-slate-300">
                        <tr class="text-lg text-gray-700">
                            <th>ID</th>
                            <th>Title</th>
                            <th>Problem</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach ( $reports as $report )
                        <tr>
                            <td>{{ $report->id }}</td>
                            <td>{{ $report->title }}</td>
                            <td>{{ $report->problem }}</td>
                            <td>
                                <form action="{{ route('helpdesk.destroy' ,$report->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('helpdesk.show' , ['id' =>$report->id]) }}">Show</a>
                                    <a class="btn btn-info " href="{{ route('helpdesk.edit' , ['id' => $report->id]) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning ">Delete</button>
                                </form>
                            </td>
                        </tr>

                        @endforeach
                    </table>
                    {{ $reports->links() }}
            </div>
        </div>
    </div>
    </div>
    </div>
    @endif
</body>
</html>
</x-admin-layout>
