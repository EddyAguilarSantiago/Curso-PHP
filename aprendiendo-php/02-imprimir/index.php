<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Imprimir por pantalla - Master en PHP</title>
    </head>
    <body>
        <h1>Master en <?php echo 'PHP' ?> </h1>

        <?='Bienvenido al curso más grande de PHP'?>

        <?php
            //Titular de la Sección
            echo '<h3>Listado de videojuegos:</h3>';
            
            /*
                Esta es una lista
                de videojuegos
                moderno
            */
            echo '<ul>'
                    .'<li>GTA</li>'
                    .'<li>Left 4 Dead 2</li>'
                    .'<li>Mario Bros.</li>'
                .'</ul>';

            // echo 'HOLA HOLA HOLA';

            //Párrafo explicativo
            echo '<p>Esta es toda'.' - '.'lista de juegos</p>';
        ?>
    </body>
</html>