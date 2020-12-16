@extends('adminlte::page')

@section('title', 'Admin - Course Panel')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @ensection

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
@stop

@section('content_header')
    <h1>Admin Panel</h1>
@stop


@section('content')


    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Courses Panel</h5>
                    <p class="card-text">Here you can create, update, modify, delete and store this panel!</p>
                    <a href="http://localhost/calendarv2/public/admin/courses/create" class="btn btn-primary">Courses
                        Panel</a>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Student panel</h5>
                    <p class="card-text">Here you can create, update, modify, delete and store this panel!</p>
                    <a href="http://localhost/calendarv2/public/admin/students/create" class="btn btn-primary">Student
                        Panel</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Subjects Panel</h5>
                    <p class="card-text">Here you can create, update, modify, delete and store this panel!</p>
                    <a href="http://localhost/calendarv2/public/admin/schedules/create" class="btn btn-primary">Subjects
                        Panel</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Works Panel</h5>
                    <p class="card-text">Here you can create, update, modify, delete and store this panel!</p>
                    <a href="http://localhost/calendarv2/public/admin/works/create" class="btn btn-primary">Works Panel</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Exams Panel</h5>
                    <p class="card-text">Here you can create, update, modify, delete and store this panel!</p>
                    <a href="http://localhost/calendarv2/public/admin/exams/create" class="btn btn-primary">Exams Panel</a>
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



@endsection
