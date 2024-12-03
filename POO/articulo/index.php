<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Artículo</title>

    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Gotu&display=swap');

        body {
            font-family: "Gotu", sans-serif;
            margin: 0;
            height: 100vh;
            width: 100vw;
        }

        h2 {
            color: #7896EB;
        }

        .contenedorPrincipal {
            display: flex;
            justify-content: center;
            flex-direction: column;
            height: 100%;
            width: 100%;
        }

        .contenedorDatos {
            display: flex;
            justify-content: center;
            align-self: center;
            flex-direction: column;
            width: 40%;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
            box-shadow: 4px 4px 4px rgba(200, 200, 200, 0.2);
        }

        .datosArticulo {
            font-size: 16px;
            margin: 5px 0;
        }

        span {
            font-weight: bold;
        }

    </style>

</head>
<body>
    
    <?php	

        require_once('Articulo.php');
        require_once('ArticuloRebajado.php');

        $articuloRebajado = new ArticuloRebajado('Bicicleta', 352.10, 20);

        echo "<div class='contenedorPrincipal'>";
        echo    "<div class='contenedorDatos'>";
        echo        $articuloRebajado;
        var_dump($articuloRebajado);
        echo    "</div>";
        echo "</div>";
    ?>

</body>
</html>