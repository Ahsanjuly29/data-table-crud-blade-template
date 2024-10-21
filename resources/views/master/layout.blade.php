<!DOCTYPE html>
<html>

<head>
    <title>Laravel Crud Operation laravel amit</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet"
        type="text/css">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"
        type="text/css" />

    <style>
        table {
            text-align: center !important;
        }
    </style>
    @yield('custom-css')
</head>

<body class="bg-secondary text-white">

    <div class="container my-5">
        <hr>
        @yield('content')
        <hr>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>

@if (session()->has('success'))
    <script>
        toastr.success("{{ session()->get('success') }}");
    </script>
@endif

@if ($errors->any())
    {{-- <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
    </div> --}}
    @foreach ($errors->all() as $error)
        <script>
            toastr.error("{{ $error }}")
        </script>
    @endforeach
@endif

<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-example1').DataTable({
            responsive: true
        });
    });
</script>

@yield('custom-js')

</html>
