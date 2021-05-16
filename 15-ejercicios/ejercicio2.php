<?php
//Escribir un programa que añada valores a un array mientras su longitud sea menor de 120

$coleccion = array();
$indice = 0;
while ($indice <= 120 ) {
	$indice++;
	array_push($coleccion, "elemento:".$indice);
}

var_dump($coleccion);
echo "<br/>";
echo $coleccion[0];
?>