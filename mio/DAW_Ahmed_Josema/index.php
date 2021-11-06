<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Document html">
    <meta name="author" content="Ahmed R.">
    <meta name="keywords" content="computers,programing,web design,html,html5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="lang" content="es-ES">
    <title>Document</title>
</head>
<body>
    <main id="form">
        <form method="post" action="index.jsp">
            <fieldset>
                <legend>Registro</legend>
                <p>
                    <label for="name">Nombre: </label>
                    <input type="text" name="name" id="name" size="8">
                </p>
                <p>
                    <label for="sur">Primer apellido: </label>
                    <input type="text" name="sur" id="sur" size="8">
                </p>
                <p>
                    <label for="tlf">Teléfono: </label>
                    <input type="number" name="tlf" id="tlf" size="8">
                </p>
                <p>
                    <label for="ema">Correo electrónico: </label>
                    <input type="email" name="ema" id="ema" size="8">
                </p>
                <p>
                    <label for="user">Nombre de usuario: </label>
                    <input type="text" name="user" id="user" size="8">
                </p>
                <p>
                    <label for="passwd">Contraseña: </label>
                    <input type="password" name="passwd" id="passwd" size="8">
                </p>
                <p>
                    <input type="submit" value="Enviar">
                </p>
            </fieldset>
        </form> 
    </main>
</body>
</html>