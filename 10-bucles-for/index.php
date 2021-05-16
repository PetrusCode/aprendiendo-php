<?php
//Ejemplo php con for

$resultado = 0;
for( $indice = 0;$indice<=100;$indice++){
$resultado += $indice;
echo "<p>$resultado<p/>";
}
echo "<h1>El resultado es: $resultado<h1/>";

//Ej Tabla de multiplicar con bucle for

echo "<hr/>";

if (isset($_GET['numero'])){
 	$numero = (int) $_GET['numero'];
 }else{
 	$numero = 1;
 }
echo "<h1>Tabla de multiplicar del numero $numero<h1>";


for ($contador = 0; $contador<=10;
	$contador++) {

	if($numero == 45){
		echo "No se pueden mostrar estas operaciones
		prohibidas con el numero 45";
		break;

	}
	echo "$numero x $contador = ".($numero*$contador)."
	<br/>";
}

?>