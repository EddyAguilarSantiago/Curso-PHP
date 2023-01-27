<?php

//Constantes
//Es un contenedor de información que no puede variar

define('nombre', 'Jesús Eduardo Aguilar Santiago');
define('web', 'web.com');

echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

$web = 'web.com';
$web = 'web.com.mx';
echo '<h1>'.$web.'</h1>';

//Constantes predefinidas

echo PHP_OS.'<br>';
echo PHP_VERSION.'<br>';
echo PHP_EXTENSION_DIR.'<br>';
echo __LINE__.'<br>';
echo __FILE__.'<br>';

function holaMundo() {
    echo __FUNCTION__.'<br>';
}

holaMundo();

?>