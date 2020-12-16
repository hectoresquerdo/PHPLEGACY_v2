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

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="#">Calendar</a>
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

                            <ul class="navbar-nav ml-md-auto">

                            </ul>
                    </div>
                </nav>
                <div class="jumbotron">


                    <form action="{{ url('/admin/works') }}" method="post" enctype="multiplart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label" for="id_class">{{ 'Id class' }}</label>
                            <input class="form-control" type="text" name="id_class" id="id_class" value="">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="id_student">{{ 'Id student' }}</label>
                            <input class="form-control" type="number" name="id_student" id="id_student" value="">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="name">{{ 'Name' }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="mark">{{ 'Mark' }}</label>
                            <input class="form-control" type="number" name="mark" id="mark" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="course">{{ 'Course' }}</label>
                            <input class="form-control" type="text" name="course" id="course" value="DAM"
                                readonly='readonly'>
                        </div>

                        <input class="btn btn-secondary" type="submit" value="Add">
                        </br>
                    </form>
                    </br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Works List</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="categories" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>

                                                    <th>Id_Class</th>
                                                    <th>Id_Student</th>
                                                    <th>Name</th>
                                                    <th>Mark</th>
                                                    <th>Course</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($works as $work)
                                                    <tr>


                                                        <td>{{ $work->id_class }}</td>
                                                        <td>{{ $work->id_student }}</td>
                                                        <td>{{ $work->name }}</td>
                                                        <td>{{ $work->mark }}</td>
                                                        <td>{{ $work->course }}</td>

                                                        <td>
                                                            <a class="btn btn-secondary"
                                                                href="{{ url('/admin/works/' . $work->id . '/edit') }}">
                                                                Modify</a>
                                                        </td>
                                                        <td>
                                                            <form method="post"
                                                                action="{{ url('/admin/works/' . $work->id) }}">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                                <button type="submit" class="btn btn-danger"
                                                                    onclick="return confirm('Do you want to delete this register?');">Delete</button>
                                                            </form>
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
