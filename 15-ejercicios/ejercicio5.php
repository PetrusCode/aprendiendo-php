<?php
//Creando un array con el contenido de la tabla:Accion, Aventura, Deportes; GTA, COD, PUGB- Assasins creed, Crash, prince of persia, Fifa 19, pes 19, moto gp 19

$tabla = array(
	"ACCION" => array("GTA 5", "Call Of Duty", "PUGB"),
	"AVENTURA" => array("Assasins Creed", "Crash", "Prince of Persia"),

	"DEPORTES" => array("FIFA 19", "Pes 19", "Moto GP 19")

);

$categorias = array_keys($tabla);
?>

<table border="1">
	
	<?php require_once 'ejercicio5/encabezados.php'; ?>
	<?php require_once 'ejercicio5/primerafila.php'; ?>
	<?php require_once 'ejercicio5/segundafila.php'; ?>
	<?php require_once 'ejercicio5/tercerafila.php'; ?>

</table>

