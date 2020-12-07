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
        alert("Register changed!");
    }

    </script>
@stop

    @section('content_header')
    <h1>Modify Schedule </h1>
@stop


@section('content')

    <form class="form-horizontal" action="{{ url('/admin/schedules/'.$schedule->id) }}" method="POST" enctype="multiplart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
        <div class="form-group">
            <label class="control-label" for="id_class">{{'Id Class'}}</label>
            <input class="form-control" type="text" name="id_class" id="id_class" value="{{ $schedule->id_class}}">
        </div>

        <div class="form-group">
            <label class="control-label" for="time_start">{{'Time Start'}}</label>
            <input class="form-control" type="datetime-local" name="time_start" id="time_start" value="{{ $schedule->time_start}}">
        </div>
         <div class="form-group">
            <label class="control-label" for="time_end">{{'Time End'}}</label>
            <input class="form-control" type="datetime-local" name="time_end" id="time_end" value="{{ $schedule->time_end}}">
        </div>
          <div class="form-group">
            <label class="control-label" for="day">{{'Day'}}</label>
            <input class="form-control" type="date" name="day" id="day" value="{{ $schedule->day}}">
        </div>

         <div class="form-group">
            <label class="control-label" for="course">{{'Course'}}</label>
            <input class="form-control" type="text" name="course" id="course" value="{{ $schedule->course}}" >
        </div>
          <div class="form-group">
            <label class="control-label" for="colour">{{'Colour'}}</label>
            <input class="form-control" type="text" name="colour" id="colour" value="{{ $schedule->colour}}" >
        </div>
          <div class="form-group">
            <label class="control-label" for="teacher">{{'Teacher'}}</label>
            <input class="form-control" type="text" name="teacher" id="teacher" value="{{ $schedule->teacher}}" >
        </div>

            <input  type="submit" class="btn btn-secondary" value="Update" onclick="MyPop()">
            <a class="btn btn-secondary" href="{{ url('/admin/schedules/create')}}">Return</a>

    </form>




@endsection
