<?php

/*
Cookie: Es un fichero que se almacena en el ordenador del usuario que visita
la web, con el fin de recordar datos o rastrear el comportamiento del mismo
*/

//Crear cookie
//setcookie("nombre", "Valor que sólo puede ser texto", caducidad, ruta, dominio);

//Cookie básica
setcookie("micookie", "Valor de mi galleta");

//Cookie con expiración
setcookie("unyear", "Valor de mi cookie de 365 dias", time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver las galletas</a>