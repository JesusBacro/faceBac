<?php
  
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
else
{
    include ('header.php');
}
?>


<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Admin</title>

    <!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
<!--link rel="stylesheet" href="estilos.css"-->

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
  </head>
  <style>
      body{
           background-image:url(images/corp.png);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 85% 85%;
      }
  </style>
  <body>
     
   <!--input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label-->
      <!--doy inicio al menu -->
     <!--div class="sidebar">
    <header>B A C R O C O R P</header>
  <ul>
    <li><a href="../../categoria.php"><i class="fas fa-qrcode"></i>Formato de Petición de Cambios al sistema</a></li>
    <li><a href="../../formato.php"><i class="fas fa-link"></i>Formato de Alta de Producto</a></li>
    <li><a href="../../estanda.php"><i class="fas fa-stream"></i>Sistema en la Web</a></li>
     <li><a href="home.php"><i class="fab fa-apple"></i></i>Control de Comidas</a></li>
    <li><a href="../../controller/cerrarSesion.php"><i class="far fa-envelope"></i>Cerrar Sessión</a></li>
  </ul>
</div-->
  	<!--nav class="navegacion">
			<ul class="menu">
			    <li><a href="induccion.php">Inducción</a></li>
				<li><a href="#">Sistema de Gestión Integral</a>
					<ul class="submenu">
						<li><a href="../../categorias.php"><i class="fas fa-qrcode"></i>Formato de Petición</a></li>
						<li><a href="../../formatos.php"><i class="fas fa-link"></i>Formato de Alta de Producto</a></li>
						<li><a href="../../estandar.php"><i class="fas fa-stream"></i>Sistema en la Web</a></li>
					</ul>
				</li>
				<li><a href="home.php"><i class="fab fa-apple"></i></i>Control de Comidas</a></li>
       <li><a href="../../controller/cerrarSesion.php"> <i class="fas fa-power-off"></i>Cerrar Sessión</a></li>
			
			</ul>
		</nav-->

<script language="JavaScript" type="text/javascript">
alert("BIENVENIDO ERES ADMINISTRADOR <?php echo ucfirst($_SESSION['nombre']); ?>");

</script>


    
    
    <!-- Jquery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="js/operaciones.js"></script>
     <section></section>
  </body>
</html>

