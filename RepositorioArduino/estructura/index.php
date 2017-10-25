
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
         <div class="container-fluid">
	
         <div class="row">
<div class="col-md-6 well" style="background: #fff ;">


	<form method="POST" action="http://localhost/tarjetafinal/PDF/examples/example_001.php"> 

<h3><p class="text-left">Ingrese Rut</p></h3> <input name="rut" value="" class="form-control" style='width:170px; height:25px' required/><br><br> 




<input type="submit" value="Generar PDF" name="buscar" class="btn btn-primary" style='width:170px; height:125px'>

</form> 


</div>






<div class="col-md-6 well" style="background: #fff ;">
        <h3><p class="text-center">Ingresar Nuevos Datos</p></h3>
<input type="button" onclick=" location.href='index2.php' " value="Ingresar Datos" name="boton" class="btn btn-primary" style='width:170px; height:125px'/> 

</div>
</div>

<div class="col-md-6 well" style="background: #fff ;">
        <h3><p class="text-center">Eliminar Datos</p></h3>
<input type="button" onclick=" location.href='' " value="Eliminar Datos" name="boton" class="btn btn-primary" style='width:170px; height:125px'/> 

</div>
<div class="col-md-6 well" style="background: #fff ;">
        <h3><p class="text-center">Modificar Datos</p></h3>
<input type="button" onclick=" location.href='' " value="Modificar Datos" name="boton" class="btn btn-primary" style='width:170px; height:125px'/> 

</div>
<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>
  

