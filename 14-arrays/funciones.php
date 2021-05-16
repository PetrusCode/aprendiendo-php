<?php
$cantantes = ['Maicol', 'Celene', 'Romeo', 'Alfredo'];
echo "<br/>";
$numeros = [1,2,5,4,3,8];	
//ORDENAR--
asort($cantantes);//Orden alfabetico
sort($cantantes);//Orden alfabetico y Orden numerico
arsort($cantantes);//Orden alfabetico inverso
// var_dump($cantantes);

sort($numeros);
// var_dump($numeros);	

//AÑADIR ELEMENTOS A UN ARRAY
$cantantes[] = "Natos";
	array_push($cantantes, "NuevoCantante ");

	//Eliminar arrays
	array_pop($cantantes);
	unset($cantantes[2]);

	//Busca array Aleatorio
	 
	// $indice = array_rand($cantantes);

	// echo $cantantes[$indice];

	//Voltear un array en php
	// var_dump(array_reverse($numeros));

	//Buscar dentro de un array

	$resultado = array_search('Natos', $cantantes);

	var_dump($resultado);

	//Metodo count contar numero de elementos
	echo "<br/>";
	echo count($cantantes);
	echo sizeof($cantantes);

	
?>