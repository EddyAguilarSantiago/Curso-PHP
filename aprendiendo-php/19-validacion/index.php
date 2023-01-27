<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8" />
        <title>Validación de Formularios PHP</title>
    </head>
    <body>
        <h1>Validar Formularios en PHP</h1>

        <?php

        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error = 'faltan-datos'){
                echo '<strong style="color: red">Introduce todos los datos en todos los campos del formulario</strong>';
            }
            if($error == 'nombre'){
                echo '<strong style="color: red">Introduce bien el nombre</strong>';
            }
            if($error == 'apellidos'){
                echo '<strong style="color: red">Los apellidos no son correctos</strong>';
            }
            if($error == 'edad'){
                echo '<strong style="color: red">Introduce una edad correcta</strong>';
            }
            if($error == 'email'){
                echo '<strong style="color: red">El correo es erroneo</strong>';
            }
            if($error == 'password'){
                echo '<strong style="color: red">Introduce una contraseña de más de 5 caracteres</strong>';
            }
        }

        ?>

        <form action="procesar_formulario.php" method="POST">
            <label for="name"> Nombre: </label> <br>
            <input type="text" name="name" required="required" pattern="[A-Za-z ]+"/> <br>

            <label for="lastname"> Apellidos: </label> <br>
            <input type="text" name="lastname" required="required" pattern="[A-Za-z ]+"/> <br>

            <label for="age"> Edad: </label> <br>
            <input type="number" name="age" required="required" pattern="[0-9]+"/> <br>

            <label for="email"> Email: </label> <br>
            <input type="email" name="email" required="required"/> <br>

            <label for="password"> Contraseña: </label> <br>
            <input type="password" name="password" required="required" minlenght="5"/> <br>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
<!DOCTYPE HTML>