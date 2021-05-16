<?php
//operadores de comparacion
/*
== igual
=== identico
!= diferente
<> diferente
!== no identico
< menor que
> mayor que
<= menor o igual que
>=mayor o igual que 

*/
$color = "verde";

if($color == "rojo"){
	echo "El color es rojo";
}else{
	echo "El color no es rojo";
}
echo "<br/>";

$any = 2029;
if($any != 2019){
	echo "Es un año diferente de  2019";
}else{
	echo "No estamos en 2019";
}

$edad = 40;
$ciudad = "Madrid";
$continente = "Europa";
$nombre = "David";
$mayoria_edad = 18;

if($edad >= $mayoria_edad){
	echo "<h1>$nombre es mayor de edad</h1>";

	if($continente=="Europa"){
		echo "<h2> Es de Europa </h2>";
		echo "<h2> Y es de $ciudad<hemos </h2>";
	}else{
		echo "<h2> No es de Europa</h2>";
	}

}else{
	echo "<h2>$nombre no es mayor de edad</h2>";
}

//Ejemplo else if
echo "<br/>";
echo "<hr/>";
$dia = 2;
/*
if($dia==1){
	echo "Es lunes";
}else{
	if($dia ==2){
		echo "Es Martes";
	}else{
		if($dia==3){
			echo "Es Miercoles";
		}else{
			if($dia==4){
				echo "Es Jueves";
			}else{
				if($dia==5){
					echo "Es Viernes";
				}else{
					echo "Es fin de semana";
				}
			}
		}
	}
}*/

if($dia==1){
	echo "Lunes";
}elseif ($dia ==2) {
	echo "Martes";
}elseif ($dia ==3) {
	echo "Miercoles";
}elseif ($dia == 4) {
	echo "Jueves";
}elseif ($dia == 5) {
	echo "Viernes";
}else{
	echo "Es fin de semana";
}
echo "<br/>";
echo "<hr/>";
//ejemplo operadores logicos
$edad1 = 18;
$edad2= 54;
$edad_oficial =29;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
echo "Esta en edad de trabajar";
}else{
	echo "No esta en edad de trabajar";
}
echo "<hr/>";
$pais = "Mexico";

if($pais == "Mexico" || $pais == "España" || $pais == "Colombia"){

	echo "En este pais se habla español";
}else{
	echo "No se habla español";
}

//Ejemplo SWUITCH
echo "<br/>";
$dia =2;

switch ($dia){
	case 1:
		echo "Lunes";
		break;
	case 2: 
		echo "Martes";	
		break;
	case 3: 
		echo "Miercoles";
		break;
	case 4:
		echo "Jueves";
		break;
	case 5:
		echo "Viernes";
		break;
	default:
		echo "Fin de semana";
		break;	
}

//EJ GOTO

goto marca;
echo "<h3>instruccion 1 </h3>";
echo "<h3>instruccion 2 </h3>";
echo "<h3>instruccion 3 </h3>";
echo "<h3>instruccion 4 </h3>";

marca:
echo "<h1>Saltando 4 echos</h1>";
?>