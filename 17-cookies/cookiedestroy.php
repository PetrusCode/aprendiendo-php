<?php
//destruyendo las cookies

if (isset($_COOKIE['nuevaCookie'])) {
	unset($_COOKIE['nuevaCookie']);
	setcookie('nuevaCookie', '', time()-100);
}


//Redireccion
header('Location:ver_cookies.php');


?>