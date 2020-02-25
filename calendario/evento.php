<?php



date_default_timezone_set("America/Santiago");
include 'funciones.php';
include 'config.php';
if (isset($_POST['from'])) 
{

    if ($_POST['from']!="" AND $_POST['to']!="") 
    {


        $inicio = _formatear($_POST['from']);

        $final  = _formatear($_POST['to']);

        $inicio_normal = $_POST['from'];

        $final_normal  = $_POST['to'];

        $titulo = evaluar($_POST['title']);

       /* $body   = evaluar($_POST['event']);*/

        $clase  = evaluar($_POST['class']);

        $query="INSERT INTO eventos VALUES(null,'$titulo','','$clase','$inicio','$final','$inicio_normal','$final_normal')";

        $conexion->query($query); 

        $im=$conexion->query("SELECT MAX(id) AS id FROM eventos");
        $row = $im->fetch_row();  
        $id = trim($row[0]);


        $link = "$base_url"."descripcion_evento.php?id=$id";

  
        $query="UPDATE eventos SET url = '$link' WHERE id = $id";

   
        $conexion->query($query); 


        header("Location:$base_url"); 
    }
}

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <title>Calendario</title>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$base_url?>css/calendar.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="<?=$base_url?>js/es-ES.js"></script>
        <script src="<?=$base_url?>js/jquery.min.js"></script>
        <script src="<?=$base_url?>js/moment.js"></script>
        <script src="<?=$base_url?>js/bootstrap.min.js"></script>
        <script src="<?=$base_url?>js/bootstrap-datetimepicker.js"></script>
        <link rel="stylesheet" href="<?=$base_url?>css/bootstrap-datetimepicker.min.css" />
       <script src="<?=$base_url?>js/bootstrap-datetimepicker.es.js"></script>
    </head>


<style>
    
body{


    background-image: url(images/fondo.jpg);



}
  
</style>

<body >

        <div class="container">
<center>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
<center><font color="black" face="Algerian" size="7" >CALENDARIO CHIPHYSI PROGRAMACION</font></center>
                                <br>
                                <br>
<center><font color="black" face="Algerian" size="5" >Aqui Agregaras Los Eventos Importantes Que Tienes</font></center>
                                <br>
                                <br>
                <div class="row">

                        <div class="page-header"><h2></h2></div>
                        <!--
                                <div class="pull- form-inline"><br>
                                        <div class="btn-group">
                                            <button class="btn btn-warning" data-calendar-nav="prev"><< Anterior</button>
                                            <button class="btn btn-primary" data-calendar-nav="today">Hoy</button>
                                            <button class="btn btn-warning" data-calendar-nav="next">Siguiente >></button>
                                        </div><br><br>
                                        <div class="btn-group">
                                            <button class="btn btn-info" data-calendar-view="year">Año</button>
                                            <button class="btn btn-info active" data-calendar-view="month">Mes</button>
                                            <button class="btn btn-info" data-calendar-view="week">Semana</button>
                                            <button class="btn btn-info" data-calendar-view="day">Dia</button>
                                        </div>
-->
                                </div>


                                    <button class="btn btn-success" data-toggle='modal' data-target='#add_evento'>

<font color="black" face="Algerian" size="7" >
                                        Añadir Evento
</font>

                                    </button>
                          


                                    <a href="calendario.php">
                                    <button class="btn btn-info" data-toggle='modal' data-target='#add_evento'>

<font color="black" face="Algerian" size="7" >
                                        Calendario
</font>
                                    </button>
                                    </a>




                </div><hr>
</center>
                <div class="row">
                        <div id="calendar"></div> <!-- Aqui se mostrara nuestro calendario -->
                        <br><br>
                </div>

                <!--ventana modal para el calendario-->
                <div class="modal fade" id="events-modal">
                    <div class="modal-dialog">
                            <div class="modal-content">
                                    <div class="modal-body" style="height: 400px">
                                        <p>One fine body&hellip;</p>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
        </div>

<div class="modal fade" id="add_evento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Agregar nuevo evento</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
                    <label for="from">Inicio</label>
                    <div class='input-group date' id='from'>
                        <input type='text' id="from" name="from" class="form-control" readonly />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>

                    <br>

                    <label for="to">Final</label>
                    <div class='input-group date' id='to'>
                        <input type='text' name="to" id="to" class="form-control" readonly />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>

                    <br>

                    <label for="tipo">Selecciona el tipo de comidas que gustes</label>
                    <select class="form-control" name="class" id="tipo">
                        <option value="Solo Desayuno">Solo Desayuno</option>
                        <option value="Solo Comida">Solo Comida</option>
                        <option value="Desayuno & Comida">Desayuno & Comida</option>
                        <option value="Ninguno">Ninguno</option>
                       
                    </select>

                    <br>


                    <label for="title">Usuario</label>
                    <input type="text" required autocomplete="off" name="title" class="form-control" id="title" placeholder="Introduce un título">

                    <br>


                   
    <script type="text/javascript">
        $(function () {
            $('#from').datetimepicker({
                language: 'es',
                minDate: new Date()
            });
            $('#to').datetimepicker({
                language: 'es',
                minDate: new Date()
            });

        });
    </script>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Agregar</button>
        </form>
    </div>
  </div>
</div>
</div>
</body>
</html>
