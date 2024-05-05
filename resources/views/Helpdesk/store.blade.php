<x-app-layout>

    <head>
        <title>Report</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <div class="py-12 overflow-hidden overflow-x-auto overflow-y-auto">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">

                <body>
        <div class="sweet-alert">
            <style>
                body {
                    font-family: "Open Sans",
                    -apple-system,
                    BlinkMacSystemFont,
                    "Segoe UI",
                    "Helvetica Neue",
                    Helvetica, Arial, sans-serif;
                }
            </style>
            @if(session('status') == 'sweet-alert')
            <script>
            Swal.fire({
                position: "mid",
                icon: "success",
                title: "Your work has been deleted",
                showConfirmButton: false,
                timer: 1500
              });
              </script>
              @endif
        </div>


        <div class="sweet-alert">
            <style>
                body {
                    font-family: "Open Sans",
                    -apple-system,
                    BlinkMacSystemFont,
                    "Segoe UI",
                    "Helvetica Neue",
                    Helvetica, Arial, sans-serif;
                }
            </style>
            @if(session('status') == 'sweet-alert')
            <script>
            const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: "btn btn-success",
    cancelButton: "btn btn-danger"
  },
  buttonsStyling: false
});
swalWithBootstrapButtons.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel!",
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire({
      title: "Deleted!",
      text: "Your file has been deleted.",
      icon: "success"
    }).then(() => {
        window.location.href = '{{ route('helpdesk.store') }}';
    });
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire({
      title: "Cancelled",
      text: "Your imaginary file is safe :)",
      icon: "error"
    }).then(() => {
        window.location.href = '{{ route('helpdesk.store') }}';
    });
  }
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
