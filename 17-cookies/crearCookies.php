<?php
//Las cookies son ficheros que se almacenan en el ordenador del usuario que visita una web con el fin de recordar datos o rastrear cierta informacion o comportamiento del mismo en la web.

//Creando una cookie

/*setcookie("name", "Valor solo puede ser texto", "fechaCaducidad", "ruta", "dominio");*/


//Cookie basica
setcookie("nuevaCookie", "Esta es una cookie");

//Cookie con expiracion
setcookie("nuevaCookieExp", "Cookie de 365 dias", time()+(60*60*24*365));

header('Location:ver_cookies.php');
?>
