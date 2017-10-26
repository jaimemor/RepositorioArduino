<?php 

		

		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];

			 function guardar_form_cred($nombre, $apellido){

           	require "config.php";
            $sql = "INSERT INTO datos(nombre,apellido) 
            VALUES (?,?)";


             $smt = $conn->prepare($sql);
             $smt->bindParam(1,$nombre);
            
             $smt->bindParam(2,$apellido);
             
             

             $smt ->execute();
             
             $conn = null;
             

        }

 guardar_form_cred($nombre,$apellido); 
echo $nombre; 
echo $apellido; 


 ?>