@extends('adminlte::page')

@section('title', 'Admin - Works Panel')

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
    <h1>Modify Works</h1>
@stop


@section('content')

    <form class="form-horizontal" action="{{ url('/admin/works/'.$work->id) }}" method="post" enctype="multiplart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

         <div class="form-group">
            <label class="control-label" for="id_class">{{'Id class'}}</label>
            <input class="form-control" type="text" name="id_class" id="id_class" value="{{ $work->id_class}}">
        </div>

        <div class="form-group">
            <label class="control-label" for="id_student">{{'Id student'}}</label>
            <input class="form-control" type="number" name="id_student" id="id_student" value="{{ $work->id_student}}">
        </div>

         <div class="form-group">
            <label class="control-label" for="name">{{'Name'}}</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ $work->name}}" >
        </div>

         <div class="form-group">
            <label class="control-label" for="mark">{{'Mark'}}</label>
            <input class="form-control" type="number" name="mark" id="mark" value="{{ $work->Mark}}" >
        </div>


            <input  type="submit" class="btn btn-secondary" value="Update" onclick="MyPop()">
            <a class="btn btn-secondary" href="{{ url('/admin/students/create')}}">Return</a>

    </form>




@endsection
