<?php
//Trabajando con ficheros



//abrir en modo lectura
$abrir_archivo = fopen("fichero_texto.txt", "a+");

//leer contenido archivo
//--$contenido = fgets($abrir_archivo);


//Leer contenido archivo usando bucle while
while (!feof($abrir_archivo)) {
	$contenido = fgets($abrir_archivo);
	echo $contenido."<br/>";
}


//Escribir dentro de un archivo
fwrite($abrir_archivo, "\n". "Soy un texto que se esta leyendo en php");

//cerrando archivo

fclose($abrir_archivo);


echo "______________________________________________";
echo "<br/>";


//Copiando archivo
copy("fichero_texto.txt", "fichero_copiado.txt") or die("Error al copiar");

//Cambio de nombre
rename("fichero_copiado.txt", "fichero_recopiado.txt");

//Eliminar archivos 
unlink("fichero_recopiado.txt") or die("Error al borrar");

 //comprobar si existe el fichero
if (file_exists("fichero_texto.txt")) {
	echo "El fichero existe";
}else{
	echo "El fichero no existe";
}
?>