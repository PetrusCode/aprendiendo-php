<?php

$numero = 0;
while($numero <=100){
	echo 
$numero;

	if($numero !=100){
		echo ", ";
	}
	$numero++;
}
echo "<hr/>";
 //Ejemplo
 if (isset($_GET['numero'])){
 	$numero = (int) $_GET['numero'];
 }else{
 	$numero = 1;
 }
echo "<h1>Tabla de multiplicar del numero $numero<h1>";

$contador = 0;
while ($contador<=10) {
	echo "$numero x $contador = ".($numero*$contador)."
	<br/>";
	$contador++;
}
echo "<hr/>";
//Do While

$edad = 19;
$contador = 1;
do{
echo "Tienes acceso al local privado $contador"."<br/>";
$contador++;
}while($edad>=19 && $contador<=10);
?>