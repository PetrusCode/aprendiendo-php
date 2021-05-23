<?php


function validarEmail($email){
	$status = "No valido";
	if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$status = "Valido";
		
	}

	return $status;
}

if (isset($_GET['email'])) {
	echo validarEmail($_GET['email']);
}else{
	echo "pasa por GET un email";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Validando mail</title>
</head>
<body>

	<form method="GET" >
		<label>Email</label>
		<input type="mail" name="email" /><br/>


		<input type="submit" value="Validar">
	</form>

</body>
</html>