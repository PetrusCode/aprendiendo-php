<?php
//Crear un script que tenga cuatro variables, tipo array, string, int, y boolean y que imprima un mensaje segun tipo de variable

echo "<h2>Tipos de variables</h2>";
echo tiposVar();

$miArray = array();
$texto = "Soy un String";
$numero = 2;
$logic = true;
$Array = array();


function tiposVar(){
$miArray = array();
$texto = "Soy un String";
$numero = 2;
$logic = true;

	echo gettype($miArray);
	echo "<br/>";
	echo gettype($texto);
	echo "<br/>";
	echo gettype($numero);
	echo "<br/>";
	echo gettype($logic);
}

if (is_array($miArray)) {
	echo "Es un array";
}

if (is_string($texto)) {
	echo $texto;
}
if (is_integer($numero)) {
	echo "Es un numero";
}
if (is_bool($logic)) {
	echo "Es un booleano";
}
?>