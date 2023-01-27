<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formulario PHP</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="name"> Nombre: </label>
            <p> <input type="text" name="name"/> </p>
            
            <label for="lastname"> Apellido: </label>
            <p> <input type="text" name="lastname"/> </p>
            
            <label for="button"> Botón: </label>
            <p> <input type="button" name="button" value="Clickame"/> </p>
            
            <label for="sex"> Sexo: </label>
            <p>
                Hombre <input type="checkbox" name="sex" value="hombre"/>
                Mujer <input type="checkbox" name="sex" value="mujer" checked="checked"/>
            </p>
            
            <label for="color"> Color: </label>
            <p> <input type="color" name="color"/> </p>
            
            <label for="date"> Fecha: </label>
            <p> <input type="date" name="date"/> </p>
            
            <label for="email"> Email: </label>
            <p> <input type="email" name="email"/> </p>
            
            <label for="file"> Arhivo: </label>
            <p> <input type="file" name="file" multiple="multiple"/> </p>
            
            <label for="number"> Número: </label>
            <p> <input type="number" name="number"/> </p>
            
            <label for="password"> Contraseña: </label>
            <p> <input type="password" name="password"/> </p>
            
            <label for="continente"> Continente: </label>
            <p>
                América: <input type="radio" name="continente" value="América"/>
                Europa: <input type="radio" name="continente" value="Europa"/>
                Asia: <input type="radio" name="continente" value="Asia"/>
            </p>
            
            <label for="phone"> Teléfono: </label>
            <p> <input type="phone" name="phone"/> </p>
            
            <label for="web"> Página web: </label>
            <p> <input type="url" name="web"/> </p>

            <textarea></textarea> <br>

            <label for="continente"> Películas: </label>
            <select name="peliculas">
                <option value="Spiderman">Spiderman</option>
                <option value="Batman">Batman</option>
                <option value="La jungla de cristal">La jungla de cristal</option>
                <option value="Gran torino">Gran torino</option>
            </select>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>