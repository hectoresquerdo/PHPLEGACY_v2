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
                <h1 class="m-0">DAM teacher Panel</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/logout') }}">Logout</a></li>
                    <li class="breadcrumb-item"><a href="#">User Profile</a></li>

                </ol>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="wrapper">

    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="navbar-toggler-icon"></span>
                        </button> <a class="navbar-brand" href="http://localhost/calendarv2/public/eventos">Calendar</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="navbar-toggler-icon"></span>
                        </button> <a class="navbar-brand" href="{{ route('teacherDAM.students.index') }}">Students</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="navbar-toggler-icon"></span>
                        </button> <a class="navbar-brand" href="{{ route('teacherDAM.schedules.index') }}">Subjects</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="navbar-toggler-icon"></span>
                        </button> <a class="navbar-brand" href="{{ route('teacherDAM.exams.create') }}">Exams</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="navbar-toggler-icon"></span>
                        </button> <a class="navbar-brand" href="{{ route('teacherDAM.works.index') }}">Works</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="navbar-toggler-icon"></span>
                        </button> <a class="navbar-brand" href="{{ route('teacherDAM.index') }}">DAM Panel</a>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="navbar-nav ml-md-auto">

                            </ul>
                        </div>
                    </nav>
                    <div class="jumbotron">


                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Students List</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <table id="categories" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>

                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th>Name</th>
                                                        <th>Surname</th>
                                                        <th>Telelphone</th>
                                                        <th>Nif</th>
                                                        <th>Course</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($students as $student)
                                                        <tr>


                                                            <td>{{ $student->username }}</td>
                                                            <td>{{ $student->email }}</td>
                                                            <td>{{ $student->name }}</td>
                                                            <td>{{ $student->surname }}</td>
                                                            <td>{{ $student->telephone }}</td>
                                                            <td>{{ $student->nif }}</td>
                                                            <td>{{ $student->course }}</td>


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
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

</body>




</html>
