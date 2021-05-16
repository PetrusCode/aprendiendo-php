<?php

define('nombre', 'Roberto');
define('web', 'developments.com');



echo "<h1>".nombre."</h1>";
echo "<h1>".web."</h1>";

$web = "juegosgratisweb.com";
$web = "juegosgratisweb.es";
echo "<h1>".$web."</h1>";

//constantes predefinidas

echo PHP_VERSION;
echo "<br>";
echo PHP_OS;
echo "<br>";
echo PHP_EXTENSION_DIR;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __LINE__;
echo "<br>";

function holaMundo(){

echo __FUNCTION__;

}
?>