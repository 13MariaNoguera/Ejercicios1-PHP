<?php
    session_start();
    include("funciones.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio CRUD</title>
    <link rel="stylesheet" href="scripts/style.css">
    <script src="https://kit.fontawesome.com/4a521abdbf.js" crossorigin="anonymous"></script>
</head>
<body>

    <header class="header">
        <p class="sesion"><i class="fa-solid fa-user"></i>Bienvenid@ <?php echo $_SESSION["usuario"]?></p>
        <h1>EJERCICIO CRUD</h1>
        <a class="cerrarSesion" href="cerrarSesion.php">Cerrar Sesión</a>
    </header>
    
    <div class="container">
        <form class="containerRegistro" method="post" action="insert.php">
            <div class="col">
                <label class="textLabel">Título:</label>
                <input type="text" name="title" id="tituloLibro" placeholder="Introduzca aquí el título" required>
            </div>
            <div class="col">
                <label class="textLabel">Descripción:</label>
                <textarea name="description" id="description" placeholder="Introduzca aquí la descripción"></textarea>
            </div>

            <div class="btnContainer">
                <button class="btnRegistrar">Subir</button>
                <button type="reset" class="btnReset">Cancelar</button>
            </div>
        </form>

        <div class="containerTabla">
            <?php echo mostrarTabla();?>
        </div>
    </div>

    <footer class="crudFooter">
            <p>
                by María Noguera
                <span>
                    <svg width="10px" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M9 2H5v2H3v2H1v6h2v2h2v2h2v2h2v2h2v2h2v-2h2v-2h2v-2h2v-2h2v-2h2V6h-2V4h-2V2h-4v2h-2v2h-2V4H9V2zm0 2v2h2v2h2V6h2V4h4v2h2v6h-2v2h-2v2h-2v2h-2v2h-2v-2H9v-2H7v-2H5v-2H3V6h2V4h4z" fill="currentColor"/>
                    </svg>
                </span>
            </p>
    </footer>
    
</body>
</html>