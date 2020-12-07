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
        alert("Register changed!");
    }

    </script>
@stop

    @section('content_header')
    <h1>Modify Course </h1>
@stop


@section('content')

    <form class="form-horizontal" action="{{ url('/admin/courses'.$course->id) }}" method="post" enctype="multiplart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
        <div class="form-group">
            <label class="control-label" for="name">{{'Name'}}</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ $course->name}}">
        </div>

        <div class="form-group">
            <label class="control-label" for="description">{{'Description'}}</label>
            <input class="form-control" type="text" name="description" id="description" value="{{ $course->description}}">
        </div>

         <div class="form-group">
            <label class="control-label" for="date_start">{{'Date start'}}</label>
            <input class="form-control" type="date" name="date_start" id="date_start" value="{{ $course->date_start}}" required>
        </div>

         <div class="form-group">
            <label class="control-label" for="date_end">{{'Date end'}}</label>
            <input class="form-control" type="date" name="date_end" id="date_end" value="{{ $course->date_end}}" required>
        </div>

        <div class="form-group">
            <label class="control-label" for="active">{{'Active'}}</label>
            <input class="form-control" type="text" name="Active" id="Active" value="{{ $course->active}}">
        </div>

            <input  type="submit" class="btn btn-secondary" value="Update" onclick="MyPop()">
            <a class="btn btn-secondary" href="{{ url('/admin/courses/create')}}">Return</a>

    </form>




@endsection
