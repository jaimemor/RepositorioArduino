<?php 


if(!empty($_REQUEST['rut'])){

$rut= $_REQUEST['rut'];
$pass=md5($_REQUEST['pass']);

include "sql/conec.php";
	$sql= "INSERT INTO datos (rut,pass)VALUES (?,?)";
	$smt=$conn->prepare($sql);
    $smt->bindparam(1,$rut);
    $smt->bindparam(2,$pass);
    $smt->execute();
    $conn=null;
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="registrar.php">
		<label for="">rut</label>
		<input type="text" name="rut">
		<label for="">password</label>
		<input type="text" name="pass">
		<input type="submit" value="registrar">
	</form>
	
</body>
</html>