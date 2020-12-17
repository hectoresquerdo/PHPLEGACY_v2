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
                <h1 class="m-0">DAM Student Panel</h1>
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
                    </button> <a class="navbar-brand" href="http://localhost/calendarv2/public/eventos">Calendar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="{{ route('userDAM.evaluation.view') }}">Evaluation</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="{{ route('userDAM.exams.index') }}">Exams</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="{{ route('userDAM.works.index') }}">Works</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="{{ route('userDAM.index') }}">DAM Student Panel</a>
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
                                    <div class="card">
                                        <div class="card-header warning">
                                            Remember!
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Evaluation grade conditions:</h5>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-dark">
                                                    The evaluation mark is made up of 40% of the work and 60% of the
                                                    partial exam, this forms 60% of the final mark.</li>
                                                <li class="list-group-item list-group-item-dark">

                                                    If you see any error in the data, please, talk to the teacher of the
                                                    subject.</li>
                                                <li class="list-group-item list-group-item-success">
                                                    If you have a passed evaluation grade, you can go to the final
                                                    exam.
                                                </li>
                                                <li class="list-group-item list-group-item-danger"> If you have not
                                                    done
                                                    any of the parts, the exam or the work, you are
                                                    suspended and do not have an evaluation grade.</li>
                                                </li>
                                                <li class="list-group-item list-group-item-danger">
                                                    If you have done the two tests and do not have the grade, it may be
                                                    that the teacher has not yet posted them.</li>
                                                </li>

                                        </div>
                                        </ul>
                                    </div>
                                    <div class="card-header">
                                        <h3 class="card-title">Evaluation List</h3>
                                    </div>

                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="categories" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>

                                                    <th>Id Student</th>
                                                    <th>Subject</th>
                                                    <th>Student Name</th>
                                                    <th>Exam Name</th>
                                                    <th>Exam Mark</th>
                                                    <th>Work Name</th>
                                                    <th>Work Mark</th>
                                                    <th>Evaluation Grade</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($evaluations as $evaluation)
                                                    <tr>


                                                        <td>{{ $evaluation->id }}</td>
                                                        <td>{{ $evaluation->name }}</td>
                                                        <td>{{ $evaluation->id_class }}</td>
                                                        <td>{{ $evaluation->exam_name }}</td>
                                                        <td>{{ $evaluation->exam_mark }}</td>
                                                        <td>{{ $evaluation->work_name }}</td>
                                                        <td>{{ $evaluation->work_mark }}</td>
                                                        <td>{{ $evaluation->Evaluation_grade }}</td>



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
