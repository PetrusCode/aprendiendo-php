<?php
//mostrando la cookie

//Se muestran las cookies usando la variable $_COOKIE una variable superglobal que es un array asociativo

if (isset($_COOKIE['nuevaCookie'])) {
	echo "<h1>".$_COOKIE['nuevaCookie'].
"</h1>";
}else{
	echo "No existe la cookie";
}

if (isset($_COOKIE['nuevaCookieExp'])) {
	echo "<h1>".$_COOKIE['nuevaCookieExp']."</h1>";
}else{
	echo "No existe la cookie";
}


?>


<a href="crearCookies.php">creando cookies</a>
<a href="cookiedestroy.php">Borrar cookie</a>