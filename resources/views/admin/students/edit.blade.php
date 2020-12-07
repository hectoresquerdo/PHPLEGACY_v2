@extends('adminlte::page')

@section('title', 'Admin - Students Panel')

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
    <h1>Modify Student </h1>
@stop


@section('content')

    <form class="form-horizontal" action="{{ url('/admin/students/'.$student->id) }}" method="post" enctype="multiplart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
         <div class="form-group">
            <label class="control-label" for="username">{{'Username'}}</label>
            <input class="form-control" type="text" name="username" id="username" value="{{ $student->username}}">
        </div>

        <div class="form-group">
            <label class="control-label" for="pass">{{'Pass'}}</label>
            <input class="form-control" type="text" name="pass" id="pass" value="{{ $student->pass}}">
        </div>

         <div class="form-group">
            <label class="control-label" for="email">{{'Email'}}</label>
            <input class="form-control" type="text" name="email" id="email" value="{{ $student->email}}" >
        </div>

         <div class="form-group">
            <label class="control-label" for="name">{{'Name'}}</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ $student->name}}" >
        </div>

        <div class="form-group">
            <label class="control-label" for="surname">{{'Surname'}}</label>
            <input class="form-control" type="text" name="surname" id="surname" value="{{ $student->surname}}">
        </div>
          <div class="form-group">
            <label class="control-label" for="telephone">{{'Telephone'}}</label>
            <input class="form-control" type="text" name="telephone" id="telephone" value="{{ $student->telephone}}">
        </div>
         </div>
          <div class="form-group">
            <label class="control-label" for="nif">{{'Nif'}}</label>
            <input class="form-control" type="text" name="nif" id="nif" value="{{ $student->nif}}">
        </div>
           <div class="form-group">
            <label class="control-label" for="date_registered">{{'Date Registered'}}</label>
            <input class="form-control" type="datetime-local" name="date_registered" id="date_registered" value="{{ $student->date_registered}}">
        </div>

            <input  type="submit" class="btn btn-secondary" value="Update" onclick="MyPop()">
            <a class="btn btn-secondary" href="{{ url('/admin/students/create')}}">Return</a>

    </form>




@endsection
