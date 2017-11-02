<?php 
	session_start();
	error_reporting(0);
	$varsesion=$_SESSION['login'];

	if ($varsesion == null || $varsesion = '') {
		echo "acceso denegado";
		die();
	}
	
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>panel de administracio</h1>
	<h2>hola <?php echo $_SESSION['login']; ?></h2>
	<a href="cerrar.php">cerrar</a>

	
</body>
</html>