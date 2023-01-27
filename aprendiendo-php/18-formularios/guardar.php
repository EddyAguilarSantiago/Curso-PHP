<?php

if(isset($POST['titulo']) && isset($POST['descripcion'])){
    echo '<h1>'.$POST['titulo'].'</h1>';
    echo '<h1>'.$POST['descripcion'].'</h1>';
}

?>