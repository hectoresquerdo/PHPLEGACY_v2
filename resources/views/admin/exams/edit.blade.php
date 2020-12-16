@extends('adminlte::page')

@section('title', 'Admin - Exams Panel')

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
    <h1>Modify Exams</h1>
@stop


@section('content')

    <form class="form-horizontal" action="{{ url('/admin/exams/'.$exam->id) }}" method="post" enctype="multiplart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

         <div class="form-group">
            <label class="control-label" for="id_class">{{'Id class'}}</label>
            <input class="form-control" type="text" name="id_class" id="id_class" value="{{ $exam->id_class}}">
        </div>

        <div class="form-group">
            <label class="control-label" for="id_student">{{'Id student'}}</label>
            <input class="form-control" type="number" name="id_student" id="id_student" value="{{ $exam->id_student}}">
        </div>

         <div class="form-group">
            <label class="control-label" for="name">{{'Name'}}</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ $exam->name}}" >
        </div>

         <div class="form-group">
            <label class="control-label" for="mark">{{'Mark'}}</label>
            <input class="form-control" type="number" name="mark" id="mark" value="{{ $exam->Mark}}" >
        </div>


            <input  type="submit" class="btn btn-secondary" value="Update" onclick="MyPop()">
            <a class="btn btn-secondary" href="{{ url('/admin/exams/create')}}">Return</a>

    </form>




@endsection
