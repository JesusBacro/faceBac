

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BACROCORP</title>
</head>
 <!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="alertify.min.css" />
 
<link rel="stylesheet" href="themes/default.min.css" />
 
<script src="alertify.min.js"></script>
<link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="estilos.css" class="rel">
<body>
  <!--doy inicio al menu -->
     <div class="sidebar">
    <header>B A C R O C O R P</header>
  <ul>
    <li><a href="view/admin/index.php"><i class="fas fa-qrcode"></i>ATRAS</a></li>
    <li><a href="../../controller/cerrarSesion.php"><i class="far fa-envelope"></i>Cerrar Sessión</a></li>
  </ul>
</div>  
    
<div class="alert alert-danger"><center><i>PRIMERO DEBES DE DARLE CLIC AL BOTÓN ENVIAR</i></center></div>
<div class="alert alert-success"><center><i>Si no quieres subir un archivo, clic en SIGUIENTE</i></center></div>
<?php

echo '<html><head></head><body>';
echo '<form method="post" enctype="multipart/form-data">';
echo '<div align="center"><h1>SELECCIONA TU ARCHIVO: <h1> <input type="file" name="myfile" /></div><br>';
echo '<div align="center"><input type="submit" value="Enviar"></div><br>';
echo '</form>';

if ( isset( $_FILES ) && isset( $_FILES['myfile'] ) && !empty( $_FILES['myfile']['name'] && !empty($_FILES['myfile']['tmp_name']) ) ) {
	//Hemos recibido el fichero
	//Comprobamos que es un fichero subido por PHP, y no hay inyección por otros medios
	if ( ! is_uploaded_file( $_FILES['myfile']['tmp_name'] ) ) {
		echo "Error: El fichero encontrado no fue procesado por la subida correctamente";
		exit;
	} 
	$source = $_FILES['myfile']['tmp_name'];
	$destination = __DIR__.'/upload/'.$_FILES['myfile']['name'];
			
	if ( is_file($destination) ) {
	    echo'<p class="alert alert-danger agileits" role="alert">Ya existe almacenado un fichero con ese nombre!!!<p>';

	 @unlink(ini_get('upload_tmp_dir').$_FILES['myfile']['tmp_name']);
	 exit;
	}

	if ( ! @move_uploaded_file($source, $destination ) ) {
	    echo'<p class="alert alert-danger agileits" role="alert">REGISTRO NO REALIZADO!!!<p>';
		
		@unlink(ini_get('upload_tmp_dir').$_FILES['myfile']['tmp_name']);
		exit;
	}
	echo'<p class="alert alert-success agileits" role="alert">REGISTRO ÉXITOSO!!!<p>';
}
?>
<br><br><br>
<center><input type="button" onclick="location.href='ne.php';" value="SIGUIENTE" /></center> 
<br> 
<center><input type="button" onclick="location.href='view/admin/index.php';" value="ATRAS" /></center>
</body>
</html>
