@extends('adminlte::page')

@section('title', 'Admin - Course Panel')

@section('css')
    <!--<link rel="stylesheet" href="/css/admin_custom.css">-->
@stop

@section('js')
<script>
$(document).ready(function() {
    $('#categories').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
<script>
    function MyPop(){
        alert("Register added!");
    }

    </script>
@stop

    @section('content_header')
    <h1>Course Section: Create and modify Courses </h1>
@stop


@section('content')


    <form action="{{ url('/admin/courses') }}" method="POST" enctype="multiplart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="control-label" for="name">{{'Name'}}</label>
            <input class="form-control" type="text" name="name" id="name" value="">
        </div>

        <div class="form-group">
            <label class="control-label" for="description">{{'Description'}}</label>
            <input class="form-control" type="text" name="description" id="description" value="">
        </div>

         <div class="form-group">
            <label class="control-label" for="date_start">{{'Date start'}}</label>
            <input class="form-control" type="date" name="date_start" id="date_start" value="" required>
        </div>

         <div class="form-group">
            <label class="control-label" for="date_end">{{'Date end'}}</label>
            <input class="form-control" type="date" name="date_end" id="date_end" value="" required>
        </div>

        <div class="form-group">
            <label class="control-label" for="active">{{'Active'}}</label>
            <input class="form-control" type="text" name="Active" id="Active" value="">
        </div>
            <input  type="submit" class="btn btn-secondary" value="Add" onclick="MyPop()">

</form>

 </br>

 <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Course List</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Description</th>
                            <th>Date Start</th>
                            <th>Date End</th>
                            <th>Active</th>
                            <th>Update</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $course)
                        <tr>

                            <td>{{$course->name}}</td>
                            <td>{{$course->description}}</td>
                            <td>{{$course->date_start}}</td>
                            <td>{{$course->date_end}}</td>
                            <td>{{$course->active}}</td>
                            <td>
                                <a class="btn btn-secondary" href="{{ url('/admin/courses/'.$course->id.'/edit') }}"> Modify</a>
                            </td>
                            <td>
                                <form method="post" action="{{ url('/admin/courses/'.$course->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete this register?');">Delete</button>
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
