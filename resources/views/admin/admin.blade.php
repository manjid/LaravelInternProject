<x-admin-layout>
    <head>

    </head>
<body>
    <div class="h-[calc(100vh-195px)] ">
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
                                    <div class="card-header">
                                            <p class="text-lg ">T:</p>
                                    </div>
                            </div>
                                <p class="mb-0 text-lg ">Total Report:  </p>
                        </div>
                    </div>
                </div>
                <div class="grid flex-grow mx-4 mb-4 bg-white rounded-lg shadow-lg sm:p-3 ">
                    <div class="card">
                        <div class="p-3 card-header">
                            <div class="flex mb-4 ml-10 mr-10 rounded-lg shadow-lg bg-slate-100 sm:p-3 ">
                                <div class="card">
                                    <div class=" card-header">
                                            <p class="text-lg ">T:</p>
                                    </div>
                                </div>
                            </div>
                                <p class="mb-0 text-lg ">Total User:  </p>
                        </div>
                    </div>
                </div>
                <div class="grid flex-grow mx-4 mb-4 bg-white rounded-lg shadow-lg sm:p-3 ">
                    <div class="card">
                        <div class="p-3 card-header">
                            <div class="flex mb-4 ml-10 mr-10 rounded-lg shadow-lg bg-slate-100 sm:p-3 ">
                                <div class="card">
                                    <div class=" card-header">
                                            <p class="text-lg ">T:</p>
                                    </div>
                                </div>
                            </div>
                                <p class="mb-0 text-lg ">Today's Report: </p>
                        </div>
                    </div>
                </div>
                <div class="grid flex-grow mx-4 mb-4 bg-white rounded-lg shadow-lg sm:p-3 ">
                    <div class="card">
                        <div class="p-3 card-header">
                            <div class="flex mb-4 ml-10 mr-10 rounded-lg shadow-lg bg-slate-100 sm:p-3 ">
                                <div class="card">
                                    <div class=" card-header">
                                            <p class="text-lg ">T:</p>
                                    </div>
                                </div>
                            </div>
                                <p class="mb-0 text-lg ">This Month Report:</p>
                        </div>
                    </div>
                </div>
                <div class="grid flex-grow mx-4 mb-4 bg-white rounded-lg shadow-lg sm:p-3 ">
                    <div class="card">
                        <div class="p-3 card-header">
                            <div class="flex mb-4 ml-10 mr-10 rounded-lg shadow-lg bg-slate-100 sm:p-3 ">
                                <div class="card">
                                    <div class=" card-header">
                                            <p class="text-lg ">T:</p>
                                    </div>
                                </div>
                            </div>
                                <p class="mb-0 text-lg ">Reports Settled:</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid flex-grow mx-4 mb-4 bg-white rounded-lg shadow-lg sm:p-3 ">
        <div class="card">
            <div class="p-3 card-header">
                    <p class="mb-0 text-lg text-gray-900">All Reports:</p><br>

            </div>
        </div>
    </div>

    </div>
</body>
</html>
</x-admin-layout>
