
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {


            initialDate: '2020-11-01',
            initialView: 'dayGridMonth',
            nowIndicator: true,
            headerToolbar: {
            left: 'prev,next today, Button, ModalButton',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
            navLinks: true,
            editable: true,
            selectable: true,
            selectMirror: true,
            dayMaxEvents: true,
            customButtons:{
                Button:{
                    text:"Return",
                    click:function(){
                        location.href = "https://www.google.com/"
                    }
                },
                ModalButton:{
                    text: "Events",
                    click:function(){
                    $('#exampleModal').modal('toggle');

                    }
                }
            },
            dateClick:function(info){

                cleanForm();

                $('#txtDate').val(info.dateStr);
                $("#btnAdd").prop("disabled", false);
                $("#btnModify").prop("disabled", true);
                $("#btnDelete").prop("disabled", true);
                $('#exampleModal').modal();


            },
            eventClick: function(info){

                $("#btnAdd").prop("disabled", true);
                $("#btnModify").prop("disabled", false);
                $("#btnDelete").prop("disabled", false);

                $('#txtID').val(info.event.id)
                $('#txtTitle').val(info.event.title)

                mes = (info.event.start.getMonth()+1);
                dia = (info.event.start.getDate());
                anio = (info.event.start.getFullYear());

                mes = (mes<10)?"0"+mes:mes;
                dia = (dia<10)?"0"+dia:dia;

                minutos = info.event.start.getMinutes();
                hora= info.event.start.getHours();

                minutos = (minutos<10)?"0"+minutos:minutos;
                hora = (hora<10)?"0"+hora:hora;

                horario = (hora+":"+minutos);


                $('#txtDate').val(anio+"-"+mes+"-"+dia)
                $('#txtHour').val(horario)
                $('#txtColor').val(info.event.backgroundColor)
                $('#txtDescription').val(info.event.extendedProps.descripcion)
                $('#exampleModal').modal();
            },

            events: url_show

        });

        calendar.render();

        $('#btnAdd').click(function(){
            objEvent=captionDatosGUI("POST");

            SendInfo ('', objEvent);
        });
        $('#btnDelete').click(function(){
            objEvent=captionDatosGUI("DELETE");

            SendInfo ('/'+$('#txtID').val(), objEvent);
        });
        $('#btnModify').click(function(){
            objEvent=captionDatosGUI("PATCH");

            SendInfo ('/'+$('#txtID').val(), objEvent);
        });

        function captionDatosGUI(method){

            newEvent={
                id:$('#txtID').val(),
                title:$('#txtTitle').val(),
                description:$('#txtDescription').val(),
                color:$('#txtColor').val(),
                textColor:'#FFFFF',
                start:$('#txtDate').val()+" "+$('#txtHour').val(),
                end:$('#txtDate').val()+" "+$('#txtHour').val(),
                '_token':$("meta[name='csrf-token']").attr("content"),
                '_method':method

            }
            return(newEvent);
        }
        function SendInfo (action, objEvent){
            $.ajax(
                {
                   type:"POST",
                   url: $url_+action,
                   data:objEvent,
                   success:function(msg){

                     $('#exampleModal').modal('toggle');
                     calendar.refetchEvents();

                     },
                   error:function(){alert("There are an error");}
                }
            );
        }
        function cleanForm(){
                $('#txtID').val("")
                $('#txtTitle').val("")
                $('#txtDate').val("")
                $('#txtHour').val("09:00")
                $('#txtColor').val("")
                $('#txtDescription').val("")

        }
      });
