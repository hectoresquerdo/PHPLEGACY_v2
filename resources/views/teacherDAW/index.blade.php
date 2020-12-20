<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('scripts')
</head>

<div class="wrapper">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 855px;">
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
                            <li class="breadcrumb-item"><a href="{{ route('profile.create') }}">User Profile</a>

                        </ol>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class='container'>
            <div class="row">

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Subjects Panel</h5>
                            <p class="card-text">Here you can view the Subjects of your Course!</p>
                            <a href="{{ route('teacherDAW.schedules.index') }}" class="btn btn-primary">Subjects
                                Panel</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Students Panel</h5>
                            <p class="card-text">Here you can view the Students of your Course!</p>
                            <a href="{{ route('teacherDAW.students.index') }}" class="btn btn-primary">Students
                                Panel</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Works Panel</h5>
                            <p class="card-text">Here you can create, update, modify, delete and store this panel!</p>
                            <a href="{{ route('teacherDAW.works.index') }}" class="btn btn-primary">Works Panel</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Exams Panel</h5>
                            <p class="card-text">Here you can create, update, modify, delete and store this panel!</p>
                            <a href="{{ route('teacherDAW.exams.index') }}" class="btn btn-primary">Exams Panel</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Calendar</h5>
                            <p class="card-text">Here you can see the actual Calendar</p>
                            <a href="http://localhost/calendarv2/public/eventos" class="btn btn-primary">Calendar</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Notifications</h5>
                            <p class="card-text">When you have a new Mark, you can notify your students!</p>
                            <a href="{{ route('teacherDAW.notifications') }}" class="btn btn-primary">Notifications</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class='container'>
            <!-- /.content-wrapper -->



</html>
