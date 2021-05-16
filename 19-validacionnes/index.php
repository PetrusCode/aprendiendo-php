<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Validacion de formularios</title>
</head>
<body>
	<h1>Validando formularios en PHP</h1>

	<?php
	if (isset($_GET['error'])) {
		$error = $_GET['error'];
			

		if ($error == 'faltan_campos_por_rellenar') {
			echo "<strong style='color:red'>Introduce todos los campos requeridos correctamente </strong>";
		}if ($error == 'nombre') {
			echo "<strong style='color:red'>Rellene el campo nombre correctamente </strong>";
		}if ($error == 'apellidos') {
			echo "<strong style='color:red'>Rellene el campo apellidos correctamente </strong>";
		}if ($error == 'edad') {
			echo "<strong style='color:red'>Rellene el campo edad correctamente </strong>";
		}if ($error == 'email') {
			echo "<strong style='color:red'>Rellene el campo email correctamente </strong>";
		}if ($error == 'pass') {
			echo "<strong style='color:red'>Rellene el campo password correctamente </strong>";
		}

	}

	?>

	<form method="POST" action="procesar_formulario.php"
	 enctype="multipart/form-data">

	 	<hr/>
	 	<label for="nombre">Nombre :</label>
	 	<input type="text" name="nombre" required="required" pattern="[A-Za-z ]+" /><br/>
		<br/>
	 	<label for="apellidos">Apellidos :</label>
		<input type="text" name="apellidos" required="required" pattern="[A-Za-z ]+"/><br/>
			
		<br/>
		<label for="edad">Edad :</label>
		<input type="number" name="edad" required="required" pattern="[0-9]+" /><br/>
		<br/>
		<label for="email">Email :</label>
		<input type="email" name="email" required="required" /><br/>
		<br/>
		<label for="pass">Contraseña :</label>
		<input type="password" name="pass" required="required"/><br/>


		<input type="submit" value="Enviar" />

	</form>
</body>
</html>



<?php



?>