@extends('master.layout')

@section('content')
    <div class="container">
        <h3 class="text-center">Bootstrap 4 Datatable</h3>
        <div class="my-4">
            <a class="btn btn-primary" href="{{ route('users.create') }}">
                Add New
            </a>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        DataTables Advanced Tables
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Detail</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr class="odd gradeX">
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->details }}</td>
                                            <td>
                                                <a class="btn btn-info w-50" href="{{ route('users.edit', $user->id) }}">
                                                    Edit
                                                </a>

                                                <form action="{{ route('users.destroy', $user->id) }}" class="deleteForm">
                                                </form>
                                                <a class="btn btn-danger deleteBtn w-50" href="#">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <script>
        $('.deleteBtn').on('click', function() {
            ('.deleteForm').submit();
        });
    </script>
@endsection
