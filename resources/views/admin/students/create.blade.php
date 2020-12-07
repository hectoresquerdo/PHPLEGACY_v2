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
@stop

    @section('content_header')
    <h1>Students Section: Create and modify Students </h1>
@stop


@section('content')


    <form action="{{ url('/admin/students') }}" method="post" enctype="multiplart/form-data">
    {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label" for="username">{{'Username'}}</label>
            <input class="form-control" type="text" name="username" id="username" value="">
        </div>

        <div class="form-group">
            <label class="control-label" for="pass">{{'Pass'}}</label>
            <input class="form-control" type="text" name="pass" id="pass" value="">
        </div>

         <div class="form-group">
            <label class="control-label" for="email">{{'Email'}}</label>
            <input class="form-control" type="text" name="email" id="email" value="" >
        </div>

         <div class="form-group">
            <label class="control-label" for="name">{{'Name'}}</label>
            <input class="form-control" type="text" name="name" id="name" value="" >
        </div>

        <div class="form-group">
            <label class="control-label" for="surname">{{'Surname'}}</label>
            <input class="form-control" type="text" name="surname" id="surname" value="">
        </div>
          <div class="form-group">
            <label class="control-label" for="telephone">{{'Telephone'}}</label>
            <input class="form-control" type="text" name="telephone" id="telephone" value="">
        </div>
         </div>
          <div class="form-group">
            <label class="control-label" for="nif">{{'Nif'}}</label>
            <input class="form-control" type="text" name="nif" id="nif" value="">
        </div>
           <div class="form-group">
            <label class="control-label" for="date_registered">{{'Date Registered'}}</label>
            <input class="form-control" type="datetime-local" name="date_registered" id="date_registered" value="">
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
                    <h3 class="card-title">Students List</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                    <thead>
                        <tr>

                            <th>Username</th>
                            <th>Pass</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Telelphone</th>
                            <th>Nif</th>
                            <th>Date registered</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>


                            <td>{{$student->username}}</td>
                            <td>{{$student->pass}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->surname}}</td>
                            <td>{{$student->telephone}}</td>
                            <td>{{$student->nif}}</td>
                            <td>{{$student->date_registered}}</td>

                            <td>
                                <a class="btn btn-secondary" href="{{ url('/admin/students/'.$student->id.'/edit') }}"> Modify</a>
                            </td>
                            <td>
                                <form method="post" action="{{ url('/admin/students/'.$student->id) }}">
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
