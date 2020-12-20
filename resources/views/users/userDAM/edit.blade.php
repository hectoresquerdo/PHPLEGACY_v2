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
                    <form class="form-horizontal" action="{{ url('/admin/profile/' . $user->id) }}" method="POST"
                        enctype="multiplart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="form-group">
                            <label class="control-label" for="username">{{ 'Username' }}</label>
                            <input class="form-control" type="text" name="username" id="username"
                                value="{{ $user->username }}">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="email">{{ 'Email' }}</label>
                            <input class="form-control" type="text" name="email" id="email" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="password">{{ 'Password' }}</label>
                            <input class="form-control" type="password" name="password" id="password"
                                value="{{ $user->password }}">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="notifications">{{ 'Notifications' }}</label>
                            <select class="form-control" type="text" name="notifications" id="notifications"
                                value="{{ $user->notifications }}">
                                <option>YES</option>
                                <option>NO</option>
                            </select>
                        </div>

                        <input type="submit" class="btn btn-secondary" value="Update" onclick="MyPop()">
                        <a class="btn btn-secondary" href="{{ url('/admin/profile/create') }}">Return</a>

                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

</body>
