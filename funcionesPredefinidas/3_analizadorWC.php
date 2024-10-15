<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Funciones Predefinidas 3</title>
</head>
<body>

   <?php

        $frase = "Hola me llamo Maria";

        // Letras totales y cantidad de palabras.
        $letrasTotales = 0;
        $cantidadPalabras = str_word_count($frase);
        $arrayPalabras = str_word_count($frase, 1);

        for ($palabra = 0; $palabra < count($arrayPalabras); $palabra++) {

            for ($letra = 0; $letra < strlen($arrayPalabras[$palabra]); $letra++) {

                $letrasTotales++;
            }
        }

        echo "<h3>1. Letras Totales y Cantidad de Palabras</h3>";
        echo "Letras Totales: ".$letrasTotales;
        echo "<br>Cantidad de Palabras: ".$cantidadPalabras;


        // Una línea por cada palabra indicando su tamaño.
        $letrasTotales = 0;
        echo "<h3>2. Una línea por cada palabra indicando su tamaño.</h3>";
        for ($palabra = 0; $palabra < count($arrayPalabras); $palabra++) {

            for ($letra = 0; $letra < strlen($arrayPalabras[$palabra]); $letra++) {

                $letrasTotales++;
            }
            echo $arrayPalabras[$palabra]." --> ".$letrasTotales."<br>";
            $letrasTotales = 0;
        }
    ?> 
    
</body>
</html>