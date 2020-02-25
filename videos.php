<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">	
	<title>Tablas</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> <!-- CDN de Bootstrap -->
	<link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
   
<section>
	<div class="container">
		<div class="row">
			<div class="col">
					<table class="table table-bordered table-striped table-hover">
				<th class="table-success"><center><i>En este apartado podras ver los links para verlos en youtube</i></th></center>
			
				<!-- .table-responsive Nos permite adaptar nuestra tabla a dispositivos moviles -->
				<div class="table-responsive">
					<!-- .table Nos permite obtener la tabla por defecto de Bootstrap -->
					<!-- .table-sm Nos permite hacer la tabla mas pequeña eliminando paddings -->
					<!-- .table-dark Nos permite cambiar los colores de la tabla a oscuros -->
					<!-- .table-bordered Nos permite agregarle bordes a la tabla -->				
					<!-- .table-striped Nos permite alternar colores entre cada fila -->				
					<!-- .table-hover Nos permite agregarle un hover a las filas -->									
					<table class="table table-bordered table-striped table-hover"> <!-- <table class="table table-sm table-bordered table-striped table-hover"> -->
						<!-- thead-dark Nos permite cambiar los colores de la tabla a oscuros -->
						<!-- thead-light Nos permite cambiar los colores de la tabla a claros -->
						<thead class="thead-dark">
							<tr>
								<th>#</th>
								<th>Descripción</th>
								<th>link</th>
								<th>Descripción</th>
														
							</tr>						
						</thead>					
						<tbody>
							<!-- .table-active -->
							<!-- .table-success -->
							<!-- .table-warning -->
							<!-- .table-danger -->
							<!-- .table-info -->
							<!-- .bg-primary -->
							<!-- .bg-success -->
							<!-- .bg-warning -->
							<!-- .bg-danger -->
							<!-- .bg-info -->
							<tr class="table-info">
								<th>1</th>
								<td>¿Cómo entrar al sistema?</td>
								<td><a href="https://www.youtube.com/watch?v=WuJaK5mu4s8" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ver Video</a></td>
							<td>En este video se te brindarán observaciones de la forma correcta de entrar y salir de Compaq, pro.</td>						
							</tr>
							
						
						</tbody>			
					</table>
				</div>

			</div><!-- .col -->
		</div><!-- .row -->	
	</div><!-- .container -->
</section>
	<!-- Jquery, Popper, Bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- Cargamos Jquery desde la CDN de Google, una CDN permite acelerar la carga de las páginas -->    
	<!-- <script src="js/jquery.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> <!-- CDN de Popper -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> <!-- CDN de Bootstrap -->
	
	<!-- Jquery, Popper, Bootstrap -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --> <!-- CDN de Jquery -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> --> <!-- CDN de Popper -->
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> --> <!-- CDN de Bootstrap -->
</body>
</html>