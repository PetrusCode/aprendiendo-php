<?php
session_start();

//Variable local
$variable_normal ="Esto es una cadena de texto";

//Variable de sesion
$_SESSION['variable_persistente'] = "Sesion Activa";

echo $variable_normal."<br/>";
echo $_SESSION['variable_persistente'];
?>