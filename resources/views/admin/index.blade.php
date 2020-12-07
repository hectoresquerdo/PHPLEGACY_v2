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
@stop

    @section('content_header')
    <h1>Admin Panel</h1>
@stop


@section('content')

<div class="card text-white bg-secondary mb-3" style="width: 18rem;">

  <div class="card-body">
    <h5 class="card-title">Courses Panel</h5>
    <p class="card-text">Here you can create, update, modify, delete and store this panel!</p>
    <a href="http://localhost/calendar/public/admin/courses/create" class="btn btn-primary">Go to Courses Panel</a>
  </div>
</div>

@endsection
