<x-app-layout>

    <head>
        <title>Report</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <div class="py-12 overflow-hidden overflow-x-auto overflow-y-auto">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8 selection:h-[calc(100vh-140px)]">
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">

                <body>


        <div class="sweet-alert">
            <style>
                body {
                    font-family:
                    "Open Sans",
                    "Segoe UI",
                    "Helvetica Neue",
                    Helvetica,
                    Arial,
                    sans-serif;
                }
            </style>
            @if(session('status') == 'sweet-alert')
            <script>
                Swal.fire({
                    title: "Info!",
                    width: 400,
                    text: "Your report has been deleted.",
                    imageUrl: "image/iman-yazid-logo-removebg.png",
                    imageWidth: 300,
                    imageHeight: 200,
                    imageAlt: "Custom image",
                });
              </script>
              @endif
        </div>
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
</body>
</div>
</div>
</div>
</html>
</x-app-layout>
