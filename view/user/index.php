<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
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
    <title>USUARIO</title>

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
     
<script language="JavaScript" type="text/javascript">

alert("BIENVENIDO ERES USUARIO <?php echo ucfirst($_SESSION['nombre']); ?>");
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






