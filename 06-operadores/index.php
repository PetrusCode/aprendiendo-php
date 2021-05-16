<?php
$numero1 =55;
$numero2 =55;

echo 'suma: ' .($numero1 + $numero2).'<br/>';

echo 'resta: ' .($numero1 - $numero2). '<br/>';

echo 'multiplicacion: ' .($numero1 * $numero2). '<br/>';

echo "division: " .($numero1 / $numero2). '<br/>';

echo "Resto: " .($numero1%$numero2);

//Operadores de incremento y decremento

$any = 2019;

//incremento
$any++;


//decremento
$any--;

//pre-incremento
++$any;

//pre-decremento
--$any;
echo "<h1>$any<h1/>";

//Operadores de asignacion

$edad = 55;

echo $edad."<br/>";


// $edad = $edad + 5;
echo ($edad+=5);
echo ($edad-=5);
echo ($edad*=5);
echo ($edad/=5);
echo ($edad%=5);
var_dump( $edad);

?> 