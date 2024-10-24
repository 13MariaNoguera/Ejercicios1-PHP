<?php include("./primitiva.php") ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primitiva</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;900&family=Marcellus&display=swap');

        body {
            font-family: "Marcellus", serif;
        }

        h1 {
            color: #088342;
            text-align:center;
            padding-top: 100px;
        }

        .result {
            width: 600px;
            margin: 200px auto 0 auto;
            text-align: center;
            border-radius: 7px;
            padding: 25px;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2); 
            background: #CFE8E0;
        }

        .bola {
            display: inline-block;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #088342;
            color: #fff;
            line-height: 60px;
            font-size: 24px;
            margin: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        button {
            border-radius: 6px;
            border: none;
            margin-top: 18px;
            background: white;
        }

        button:hover {
            cursor: pointer;
            background: #D1D1D1;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            color: black;
        }
        
    </style>
</head>
<body>

    <h1>¡RESULTADOS DE LA PRIMITIVA!</h1>

    <div class="result">
        <?php
            // Mostramos números ganadores
            echo "<h2>Números ganadores:</h2>";
            foreach ($numGanadores as $numero) {
                echo "<div class='bola'>$numero</div>";
            }
        ?>

        <button class="boton"><a href="selec_apuesta.html">Volver al Inicio</a></button>
    </div>

    
</body>
</html>