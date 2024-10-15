<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>

    <?php

        // Asignamos los valores recogidos del input
        $numero1 = $_GET["X"];
        $numero2 = $_GET["Y"];

        /*
        echo "Número 1: $numero1";
        echo "<br>Número 2: $numero2";
        */

        // Operaciones
        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multi = $numero1 * $numero2;
        $division = $numero1 / $numero2;
        
        // Mostramos
        echo "<br>Suma: $suma";
        echo "<br>Resta: $resta";
        echo "<br>Multiplicación: $multi";
        echo "<br>División: $division";
    ?>
    
</body>
</html>

