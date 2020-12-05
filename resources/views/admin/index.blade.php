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
    <h1>Index
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-category">
        Crear
    </button>
</h1>
@stop


@section('content')

 <p>Create and modify Courses</p>


    <form action="{{ url('/admin') }}" method="post" enctype="multiplart/form-data">
{{ csrf_field() }}
   <label for="name">{{'Name'}}</label>
   <input type="text" name="name" id="name" value="">
   </br>
     <label for="description">{{'Description'}}</label>
   <input  type="text" name="description" id="description" value="">
   </br>
     <label for="date_start">{{'Date start'}}</label>
   <input  type="date" name="date_start" id="date_start" value="">
   </br>
     <label for="date_end">{{'Date end'}}</label>
   <input type="date" name="date_end" id="date_end" value="">
   </br>
     <label for="active">{{'Active'}}</label>
   <input  type="text" name="Active" id="Active" value="">
   </br>
   <input type="submit" value="Add">
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
                            <th>Actions</th>
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

                                <form method="post" action="{{ url('/admin/'.$course->id) }}">
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
