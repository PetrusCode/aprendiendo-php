<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Validacion de formulario PHP</title>
</head>


<?php
	$error = "faltan_campos_por_rellenar";

	if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
		$error = 'ok';

		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$edad = (int) $_POST['edad'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];	 

			//Validacion de nombre
		if (!is_string($nombre) || (!preg_match("/[a-zA-Z ]+/", $nombre) && preg_match("/[0-9]/", $nombre))) {
				$error = "nombre";

		}if (!is_string($apellidos) || (!preg_match("/[a-zA-Z ]+/", $apellidos) && preg_match("/[0-9]/", $apellidos))) {
				$error = "apellidos";
				
		}if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
				$error = "edad";
				
				
		}if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$error = "email";
				
				
		}if (empty($pass) || strlen($pass)<6) {
				$error = "pass";
				
		}
		// var_dump($_POST);
		// var_dump($error);
		// die();//Forma de debuggar el codigo usando die()

	}else {
		$error = "faltan_campos_por_rellenar";
		
	}	

	if ($error != 'ok') {
		header("Location:index.php?error=$error");
	}

	

	
?>

<body>
	<!-- <?php echo "<h1>Mi ERROR</h1>"; var_dump($error);?> -->
	<?php if ($error == 'ok'): ?>

		<h1>Datos validados correctamente</h1>
		<table border="1">
		<tr>
			<td><p><?=$nombre?></p></td>
		</tr>
		<tr>
			<td><p><?=$apellidos?></p></td>
		</tr>
		<tr>
			<td><p><?=$edad?></p></td>
		</tr>
		<tr>
			<td><p><?=$email?></p></td>
		</tr>

		</table>
		

	<?php endif; ?>
</body>
</html>