<?php
$mysqli = new mysqli("localhost", "root", "", "prueba");
	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	$nombre = $_POST["nombre"];
	$contrasena = $_POST["contra"];

	$resultado = $mysqli->query("SELECT * FROM `usuarios` WHERE contraseña='".$contrasena."' and nombre='".$nombre."';");

   
  if ($resultado->fetchColumn() > 0) {

     

       foreach ($resultado as $fila) {
           print "Nombre: " .  $fila['nombre'] . "\n";
         }
    }

  
  else {
      print "Ninguna fila coincide con la consulta.";
    }

	/*$filas = mysqli_num_rows($resul);

            // 7. Comparo cantidad de registros encontrados
            if($filas == 0){
                echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
            }else{
            	while ($campos = $resul->fetch_assoc()) {
			    
				}
	
            	session_start();
            	$_SESSION["missesion"] = $campos["nombre"];
                header('location:sesioniniciada.php'); // Si está todo correcto redirigimos a otra página

            }
		*/
	
?>