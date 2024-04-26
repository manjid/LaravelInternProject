<x-app-layout>

    <head>
        <title>Show Specific Report</title>
    </head>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('helpdesk.store') }}"> Back</a>
                <div class="py-12 overflow-hidden overflow-x-auto overflow-y-auto">
                    <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
                        <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">

    <body>
    <table class="table text-center justify-content-center">
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
            <td>{{ $report->Description }}</td>
        </tr>
    </table>
</body>
                        </div>
                    </div>
                </div>
</x-app-layout>
