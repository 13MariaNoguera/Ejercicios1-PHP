<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Array 5</title>

    <style>

        h1 {
            text-align: center;
            padding-top: 50px;
            padding-bottom: 10px;
        }

        table {
            margin: 0 auto; 
            border-collapse: collapse;
            border: 1px solid blue;
            font-family: Arial, sans-serif;
        }

        td {
            border: 1px solid #dddddd;
            padding: 8px;   
            text-align: center;
        }

        /* Colores Columna y Fila */

        .azul { 
            color: blue;
            font-weight: bold;
        }

        .verde { 
            color: green; 
            font-weight: bold;
        }

        .negro { 
            color: black; 
        }

    </style>

</head>
<body>
    
    <?php

        $arrayBidi = array();

        for ($fila = 0; $fila <= 6; $fila++) {
            for ($columna = 0; $columna <= 9; $columna++) {
                
                do {

                    $numAle = rand(0, 99);
    
                } while (in_array($numAle, $arrayBidi));

                $arrayBidi[$fila][$columna] = $numAle;
            }
        }

        // COLUMNA MÁXIMA

        // Asumimos que el maximo está primero en las primeras posiciones
        $maximo = $arrayBidi[0][0];
        $columnaMaximo = 0;

        // Comprobamos recorriendo cuál es el mayor
        for ($fila = 0; $fila <= 6; $fila++) {
            for ($columna = 0; $columna <= 9; $columna++) {

                if ($arrayBidi[$fila][$columna] > $maximo) {
                    $maximo = $arrayBidi[$fila][$columna];
                    $columnaMaximo = $columna;
                }
            }
        }


        // FILA MÍNIMA

        // Asumimos que la fila mínima se encuentra en las primeras posiciones
        $minimo = $arrayBidi[0][0];
        $filaMinimo = 0;

        // Comprobamos recorriendo cuál es el mínimo
        for ($fila = 0; $fila <= 6; $fila++) {
            for ($columna = 0; $columna <= 9; $columna++) {

                if ($arrayBidi[$fila][$columna] < $minimo) {
                    $minimo = $arrayBidi[$fila][$columna];
                    $filaMinimo = $fila;
                }
            }
        }

    
        // Mostrar tabla de array bidimensional
        echo "<h1>Array Bidimensional</h1>";
        echo "<table>";
        for ($fila = 0; $fila <= 6; $fila++) {
            echo "<tr>";
            for ($columna = 0; $columna <= 9; $columna++) {

                if ($fila == $filaMinimo) {
                    echo "<td class='verde'>" . $arrayBidi[$fila][$columna] . "</td>";

                } elseif ($columna == $columnaMaximo) {
                    echo "<td class='azul'>" . $arrayBidi[$fila][$columna] . "</td>";
                
                } else {
                    echo "<td class='negro'>" . $arrayBidi[$fila][$columna] . "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        
    
    ?>


</body>
</html>