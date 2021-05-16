<?php

//Creacion de carpetas con php
// mkdir("miDirectorio", 0777) or die("No se a podido crear la carpeta");

if(!is_dir("miDirectorio")){
	mkdir("miDirectorio", 0777) or die("No se a podido crear la carpeta");
}else{
	echo "Ya existe la carpeta";
}
echo "<br/>";
if (rmdir("miDirectorio")) {
echo "Se a borrado su carpeta";
}

//Crar varios directorios y archivos
echo "<h1>Contenido de carpeta </h1>" ;

echo "<br/>";
if ($gestor = opendir("./masCarpetas")) {

	while (false !== ($archivo = readdir($gestor))) {
		if ($archivo != '.' && $archivo != "..") {
			echo $archivo."<br/>";
			
		}
		
	}

}

?>