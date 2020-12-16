@extends('adminlte::page')


<link rel="stylesheet" href="{{ asset('fullcalendar/lib/main.css') }}">
<link rel="stylesheet" href="{{ asset('fullcalendar/lib/main.css') }}">

<script src="{{ asset('fullcalendar/lib/main.js') }}" defer></script>
//<script src="{{ asset('fullcalendar/js/main.js') }}" defer></script>

<script>
    var $url_ = "{{ url('/eventos') }}"
    var $url_show = "{{ url('/eventos/show') }}";

</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {


            initialDate: '2020-12-01',
            initialView: 'dayGridMonth',
            nowIndicator: true,
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            navLinks: true,
            editable: true,
            selectable: true,
            selectMirror: true,
            dayMaxEvents: true,

            dateClick: function(info) {

                cleanForm();

                $('#txtDate').val(info.dateStr);
                $("#btnAdd").prop("disabled", false);
                $("#btnModify").prop("disabled", true);
                $("#btnDelete").prop("disabled", true);
                $('#exampleModal').modal();


            },
            eventClick: function(info) {

                $("#btnAdd").prop("disabled", true);
                $("#btnModify").prop("disabled", false);
                $("#btnDelete").prop("disabled", false);

                $('#txtID').val(info.event.id)
                $('#txtTitle').val(info.event.title)

                mes = (info.event.start.getMonth() + 1);
                dia = (info.event.start.getDate());
                anio = (info.event.start.getFullYear());

                mes = (mes < 10) ? "0" + mes : mes;
                dia = (dia < 10) ? "0" + dia : dia;

                minutos = info.event.start.getMinutes();
                hora = info.event.start.getHours();

                minutos = (minutos < 10) ? "0" + minutos : minutos;
                hora = (hora < 10) ? "0" + hora : hora;

                horario = (hora + ":" + minutos);


                $('#txtDate').val(anio + "-" + mes + "-" + dia)
                $('#txtHour').val(horario)
                $('#txtColor').val(info.event.backgroundColor)
                $('#txtDescription').val(info.event.extendedProps.descripcion)
                $('#exampleModal').modal();
            },

            events: "{{ url('/eventos/show') }}"

        });

        calendar.render();

        $('#btnAdd').click(function() {
            objEvent = captionDatosGUI("POST");

            SendInfo('', objEvent);
        });
        $('#btnDelete').click(function() {
            objEvent = captionDatosGUI("DELETE");

            SendInfo('/' + $('#txtID').val(), objEvent);
        });
        $('#btnModify').click(function() {
            objEvent = captionDatosGUI("PATCH");

            SendInfo('/' + $('#txtID').val(), objEvent);
        });

        function captionDatosGUI(method) {

            newEvent = {
                id: $('#txtID').val(),
                title: $('#txtTitle').val(),
                description: $('#txtDescription').val(),
                color: $('#txtColor').val(),
                textColor: '#FFFFF',
                start: $('#txtDate').val() + " " + $('#txtHour').val(),
                end: $('#txtDate').val() + " " + $('#txtHour').val(),
                '_token': $("meta[name='csrf-token']").attr("content"),
                '_method': method

            }
            return (newEvent);
        }

        function SendInfo(action, objEvent) {
            $.ajax({
                type: "POST",
                url: url_ + action,
                data: objEvent,
                success: function(msg) {

                    $('#exampleModal').modal('toggle');
                    calendar.refetchEvents();

                },
                error: function() {
                    alert("There are an error");
                }
            });
        }

        function cleanForm() {
            $('#txtID').val("")
            $('#txtTitle').val("")
            $('#txtDate').val("")
            $('#txtHour').val("09:00")
            $('#txtColor').val("")
            $('#txtDescription').val("")

        }
    });

</script>


@section('content')
    <div class="row">
        <div class="col"></div>
        <div class="col-9">
            <div id="calendar"></div>
        </div>
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
                            <input type="time" min="09:00" max="14:00" step="600" class="form-control" name="txtHour"
                                id="txtHour">

                        </div>


                        <div class="form-group col-md-12">
                            <label>Color:</label>
                            <input type="color" class="form-control" name="txtColor" id="txtColor" disabled>
                            <div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="btnAdd" data-dismiss="modal" class="btn btn-secondary">Add</button>
                            <button id="btnDelete" data-dismiss="modal" class="btn btn-secondary">Delete</button>
                            <button id="btnCancel" data-dismiss="modal" class="btn btn-secondary">Cancel</button>

                        </div>
                    </div>
                </div>
            </div>
        @endsection
