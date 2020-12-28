@extends('adminlte::page')

@section('title', 'Admin - Exams Panel')

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css">-->
@stop

@section('content_header')
    <h1>Exams Section: Create and modify Exams </h1>
@stop


@section('content')


    <form action="{{ url('/admin/exams') }}" method="post" enctype="multiplart/form-data">
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
            <input class="form-control" type="text" name="course" id="course" value="">
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
                        <h3 class="card-title">Exams List</h3>
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
                                    <th>Update</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($exams as $exam)
                                    <tr>


                                        <td>{{ $exam->id_class }}</td>
                                        <td>{{ $exam->id_student }}</td>
                                        <td>{{ $exam->name }}</td>
                                        <td>{{ $exam->mark }}</td>
                                        <td>{{ $exam->course }}</td>

                                        <td>
                                            <a class="btn btn-secondary"
                                                href="{{ url('/admin/exams/' . $exam->id . '/edit') }}"> Modify</a>
                                        </td>
                                        <td>
                                            <form method="post" action="{{ url('/admin/exams/' . $exam->id) }}">
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


@endsection
