<?php
 include 'header.php';
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
    header('location: ../../index.php');
  }

?>

<html>
  <head>
	<meta charset="UTF-8">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="estilos.css" class="rel">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="estilos.css" class="rel">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>

  <body>
     
    <!-- Since we are using the class container, the below
        div will not take complete width of it's parent. -->
    <div class="container" style="background: #DDF7F2; border-radius: 0px 0px 10px 10px;">
      <table width="100%">
       
        <tr>
          <td colspan="2"><p>DESCRIPCIÓN DETALLADA.</p></td>
        </tr>
      </table>
    </div>

    <br/><br/>

    <div class="container" style="background: #EEF3FB; border-radius: 10px;">
      <br/>

      <form class="form-horizontal" action="./enviar.php" method="post">
        <!--div class="form-group">
          <label class="control-label col-sm-2" for="date">Fecha:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name = "date" id="date" placeholder="Fecha" value="" readonly>
          </div>
        </div-->
        <label for="nombre">Nombre del Empleado:</label>
    <select name="nombre" >
        <option value="<?php echo ($_SESSION['nombre']); ?>"><?php echo ($_SESSION['nombre']); ?></option>
     
        </select>

        <!--div class="form-group">
          <label class="control-label col-sm-2" for="nombre">Nombre del Empleado:</label>
          <div class="col-sm-10">
          
<input type="text" class="form-control" name = "nombre" id="nombre" placeholder=" " >
          </div>
        </div-->

         <div class="form-group">
          <label class="control-label col-sm-2" for="ref">Refacción:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name = "ref" id="ref" placeholder="Refacción">
          </div>
        </div>
        
       
    <label for="cat">Categoría:</label>
    <select name="cat" >
        <option value=""></option>
    <option value="consumible">Consumible</option>
    <option value="Elevadores">Elevadores</option>
    <option value="Equipo">Equipo</option>
    <option value="Herramienta">Herramienta</option>
     <option value="Insumos">Insumos</option>
      <option value="Protección personal">Protección personal</option>
       <option value="Refacción">Refacción</option>
        <option value="Suministro">Suministro</option>
        </select>
     
    
        
                <div class="form-group">
          <label class="control-label col-sm-2" for="med">Medidas:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name = "med" id="med" placeholder="metros,cm,mm,etc">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="color">Colores:</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="3" name = "color" id="color" placeholder="Especifica los colores"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="modelo">Modelo:</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="3" name = "modelo" id="modelo" placeholder="Modelo del producto"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="serie">No. Serie:</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="3" name = "serie" id="serie" placeholder="T56GJ8"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="cali">CALIBRE:</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="3" name = "cali" id="cali" placeholder="6,50"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="vol">Volt´s o AMP</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="3" name = "vol" id="vol" placeholder="Coloca si el voltaje o AMP "></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="tipo">Tipo:</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="3" name = "tipo" id="tipo" placeholder=""></textarea>
          </div>
        </div>

        
        <div class="form-group">
          <label class="control-label col-sm-2" for="otro">Otros Detalles Particulares:</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="3" name = "otro" id="otro" placeholder="especifica si hay otra opcion a considerar del producto"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Enviar</button>
          </div>
        </div>
      
      <!--ESTE BOTON DIRIGIRA A CONSULTAR LOS DATOS-->
      <input type="button" onclick="location.href= 'consul.php'" value="Consulta Productos" name="boton" /> 
           
      </form>
      <br/>
    </div>

  </body>
</html>