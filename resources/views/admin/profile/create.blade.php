@extends('adminlte::page')

@section('title', 'Admin - Course Panel')

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css">-->
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#categories').DataTable({
                "order": [
                    [3, "desc"]
                ]
            });
        });

    </script>
    <script>
        function MyPop() {
            alert("Register added!");
        }

    </script>
@stop

@section('content_header')
    <h1>Accounts Settings</h1>
@stop


@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Username</th>
                                    <th>Password (encrypted)</th>
                                    <th>Notifications</th>
                                    <th>Course</th>
                                    <th>Modify</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perfiles as $perfil)
                                    <tr>
                                        <td>{{ $perfil->id }}</td>
                                        <td>{{ $perfil->name }}</td>
                                        <td>{{ $perfil->surname }}</td>
                                        <td>{{ $perfil->username }}</td>
                                        <td>{{ $perfil->password }}</td>
                                        <td>{{ $perfil->notifications }}</td>
                                        <td>{{ $perfil->course }}</td>

                                        <td>
                                            <a class="btn btn-secondary"
                                                href="{{ url('/admin/profile/' . $perfil->id . '/edit') }}">Update</a>
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>


@endsection
