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
<html lang="en" dir="ltr">
    <!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
<link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
       
	
  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    
   

    <script type="text/javascript">

      function setDate(){
		var currentDate = new Date();
		var day = currentDate.getDate();
		var monthIndex = currentDate.getMonth();
		var year = currentDate.getFullYear();

		var inputFecha = document.getElementById("date");
		inputFecha.value = year + '-' + (monthIndex+1) + '-' + day;

        //inputFecha.value = new Date().toLocaleDateString();
        //document.write(new Date().toLocaleDateString());
        //alert("Done");
      }
    </script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script>
			$(function(){
		       $('#menu').click(function(){
			   $(this).next('#menu-content').slideToggle();
			   $(this).toggleClass('active');          
			   });
			});
		</script>
  </head>

  <body onload="setDate()">
    <!-- Since we are using the class container, the below
        div will not take complete width of it's parent. -->
   

    <br/><br/>
    

      <form class="form-horizontal" action="./submit.php" method="post">
        <div class="form-group">
          <label class="control-label col-sm-2" for="date">Fecha:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name = "date" id="date" placeholder="Fecha" value="" readonly>
          </div>
        </div><br><br>
        <!--intento clavar el email solo-->


        <div class="form-group">
        <label for="author" class ="control-label col-sm-2">Autor:</label>
        <div class="col-sm-10">
    <select name="author" >
        <option value="<?php echo ($_SESSION['nombre']); ?>"><?php echo ($_SESSION['nombre']); ?></option>
             </select>
             </div>
             </div>

         

<!--aqui para el email-->

<!--fin-->
	
        <!--div class="form-group">
          <label class="control-label col-sm-2" for="author">Autor:</label>
          <div class="col-sm-10">
         
            <input type="text" class="form-control" name = "author" id="author"  placeholder="">
          </div>
          
        </div-->
        <div class="form-group">
          <label class="control-label col-sm-2" for="desc">Descripción:</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="3" name = "desc" id="descr" placeholder="El cambio solicitado consiste en..."></textarea>
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" rows="3" name = "email" id="email" placeholder="empleado@gmail.com(outlook.com)">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="impacto">Impacto Directo:</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="3" name = "impacto" id="impacto" placeholder="Los elementos afectados por el cambio son..."></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="justif">Justificación:</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="3" name = "justif" id="justif" placeholder="El cambio se considera necesario por... "></textarea>
          </div>
        </div>
   
          <div class="form-group">
          <label class="control-label col-sm-2" for="proceso">Estado:</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="3" name = "proceso" id="proceso" placeholder="Coloca Solicitado "></textarea>
          </div>
        </div>
        
       <!--lo meti parfa subir archivos-->
       
 <!--input type="submit" value="Upload"-->
 

        <!--<div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Password:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div>
          </div>
        </div>-->
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Solicitar</button>
          </div>
        </div>
      <!--ESTE BOTON DIRIGIRA A CONSULTAR LOS DATOS-->
      <input type="button" onclick="location.href= 'consulta.php'" value="Consulta" name="boton" /> 
           
      </form>
 
      <br/>
    </div>
    </div> 
        </li>
    </ul>
    </nav>
  </body>
</html>
 
