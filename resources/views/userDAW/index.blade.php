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
                        <h1 class="m-0">DAW Student Panel</h1>
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

        <!-- Main content -->
        <div class='container'>
            <div class="row">

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Evaluation Panel</h5>
                            <p class="card-text">Here you can view your Evaluation</p>
                            <a href="{{ route('userDAW.evaluation.view') }}" class="btn btn-primary">Evaluation
                                Panel</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Works Panel</h5>
                            <p class="card-text">Here you view your Works marks!</p>
                            <a href="{{ route('userDAW.works.index') }}" class="btn btn-primary">Works Panel</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Exams Panel</h5>
                            <p class="card-text">Here you view your Exams marks!</p>
                            <a href="{{ route('userDAW.exams.index') }}" class="btn btn-primary">Exams Panel</a>
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
            </div>

        </div>
        <div class='container'>
            <!-- /.content-wrapper -->



</html>
