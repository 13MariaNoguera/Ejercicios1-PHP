<?php include("./euromillones.php") ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Euromillones</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;900&family=Marcellus&display=swap');

        body {
            font-family: "Marcellus", serif;
        }

        h1 {
            color: #003F68;
            text-align:center;
            padding-top: 50px;
        }

        .result {
            width: 650px;
            margin: 200px auto 0 auto;
            text-align: center;
            border-radius: 7px;
            padding: 25px;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2); 
            background: #A2C2E2;
        }

        .bola {
            display: inline-block;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #003F68;
            color: #fff;
            line-height: 60px;
            font-size: 24px;
            margin: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .estrella {
            display: inline-block;
            width: 60px;
            height: 60px;
            background-color: #e67e22;
            color: #fff;
            line-height: 60px;
            font-size: 24px;
            margin: 10px;
            text-align: center;
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
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

        .boton {
            margin-left: 18px;
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

    <h1>¡RESULTADOS DEL EUROMILLÓN!</h1>

    <div class="result">
        <?php  
            // Mostramos números ganadores
            echo "<h2>Números ganadores:</h2>";
            for ($i = 0; $i < 5; $i++) {
                echo "<div class='bola'>$euromillonGanador[$i]</div>";
            }

            for ($i = 5; $i < 7; $i++) {
                echo "<div class='estrella'>{$euromillonGanador[$i]}</div>";
            }
        ?>
        
        <button class="boton"><a href="selec_apuesta.html">Volver al Inicio</a></button>
    </div>

    
</body>
</html>