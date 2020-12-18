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
            alert("Register changed!");
        }

    </script>
@stop

@section('content_header')
    <h1>Modify User Information </h1>
@stop


@section('content')

    <form class="form-horizontal" action="{{ url('/admin/profile/' . $user->id) }}" method="POST"
        enctype="multiplart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="form-group">
            <label class="control-label" for="username">{{ 'Username' }}</label>
            <input class="form-control" type="text" name="username" id="username" value="{{ $user->username }}">
        </div>

        <div class="form-group">
            <label class="control-label" for="email">{{ 'Email' }}</label>
            <input class="form-control" type="text" name="email" id="email" value="{{ $user->email }}">
        </div>

        <div class="form-group">
            <label class="control-label" for="password">{{ 'Password' }}</label>
            <input class="form-control" type="password" name="password" id="password" value="{{ $user->password }}">
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




@endsection
