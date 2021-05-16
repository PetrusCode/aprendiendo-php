<?php
//Hacer un programa que nos muestre todos los numeros entre dos numeros que nos lleguen por la URl
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
if($numero1<$numero2){
for($indice = $numero1; $indice<=$numero2;$indice++){
	echo "<h4>$indice<h4/>";
}


	}else{
		echo "<h1>El numero 1 debe ser menor al numero2<h1/>";
	}




}else{
echo "<h1>Los parametros get no existen<h1/>";
}
?>