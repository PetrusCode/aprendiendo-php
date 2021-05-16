<?php
//Hacer un programa en php que tenga 8 numeros enteros y que haga lo siguiente: - Recorrerlo y mostrarlo - Ordenarlo y mostrarlo -Mostrar su longitud - Buscar un elemento dentro del array

//Creacion de funcion mostrar Arrays
function mostrarArray($numeros){

	$resultado = "";
	foreach ($numeros as $numero) {
	
	//refactorizacion de codigo
	$resultado .= $numero."<br/>";
	}
	return $resultado;
}


//Creacion de arrays

$numeros2 = array(11,44,55,77,23,39,56,43);
$numeros = [1,3,2,7,5,8,4,6];


//Recorrer y mostrar
// foreach ($numeros as $key => $numero) {
	
// 	echo $numero."<br/>";
// }	
	
	echo mostrarArray($numeros);

	 strlen($numeros);

	

	echo "<br/>";
	//ordenar
	sort($numeros);
	
	echo mostrarArray($numeros);

	//Mostrar longitud
	count($numeros);

	//busqueda por GET
	if (isset($_GET['numero'])) {
		
	
		$busqueda = $_GET['numero'];
		//Busqueda en el array
		$search = array_search($busqueda, $numeros);
		if (!empty($search)) {
		
			echo "<h3>El numero buscado existe dentro del array, en el indice: $search</h3>";
		}else{
			echo "<h4>Este numero no existe dentro del array</h4>";
		}
	}
?>