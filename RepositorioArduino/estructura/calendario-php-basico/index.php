<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SISTEMA CONTROL ACCESO SALAS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="STYLESHEET" type="text/css" href="estilo.css">

</head>

<body>

	<div class="container-fluid">
<div class="row">

<div align="center" class="col-md-12 well" style="background: #fff ;">
<?php
require ("calendario.php");

if ($_POST) {
	$mes = $_POST["nuevo_mes"];
	$ano = $_POST["nuevo_ano"];
}elseif ($_GET){
	$mes = $_GET["nuevo_mes"];
	$ano = $_GET["nuevo_ano"];
}else{
	$tiempo_actual = time();
	$mes = date("n", $tiempo_actual);
	$ano = date("Y", $tiempo_actual);
}

mostrar_calendario($mes,$ano);
formularioCalendario($mes,$ano);
?>
</div></div>

<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
</html>
