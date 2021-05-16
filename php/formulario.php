<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../css/php.css">
<title>Formulario Validado</title>
  <script>
       alert ("Formulario registrado con exito");
  </script>
</head>

<body>

<div class="resumen">
	<div class="titulo">
		RESUMEN DE SU FORMULARIO
	</div>

	<div class="datos">
	<div class="bienvenido">
		<?php
			echo "Bienvenido $_POST[usuario] <br/>";
		?>	
	</div>

	<div class="edad">	
		<?php
			echo "Me alegra saber que eres mayor de edad con $_POST[edad] a&ntilde;os, y vas a ayudarnos <br/>";
		?>
	</div>  

	<div class="correo">	
		<?php
			echo "Tu correo es: $_POST[email] <br/>";
		?>
	</div> 

	<div class="contras">	
		<?php
			echo "Comprueba que tus contraseñas son: <br/>
		  		Primera contrase&ntilde;a es: $_POST[pass1]<br/>
		  		Segunda contrase&ntilde;a es: $_POST[pass2]<br/>";
		?>
	</div> 

	<div class="acciones">	
		<?php
			if (isset($_POST['acciones']))
			{
				$acciones = $_POST['acciones'];
				echo "Gracias por ayudarnos con: <br/>";
				foreach ($acciones as $key => $value) {
					echo "$value<br/>";
				}
			}
			else{
				echo "No has seleccionado nada, algo tendras que hacer algo, digo yo";
			}
		?>
	</div> 

	</div>
</div>

</body>
</html>
