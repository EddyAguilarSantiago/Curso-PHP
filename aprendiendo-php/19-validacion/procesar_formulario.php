<?php

if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['age']) && 
   !empty($_POST['email']) && !empty($_POST['password'])){
        $error = 'ok';

        $nombre = $_POST['name'];
        $apellidos = $_POST['lastname'];
        $edad = (int)$_POST['age'];
        $email = $_POST['email'];
        $password= $_POST['password'];

        //Validar el nombre
        if(!is_string($nombre) || preg_match("/[0-9]/", $nombre)){
            $error = 'nombre';
        }
        //Validar los apellidos
        if(!is_string($apellidos) || preg_match("/[0-9]/", $apellidos)){
            $error = 'apellidos';
        }

        //Validar la edad
        if(!is_int($edad) || $edad < 1){
            $error = 'edad';
        }

        //Validar el email
        if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = 'email';
        }

        //Validar la contraseña
        if(empty($password) || strlen($password) < 5){
            $error = 'password';
        }
    }
    else{
        $error = 'faltan-datos';
    }

    if($error != 'ok'){
        header("location: index.php?error=$error");
    }

?>

<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8" />
        <title>Validación de Formularios PHP</title>
    </head>
    <body>
        <?php if($error = 'ok'): ?>
            <h1>Datos validados correctamente</h1>
            <p> <?=$nombre ?> </p>
            <p> <?=$apellidos ?> </p>
            <p> <?=$edad ?> </p>
            <p> <?=$email ?> </p>
        <?php endif; ?>
    </body>
    </html>
<!DOCTYPE HTML>