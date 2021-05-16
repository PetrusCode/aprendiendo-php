<?php
//Ej:Funciones predefinidas


$nombre = "Pepe";
var_dump($nombre);//Muy usada para debug y ver el contenido de una variable
echo "<br/>";
echo "<br/>";

//Fechas
// date(format);
echo date("d-M-Y");
echo "<br/>";
echo "<br/>";

echo time();//Imprime la fecha en formato Unix
echo "<br/>";
echo "<br/>";

//Matematicas
echo "Raiz cuadrada de 10: ".sqrt(10);
echo "<br/>";
echo "<br/>";	
echo "Numero aleatorio de 1 a 100: ".rand(1,100);
echo "<br/>";
echo "<br/>";	
echo "Numero Pi: ".pi();
echo "<br/>";
echo "<br/>";	
echo "Redondear: ".round(8.2324223, 3);

//Mas funciones generales
echo "<br/>";
echo "<br/>";	
echo  gettype($nombre);

//detectar tipado
echo "<br/>";
echo "<br/>";	
if (is_string($nombre)) {
	echo "Es  un String";
}
echo "<br/>";
echo "<br/>";	
if(!is_float($nombre)){
	echo "La variable nombre no es un numero con decimales";
}


//Comprobar si existe una variable
echo "<br/>";
echo "<br/>";
if (isset($edad)) {
	echo "La variable existe";
}else{
	echo "La variable no existe";
}

echo "<br/>";
echo "<br/>";

//limpiar espacios
$frase = "                       codificando";

echo trim($frase);


echo "<br/>";
echo "<br/>";
//eliminar variables / indices

$any = 2020;
unset($any);
var_dump($any);

echo "<br/>";
echo "<br/>";
//Comprobar variables vacias
$texto = "";

if (empty($texto)) {
	echo "La variable esta vacia";
}else{
	echo "La variable tiene texto";
}

echo "<br/>";
echo "<br/>";

//Contar caracteres de una cadena de String

$cadena = "123456";
echo strlen($cadena);

echo "<br/>";
echo "<br/>";

//Encontrar la posicion de un caracter determinado

$unafrase = "Estudiando programacion";
echo strpos($unafrase, "E");

echo "<br/>";
echo "<br/>";

//Reemplazar contenedo de un string
echo str_replace("programacion", "medicina", $unafrase);

echo "<br/>";
echo "<br/>";

//Convertir a mayusculas y minusculas

echo strtolower($unafrase);
echo "<br/>";
echo strtoupper($unafrase);
?>