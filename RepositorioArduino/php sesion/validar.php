<?php 
	require_once "sql/conec.php";
	$rut =$_REQUEST['rut'];
	$pass=md5($_REQUEST['pass']);

	$sql="SELECT rut FROM datos WHERE rut = '$rut' AND password = '$pass'";
	$smt=$conn->prepare($sql);
    $smt->execute();
    $resultado= $smt->fetchall();
    $conn=null;

   if (!empty($resultado)) {
   	session_start();
	$_SESSION['login'] = $resultado[0]['rut'];
	header("Location:panel.php");

   	
   }else{
   	echo "error";
   }
	
 ?>