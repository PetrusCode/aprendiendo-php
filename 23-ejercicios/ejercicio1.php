<?php
//Crear una sesion que aumente su valor en uno o disminuya en uno en funcion de si el parametro get counter esta a uno o a cero


session_start();





if(!isset($_SESSION['sesion'])){
	$_SESSION['sesion'] = 0;
}
if (isset($_GET['counter'] )&& $_GET['counter']==1) {
	$_SESSION['sesion']++;
}
if (isset($_GET['counter']) && $_GET['counter']==0) {
	$_SESSION['sesion']--;
}


?>

<h1>El valor de la sesion es: <?=  $_SESSION['sesion'] ?></h1>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a>

<a href="ejercicio1.php?counter=0">Disminuir</a>