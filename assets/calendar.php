<?php

    session_start();

    $nombre = $_SESSION['nombre'];
    $usuario = $_SESSION['id'];


    try{
     $pdo=new PDO("mysql:dbname=php;host=localhost","root","");
     $sth= $pdo->query('SELECT * FROM schedule');

     $curso= $pdo->query('SELECT course FROM schedule');
          
    }catch(PDOException $e){
        echo "No conectado";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Calendario PHP-LEGACY</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src='http://localhost/phpcalendar/assets/js/jquery.min.js'></script>
        
        <script src='http://localhost/phpcalendar/assets/js//moment.min.js'></script>

        <!-- Full calendar-->
        <link rel="stylesheet" href="http://localhost/phpcalendar/assets/css/fullcalendar.min.css">
        <script src='http://localhost/phpcalendar/assets/js/fullcalendar.js'></script>
       

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      

    </head>
    <body>
        <div class="calendar-container">
          <div>
            <br></br>

            <?php if($nombre == "admin") { ?>
                 <form action="http://localhost/phpcalendar/admin/adminpanel.php">
                     <input type="submit" value="Return" />
                </form> 
            <?php } ?>
            <?php if($nombre !== "admin") { ?>
                 <form action="http://localhost/phpcalendar/admin/userpage.php">
                     <input type="submit" value="Return" />
                </form> 
            <?php } ?>
            
            <div class="row">
                <div class="col"></div>
                <div class="col-7"><div id="CalendarioWeb"></div></div>
                <div class="col"></div>
            </div>
        </div>
        </div>
        
    <script>
        $(document).ready(function(){
            $('#CalendarioWeb').fullCalendar({
                
                header:{
                    left:'today, prev, next',
                    center:'title',
                    right:'month,basicWeek, basicDay,agendaWeek,agendaDay'
                },
                
                dayClick:function(date,jsEvent,view){
                    alert("Valor seleccionado: "+date.format());
                    alert("Vista actual: "+view.name);
                    $(this).css('background-color', 'Aquamarine');
                    $('#EventosModal').modal();
                },
                dayClick:function(date, jsEvent, view){
                    $('#txtFecha').val(date.format());
                    $('#EventosModal').modal();
                },
                events:[
                    <?php
                        foreach($sth as $fila){
                        ?>
                             {
                                id:"<?php echo $fila["id_schedule"];?>",
                                title:"<?php echo $fila["id_class"];?>",
                                start:"<?php echo $fila["time_start"];?>",
                                end:"<?php echo $fila["time_end"];?>",
                                color:"<?php echo $fila["colour"];?>",
                                
                             },
                     <?php }?>
                             ]

            });
        });
    </script>
    

     </body>
</hmtl>