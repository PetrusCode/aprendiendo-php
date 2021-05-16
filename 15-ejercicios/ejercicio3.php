<?php
//Programa que comprueba si una variable esta vacia y si esta vacia rellenarla con texto en minuscula y mostrarlo en mayuscula y negrita


$letra = "";

if (empty($letra)) {
	$letra = "Mitexto";
	$textoMayusc = strtoupper($letra);
	echo "<strong>$textoMayusc</strong>"; 
}else{
	echo "La variable tiene este contenido dentro :".$letra;
}


?>