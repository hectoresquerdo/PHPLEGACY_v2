<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Works') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />


    @yield('scripts')
</head>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">DAW Teacher Panel</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/logout') }}">Logout</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('profile.create') }}">User Profile</a>

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


                    </button> <a class="navbar-brand" href="{{ route('teacherDAM.index') }}">DAW Panel</a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                        <ul class="navbar-nav ml-md-auto">

                        </ul>
                    </div>
                </nav>
                <div class="jumbotron">

                    </br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">



                                    <div class="card-body">
                                        <div class="card-body">
                                            <h5 class="card-title">Students notifications</h5>
                                        </div>
                                        <ul class="list-group">

                                            <li class="list-group-item list-group-item-dark">

                                                You can notify the students pushing the button under Notify column! When
                                                de page reload, the mail was sent!</li>

                                    </div>
                                    </ul>

                                    <div class="card-header">
                                        <h3 class="card-title">Evaluation List</h3>
                                    </div>

                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="categories" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>

                                                    <th>Id Student</th>
                                                    <th>Name</th>
                                                    <th>Id_Class</th>
                                                    <th>Exam Name</th>
                                                    <th>Exam Mark</th>
                                                    <th>Work Name</th>
                                                    <th>Work Mark</th>
                                                    <th>Notify</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($notifications as $notification)
                                                    <tr>


                                                        <td>{{ $notification->id }}</td>
                                                        <td>{{ $notification->name }}</td>
                                                        <td>{{ $notification->id_class }}</td>
                                                        <td>{{ $notification->exam_name }}</td>
                                                        <td>{{ $notification->exam_mark }}</td>
                                                        <td>{{ $notification->work_name }}</td>
                                                        <td>{{ $notification->work_mark }}</td>
                                                        <td>

                                                            <a class="btn btn-secondary" href="{{ url('/sendMail') }}">
                                                                <i class="fas fa-paper-plane"></i> </a>
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



</html>
