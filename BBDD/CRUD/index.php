<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión</title>
    <link rel="stylesheet" href="scripts/style.css">
</head>
<body>

    <header class="title">
        <h1>INICIO DE SESIÓN</h1>
    </header>

    <div class="container">
        <form class="sessionContainer" action="inicioSesion.php" method="post">
            <div class="col">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" placeholder="Introduzca el usuario">
            </div>
            <div class="col">
                <label for="contrasenya">Contraseña:</label>
                <input type="password" id="contrasenya" name="contrasenya" placeholder="Introduzca la contraseña">
            </div>
            <div class="btnContainer">
                <button class="btnRegistrar">Iniciar</button>
                <button type="reset" class="btnReset">Cancelar</button>
            </div>
        </form>
    </div>
</body>
</html>