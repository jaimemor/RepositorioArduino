<?php


$servidor='localhost';
$usuario='root';
$pass='';
$bd='bd_calendario';

// Nos conectamos a la base de datos
$conexion = new mysqli($servidor, $usuario, $pass, $bd);	

// Definimos que nuestros datos vengan en utf8
$conexion->set_charset('utf8');

// verificamos si hubo algun error y lo mostramos
if ($conexion->connect_errno) {
	echo "Error al conectar la base de datos {$conexion->connect_errno}";
}

// Url donde estara el proyecto, debe terminar con un "/" al final
//$base_url="http://localhost/a/Calendario-Bootstrap-php-mysql-master/";
$base_url="http://localhost/RepositorioArduino/RepositorioArduino/index.php/";

?>
