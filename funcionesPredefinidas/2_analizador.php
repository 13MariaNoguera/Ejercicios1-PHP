<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio Funciones Predefinidas 2</title>
</head>
<body>

    <h1>Analizador</h1>

    <?php
        
        $frase = "Hola me llamo Maria";
        $contadorLetras = 0;
        $cantidadPalabras = 0;

        for($i = 0; $i < strlen($frase); $i++) {
            
            if (ctype_alpha($frase[$i])) {
                $contadorLetras += 1;
            } 
        } 
         
        echo "Total de letras: ".$contadorLetras;

        $cantidadPalabras = explode(" ", $frase);
        echo "<br>Cantidad de palabras: ".count($cantidadPalabras);


        // Parte 2

        echo "<br><br>Parte 2<br>";

        $contadorLetras2 = 0;

        
            for ($i = 0; $i < count($cantidadPalabras); $i++) {

                for($j = 0; $j < strlen($cantidadPalabras[$i]); $j++) {
            
                    if (ctype_alpha($cantidadPalabras[$i][$j])) {
                        $contadorLetras2 += 1;
                    }
                }
            
                echo "<br>".$cantidadPalabras[$i]. " --> ". $contadorLetras2;
                $contadorLetras2 = 0;
            }        



    ?>
    


</body>
</html>