<?php include("carro.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de la Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="carro.css">
    <script src="https://kit.fontawesome.com/4a521abdbf.js" crossorigin="anonymous"></script>
</head>
<body>
    

    <div class="contenedorPrincipal">

        <header class="cabecera">

            <h1>PEPE'S SHOP</h1>

            <a href="carroTotal.php" class="btn btn-primary">
                <i class="bi bi-cart"></i>
            </a>

        </header>

        <div class="contenedor">
            <?php  
                foreach($articulos as $articulo) {
                    echo    "<div class='articulos'>".
                                "<img class='imagenes' src='{$articulo["foto"]}' alt='{$articulo["nombre"]}'>".
                                "<p class='nombreArticulo'>{$articulo["nombre"]}</p>".
                                "<p class='precio'>{$articulo["precio"]}€</p>".
                                "<button class='btnAgregar btn btn-primary'><a class='enlace' href='carro.php?articulo={$articulo["id"]}'>Añadir al carrito</a></button>".
                            "</div>";
                }
            ?>
        </div>
    </div>

</body>
</html>