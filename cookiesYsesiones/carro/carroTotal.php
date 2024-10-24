<?php include("carro.php")?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de la Compra</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="carro.css">

</head>
<body>

    <h1 class="carro">CARRITO DE COMPRA</h1>
    
    <div class="contenedorPrincipal">

        <?php

            $precioTotal = 0;

            // Si no hay nada en el carrito 
            if (!isset($_SESSION["carroCompra"])) {
                echo "<p>No se ha añadido ningún artículo al carrito todavía.</p>";
            } else {

                foreach($_SESSION["carroCompra"] as $articulo) {

                    $precioTotal += $articulo["precio"];

                    echo    "<div class='contenedorCarro'>".
                                "<table>".
                                    "<tr>".
                                            "<td><img class='imgCarro' src='{$articulo["foto"]}' alt='{$articulo["nombre"]}'>"."</td>".
                                            "<td>".$articulo["nombre"]."</td>".
                                            "<td><strong>Precio: </strong>".$articulo["precio"]."€</td>".
                                        "</tr>".
                                "</table>".
                            "</div>";
                            
                }

                echo    "<div class='precioTotal'>".
                            "<p><strong>Precio Total: </strong>{$precioTotal}€</p>".
                        "</div>";
                
            }      

        ?>
    </div>
    

    <div class="margen botones">
        <button class="btn btn-primary">
            <a class="botonInicio" href="carro.view.php">Inicio</a>
        </button>
        <button class="btn btn-danger">
            <a class="botonCerrar" href="cerrarSesion.php">Vaciar Carro</a>
        </button>
    </div>
    
</body>
</html>