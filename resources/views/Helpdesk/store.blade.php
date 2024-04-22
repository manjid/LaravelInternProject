<x-app-layout>

<head>
    <title>Report</title>
</head>
<div class="py-12 overflow-hidden overflow-x-auto overflow-y-auto">
    <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
        <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">

    <body>
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
                    <a class="btn btn-info" href="{{ route('helpdesk.show' , $report->id) }}">Show</a>
                    <a class="btn btn-info " href="{{ route('helpdesk.edit' , $report->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-warning ">Delete</button>
                </form>
            </td>
        </tr>

        @endforeach
    </table>
    {{ $reports->links() }}
</body>
</div>
</div>
</div>
</html>
</x-app-layout>
