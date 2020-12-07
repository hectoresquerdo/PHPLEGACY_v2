@extends('adminlte::page')

@section('title', 'Admin - Schedule Panel')

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
    <h1>Schedule Section: Create and modify Schedules </h1>
@stop


@section('content')


    <form action="{{ url('/admin/schedules') }}" method="POST" enctype="multiplart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="control-label" for="id_class">{{'Id Class'}}</label>
            <input class="form-control" type="text" name="id_class" id="id_class" value="">
        </div>

        <div class="form-group">
            <label class="control-label" for="time_start">{{'Time Start'}}</label>
            <input class="form-control" type="datetime-local" name="time_start" id="time_start" value="">
        </div>
         <div class="form-group">
            <label class="control-label" for="time_end">{{'Time End'}}</label>
            <input class="form-control" type="datetime-local" name="time_end" id="time_end" value="">
        </div>
          <div class="form-group">
            <label class="control-label" for="day">{{'Day'}}</label>
            <input class="form-control" type="date" name="day" id="day" value="">
        </div>

         <div class="form-group">
            <label class="control-label" for="course">{{'Course'}}</label>
            <input class="form-control" type="text" name="course" id="course" value="" >
        </div>
          <div class="form-group">
            <label class="control-label" for="colour">{{'Colour'}}</label>
            <input class="form-control" type="text" name="colour" id="colour" value="" >
        </div>
          <div class="form-group">
            <label class="control-label" for="teacher">{{'Teacher'}}</label>
            <input class="form-control" type="text" name="teacher" id="teacher" value="" >
        </div>


            <input  type="submit" class="btn btn-secondary" value="Add" onclick="MyPop()">

</form>

 </br>

 <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Schedule List</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                    <thead>
                        <tr>

                            <th>Id</th>
                            <th>Time Start</th>
                            <th>Time End</th>
                            <th>Day</th>
                            <th>Course</th>
                            <th>Colour</th>
                            <th>Teacher</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($schedules as $schedule)
                        <tr>

                            <td>{{$schedule->id_class}}</td>
                            <td>{{$schedule->time_start}}</td>
                            <td>{{$schedule->time_end}}</td>
                            <td>{{$schedule->day}}</td>
                            <td>{{$schedule->course}}</td>
                            <td>{{$schedule->colour}}</td>
                            <td>{{$schedule->teacher}}</td>
                            <td>
                                <a class="btn btn-secondary" href="{{ url('/admin/schedules/'.$schedule->id.'/edit') }}"> Modify</a>
                            </td>
                            <td>
                                <form method="post" action="{{ url('/admin/schedules/'.$schedule->id) }}">
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
