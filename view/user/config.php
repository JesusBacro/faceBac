<?php





$servidor='localhost';
$usuario='bacro';
$pass='Mejoracontinua19';
$bd='id12491651_bac';


$conexion = new mysqli($servidor, $usuario, $pass, $bd);	


$conexion->set_charset('utf8');


if ($conexion->connect_errno) {
	echo "Error al conectar la base de datos {$conexion->connect_errno}";
}


$base_url="http://bacrocorp.com/view/user/";

?>
