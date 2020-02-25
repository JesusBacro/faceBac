
<?php
	$servername = "localhost";
	$username = "bacro";
	$password = "Mejoracontinua19";
    $dbname = "id12491651_bac";

	$conexion=mysqli_connect('localhost','bacro','Mejoracontinua19','id12491651_bac');

 ?>

<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="estilos.css" class="rel">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
<link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>BACROCORP</title>
</head>
<body>
     <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
      <!--doy inicio al menu -->
     <div class="sidebar">
    <header>B A C R O C O R P</header>
  <ul>
    <li><a href="../../categorias.php"><i class="fas fa-qrcode"></i>Formato de Petición de Cambios al sistema</a></li>
    <li><a href="../../formatos.php"><i class="fas fa-link"></i>Formato de Alta de Producto</a></li>
    <li><a href="estandar.php"><i class="fas fa-stream"></i>Estandarizaciones del Sistema</a></li>
    <li><a href="../../controller/cerrarSesion.php"><i class="far fa-envelope"></i>Cerrar Sessión</a></li>
  </ul>
</div>
<div class="container" style="background: #DDF7F2; border-radius: 0px 0px 10px 10px;">
		  <table width="100%">
			<tr>
			  <td width="50%"><h1>Corporativo Bacros</h1></td>
			  <td width="50%">
				<p class="text-right">
				  <img src="https://s3.amazonaws.com/logocompanies/CEA5A9A9-5EF0-46CA-AD7A-314B45507566.JPG" width="180" alt="Responsive image" style="border-radius: 10px;">
				</p>
			  </td>
			</tr>
			<tr>
			
			</tr>
		  </table>
		</div>


		<br/><br/>

		<div class="container" style="background: #EEF3FB; border-radius: 10px;">
			<br/>
<br>
<!--METERÉ EL SCRIPT PARA QUE ME AYUDE A LA FIGURA DE LA BARRA Y QUE CARGE POR MEDIO DE UN JS-->
<script type="text/javascript">
			function cargar(){
				var barra = document.getElementById('barra')
				barra.value +=5
				}
        </script>
        <script>
        $( "#someid" ).click(function() {

$(this).addClass('myclass');

localStorage.setItem('clicked', '1');

});



if(localStorage.getItem("clicked") != null){

$("#someid").addClass('myclass');


}

        </script>




	<table id="tabla" border="4", width= "100%", th,td{width= 25%; text-align= center} >
		<tr>
        <td> <center>No. Solicitud</center></td>
       <td> <center>Nombre del Empleado</center></td>
        <td><center>Refacción</center></td>
         <td><center>Categoría</center></td>
       <td><center>Medidas</center></td>
       <td><center>Color</center></td>
       <td><center>Modelo</center></td>
       <td><center>No. Serie</center></td>
       <td><center>Calibre</center></td>
       <td><center>Volt's o AMP</center></td>
       <td><center>Tipo</center></td>
       <td><center></center></td>
   <td><center>Otras Especificaciones</center></td>
  
		</tr>

		<?php
		$sql="SELECT * from pro";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
		    <td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			  <td><?php echo $mostrar['ref']?></td>
			   <td><?php echo $mostrar['cat']?></td>
			<td><?php echo $mostrar['med'] ?></td>
			<td><?php echo $mostrar['color'] ?></td>
			<td><?php echo $mostrar['modelo'] ?></td>
            <td><?php echo $mostrar['serie'] ?></td>
            <td><?php echo $mostrar['cali'] ?></td>
            <td><?php echo $mostrar['vol']?></td>
            <td><?php echo $mostrar['tipo']?></td>
            <td><?php echo $mostrar['mar']?></td>
            <td><?php echo $mostrar['otro']?></td>
          

		</tr>
	<?php
	}
	 ?>
    </table>
 <br/> <br/> <br/>
 <!--Metere la funcion para covertir a pdf-->
 <div class="row">
        <div class="col text-center">
          <a href="convierte.php">
            Generar a Excel
          </a>
        </div>
      </div>
    <div>
    <center><input type="button" onclick="location.href= 'index.php'" value="Finalizar" name="boton" /> </center>
    </div>

</body>
</html>