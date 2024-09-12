<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Prueba if</title>

    <style>


        h1{
            padding-top: 40px;
            text-align: center;
        }

        section{
            border: 1px solid #000;
            height: 50px; 
            width: 500px;
            margin: 0 auto;
        }

        p{
            text-align: center;
        }

    </style>

</head>
<body>

    <h1><b>Ejercicio Prueba if</b></h1>

    <section>
        <p>
            <?php

                $nota1 = 8.75;
                $nota2 = 9;

                if ($nota1 > $nota2) {
                    echo "La nota '".$nota1."' es mayor que la nota '".$nota2."'.";
                } elseif ($nota2 > $nota1) {
                    echo "La nota '".$nota2."' es mayor que la nota '".$nota1."'.";
                } else {
                    echo "Ambas notas son iguales.";
                }

            ?>
        </p>
    </section>
    
    
</body>
</html>