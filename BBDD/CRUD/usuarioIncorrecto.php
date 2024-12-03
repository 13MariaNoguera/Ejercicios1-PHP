<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario Incorrecto</title>
    <link rel="stylesheet" href="scripts/style.css">
</head>
<body>

    <header class="title">
        <h1>¡USUARIO INCORRECTO!</h1>
    </header>

    <div class="container">
        <div class="messageContainer">
            <p class="parrafo">Su identificación no sido verificada.</p>
            <img src="img/xImagen.png" width="40" alt="x">
            <section class="mensaje">
                <?php
                    header("Refresh:6; url=index.php");
                    echo "<p class=\"redireccion\">Pronto serás redireccionado al login...</p>";
                ?>
            </section>
        </div>
    </div>
    
</body>
</html>