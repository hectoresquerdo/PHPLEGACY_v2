@extends('layouts.app')

@section('scripts')
    <link rel="stylesheet" href="{{ asset('fullcalendar/lib/main.css') }}">

    <script src="{{ asset('fullcalendar/lib/main.js') }}" defer></script>

    <script>
        var url_="{{ url('/eventos') }}";
        var url_show="{{ url('/eventos/show') }}";
    </script>

    <script src="{{ asset('js/main.js') }}" defer></script>

@endsection
@section('content')

<div class="row">
      <div class="col"></div>
      <div class="col-9"><div id="calendar"></div></div>
      <div class="col"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Event data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="d-none">
            ID:
            <input type="text" name="txtID" id="txtID">

            DATE:
            <input type="text" name="txtDate" id="txtDate">
            </div>


            <div class="form-row">

                 <div class="form-group col-8">
                    <label>Title:</label>
                    <input type="text" class="form-control" name="txtTitle" id="txtTitle">
                </div>

                <div class="form-group col-4">
                    <label>Hour:</label>
                    <input type="time" min="09:00" max="14:00" step="600" class="form-control" name="txtHour" id="txtHour" >

                 </div>

                    <label>Description:</label>
                    <textarea class="form-control" name="txtDescription" id="txtDescription" cols="30" rows="4"></textarea>


                <div class="form-group col-md-12">
                    <label>Color:</label>
                    <input type="color" class="form-control" name="txtColor" id="txtColor">
                <div>
            </div>
        </div>
        <div class="modal-footer">

          <button id="btnAdd" class="btn btn-success">Add</button>
          <button id="btnModify" class="btn btn-success">Modify</button>
          <button id="btnDelete" class="btn btn-danger">Delete</button>
          <button id="btnCancel" data-dismiss="modal" class="btn btn-secondary">Cancel</button>

       </div>
      </div>
    </div>
  </div>

@endsection
