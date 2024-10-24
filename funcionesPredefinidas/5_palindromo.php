<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Funciones Predefinidas 5</title>
</head>
<body>
    
    <?php

        $fraseNormal = "ligar es ser agil";
        // Eliminar espacios y convertir a minúsculas
        $fraseSinEspacios = str_replace(' ', '', strtolower($fraseNormal));
        $fraseInvertida = "";
        
        // Invertir la frase usando un bucle for
        for ($i = strlen($fraseSinEspacios) - 1; $i >= 0; $i--) {
            $fraseInvertida .= $fraseSinEspacios[$i];
        }

        // Mostrar la frase original y la frase invertida
        echo "Frase Original: " . $fraseNormal;
        echo "<br>Frase Invertida: " . $fraseInvertida;

        // Verificar si la frase es palíndroma
        if ($fraseInvertida == $fraseSinEspacios) {
            echo "<br>La frase es palíndroma.";
        } else {
            echo "<br>La frase no es palíndroma.";
        }

    ?>

</body>
</html>
