<?php 

			require'conec.php';
			$objeto = new conectar();

			require 'user.php';
			$objeto2 = new user();
			$objeto2->login_in();

 ?>
