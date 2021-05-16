<?php
//variables locales y globales


$frase = "Todos los dias del año son especiales";//<-variable global

echo "$frase";


function frases(){
	global $frase;//<--declaracion de una variable de acceso global a nivel local

	echo "<h1>$frase</h1>";

	$any = 2020;//<-variable local
	echo "<h1>$any</h1>";

	return $any;//<--para acceder a una variable local fuera de su ambito local llamando a la funcion
}

	echo frases();


	//Funciones Variables ejemplo


	function nuevaPrimera(){
		return "Hola soy una funcion variable";
	}

	function nuevaSegunda(){
		return "Veamos a ver que hacemos";
	}

	function nuevaTercera(){
		return "Somos tres funciones";
	}



	// $horario = "Funcion";
	$horario = $_GET['horario'];
	$miFuncion = "nueva".$horario;
	echo $miFuncion();
?>