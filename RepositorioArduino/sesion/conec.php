<?php


$host = "localhost";
$username = "root";
$password = "";
$dbname = "sesion";

class conectar extends PDO{
	
	public function __construct(){
	try{
		parent::__construct("mysql:host=$host;dbname=$dbname" ,$username, $password);

	}catch (Exception $ex){
		echo $ex .'<br>';
	      die("error de conexion");
	}
}


}

?>
