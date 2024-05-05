<x-app-layout>
    <head>
        <title>Show Specific Report</title>
    </head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            white-space: normal;
        }

        th, td {
            overflow: hidden;
            text-overflow: ellipsis;
        }
        table{
            table-layout: fixed;
            word-wrap: break-word;
        }
    </style>
        <x-nav-link :href="route('helpdesk.store')" :active="request()->routeIs('helpdesk.store')" class=" ml-44 px-4 mt-10 transition ease-in-out delay-75 hover:-translate-y-2 hover:scale-105 btn bg-[#a50034] text-sm font-sans border-[#a50034] hover:bg-gray-200 hover:border-white hover:text-gray-900">
            <button>{{ __('Back') }}</button>
            </x-nav-link>
        <div class="py-12 h-[calc(100vh-210px)] overflow-hidden overflow-y-auto h">
            <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
                <div class="flex p-4 bg-white shadow sm:p-8 sm:rounded-lg ">
                    <table class="table text-center table-responsive justify-content-center">
                        <thead class=" bg-slate-300">
                            <tr class="text-lg text-gray-700">
                                <th>Title</th>
                                <th>Problem</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>{{ $report->title }}</td>
                            <td>{{ $report->problem }}</td>
                            <td>{{ $report->description }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</x-app-layout>

