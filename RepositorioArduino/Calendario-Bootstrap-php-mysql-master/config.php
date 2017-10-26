<?php


// Datos de conexion a la base de datos
$host='localhost';
$username='root';
$password='';
$dbname='bd_calendario';

$conn = new PDO("mysql:host=$host;dbname=$dbname" ,$username, $password);

// Url donde estara el proyecto, debe terminar con un "/" al final
//$base_url="http://localhost/a/Calendario-Bootstrap-php-mysql-master/";
$base_url="http://localhost/RepositorioArduino/RepositorioArduino/Calendario-Bootstrap-php-mysql-master/";

?>
