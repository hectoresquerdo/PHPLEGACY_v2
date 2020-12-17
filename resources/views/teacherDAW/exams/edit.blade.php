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
                <h1 class="m-0">DAW teacher Panel</h1>
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
                    </button> <a class="navbar-brand" href="{{ route('teacherDAW.students.index') }}">Students</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="{{ route('teacherDAW.schedules.index') }}">Subjects</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="{{ route('teacherDAW.exams.index') }}">Exams</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="{{ route('teacherDAW.works.index') }}">Works</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="{{ route('teacherDAW.index') }}">DAW Panel</a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="navbar-nav ml-md-auto">

                        </ul>
                    </div>
                </nav>
                <div class="jumbotron">
                    <form class="form-horizontal" action="{{ url('/admin/exams/' . $exam->id) }}" method="post"
                        enctype="multiplart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="form-group">
                            <label class="control-label" for="id_class">{{ 'Id class' }}</label>
                            <input class="form-control" type="text" name="id_class" id="id_class"
                                value="{{ $exam->id_class }}">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="id_student">{{ 'Id student' }}</label>
                            <input class="form-control" type="number" name="id_student" id="id_student"
                                value="{{ $exam->id_student }}">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="name">{{ 'Name' }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ $exam->name }}">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="mark">{{ 'Mark' }}</label>
                            <input class="form-control" type="number" name="mark" id="mark" value="{{ $exam->Mark }}">
                        </div>


                        <input type="submit" class="btn btn-secondary" value="Update" onclick="MyPop()">
                        <a class="btn btn-secondary" href="{{ url('/admin/exams/create') }}">Return</a>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</div>

</html>
