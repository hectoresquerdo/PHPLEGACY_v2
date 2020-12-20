<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Exams') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    @yield('scripts')
</head>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Account Settings</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/logout') }}">Logout</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('profile.create') }}">User Profile</a></li>

                </ol>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">


                    </button> <a class="navbar-brand" href="{{ route('userDAM.index') }}">Return to Panel</a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="navbar-nav ml-md-auto">

                        </ul>
                    </div>
                </nav>
                <div class="jumbotron">
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
                                                            href="{{ url('/users/profile/' . $perfil->id . '/edit') }}">Update</a>
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
            </div>
        </div>
    </div>
    </div>

</body>
