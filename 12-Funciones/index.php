<?php
//Funciones


function muestraNombres(){

	echo "Victoria <br/>";
	echo "Edgar <br/>";
	echo "Robin <br/>";
	echo "Maria <br/>";
}

muestraNombres();

//Ej: 2

function tablas($numero){
	echo "<h3>Tabla de multiplicar del numero : $numero</h3>";

	for($indice = 1; $indice<=10; $indice++){
		$resultado = 0;
		$resultado = $numero * $indice;
		echo "$numero X $indice = $resultado" ."<br/>";
	}
}
// if(isset($_GET['numero'])){
// tablas($_GET['numero']);
// }else{
// 	echo "No tienes  numeros para multiplicar";
// }

for($indice=0;$indice<=10;$indice++){
	tablas($indice);
}

//Ejemplo

function calculadora($numero1, $numero2, $negrita = false){

	$suma = $numero1 + $numero2;
	$resta = $numero1 - $numero2;
	$multiplicar = $numero1 * $numero2;
	$dividir = $numero1 / $numero2;

    $cadenaTxt = "";

	//Variables opcionales
	if ($negrita != false) {
		 $cadenaTxt .="<h1>";
	}

	$cadenaTxt .= "Suma: $suma <br/>";
	$cadenaTxt .= "Suma: $resta <br/>";
	$cadenaTxt .= "Suma: $multiplicar <br/>";
	$cadenaTxt .= "Suma: $dividir <br/>";
	


	if ($negrita != false) {
		 $cadenaTxt .= "</h1>";
	}

	$cadenaTxt .= "<hr/>";

	return $cadenaTxt;
}
	echo calculadora(10, 30, true);


	//Ejemplo Return

	// function dameNombre($nombre){
	// 	return "Tu nombre es: $nombre";
	// }
	// echo dameNombre("Jesus");


	//Ejemplo funciones dentro de funciones

	function getNombre($nombre){
		$texto = "El nombre es: $nombre";
		return $texto;
	}

	function getApellidos($apellidos){
		$texto = "Los apellidos son: $apellidos";
		return $texto;
	}

	function dameNombre($nombre, $apellidos){
	 	$texto = getNombre($nombre)."<br/>".getApellidos($apellidos);

	 	return $texto;
	 }
	 echo dameNombre("Jesus", "Migue Angel"); 


?>