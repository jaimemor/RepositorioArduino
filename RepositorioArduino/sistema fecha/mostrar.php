<?php 

		

		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$dia=$_POST['Dia'];
		$mes=$_POST['mes'];
		$ano=$_POST['Año'];
		$hora=$_POST['hora'];


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


        		function guardar_eventos($dia,$mes,$ano,$hora){
	      require "config.php";
            $sql = "INSERT INTO eventos(dia,mes,ano,hora) 
            VALUES (?,?,?,?)";


             $smt = $conn->prepare($sql);
             $smt->bindParam(1,$dia);
			  $smt->bindParam(2,$mes);
			  $smt->bindParam(3,$ano);
			  $smt->bindParam(4,$hora);
             
             

             $smt ->execute();
             
             $conn = null;
        		}





 guardar_form_cred($nombre,$apellido); 
	guardar_eventos($dia,$mes,$ano,$hora); 
echo $nombre; 
echo $apellido; 
echo $dia; 
echo $mes; 
echo $ano; 
echo $hora; 


			


 ?>