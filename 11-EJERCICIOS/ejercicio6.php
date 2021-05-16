<?php
//Imprimir por pantalla una tabla de html con las tablas de multiplicar del 1 al 10

echo "<table border='1'> <tr>";

echo "<tr>";
	for($cabecera = 1; $cabecera<=10;$cabecera++){
	echo "<td>Tabla del $cabecera</td>
	";
	}
echo "</tr>";

echo "<tr>";
	for($indice = 1; $indice<=10;$indice++){
	echo "<td>";
		for($x =1;$x <=10;$x++){
			echo "$indice X $x = ".($indice*$x)."<br/>";
		}
	echo "</td>";
	}
echo "</tr>";

echo "</table>";
?>