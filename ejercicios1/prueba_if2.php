<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>

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
    
<h1><b>Ejercicio Prueba if Modificado</b></h1>

<section>
    <p>
        <?php

            $nota1 = 10;
            $nota2 = 9.70;
            $nota3 = 9.75;

            if ($nota1 > $nota2 && $nota1 > $nota3) {
                echo "La nota '".$nota1."' es mayor que la nota '".$nota2."' y '".$nota3."'.";

            } else if ($nota2 > $nota1 && $nota2 > $nota3) {
                echo "La nota '".$nota2."' es mayor que la nota '".$nota1."' y '".$nota3."'.";
                
            } else {
                echo "La nota '".$nota3."' es mayor que las notas '".$nota1."' y '".$nota2."'.";
            }

        ?>
    </p>
</section>

</body>
</html>