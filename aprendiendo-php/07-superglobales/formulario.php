<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form method="POST" action="recibir.php">
            <p>
                <label>Nombre</label>
                <input type="text" name="nombre"/>
            </p>

            <p>
                <label>Apellidos</label>
                <input type="text" name="apellidos"/>
            </p>

            <input type="submit" value="Enviar datos"/>
        </form>
    </body>
</html>