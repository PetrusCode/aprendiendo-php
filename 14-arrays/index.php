<?php
	
	//Repasando arrays

	$pelicula = "Batman";
	$peliculas = array('Batman', 'Superman', 'Acuaman');


	$cantantes = ['Uno', 'Dos', 'Tres'];
	// var_dump($peliculas[2]);
	// var_dump($cantantes);

	echo $peliculas [0];
	echo $cantantes [2];

	//Arrays asociativos
	$personas = array(
		'nombre' => 'Pedro',
		'apellidos'=>'Segura',
		'Mascosas' => 'Ninguna'
	);
	echo "<br/>";
	var_dump($_GET);
	echo "<br/>";
	echo $personas['nombre'];


	//Recorriendo arrays
echo "<ul>";
	for ($i=0; $i <=(count($peliculas)-1); $i++) { 
		echo "<li>".$peliculas[$i]."</li>";
	}
echo "</ul>";

//Recorriendo con ForEach

echo "<h1>Listado de cantantes<h1>.";
echo "<ul>";
	foreach ($cantantes as $cantante) {
		echo "<li>" .$cantante."</li>";
	}
echo "</ul>";	

//Arrays multidimensionales


$contactos = array(
		array(
			'nombre' => 'Suewy',
			'email' => 'swey@gam.com'

			),
		array(
			'nombre' => 'Diego',
			'email' => 'Diego@gam.com'

			),
		array(
			'nombre' => 'Garcia',
			'email' => 'Garcia@gam.com'

			)

	);

	echo "<br/>";
	// echo $contactos[1]['nombre'];

	foreach ($contactos as $key => $contacto) {
		echo "<br/>";
		echo ($contacto['nombre']);
	}
?>