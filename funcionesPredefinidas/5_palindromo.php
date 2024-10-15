<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Funciones Predefinidas 5</title>
</head>
<body>
    
    <?php

        $fraseNormal = "hosh";
        $fraseInvertida = "";
        $palindroma = false;
        
        echo "Frase Normal: ".$fraseNormal;
        for ($i = strlen($fraseNormal) - 1; $i >= 0; $i--) {

           $fraseInvertida .= $fraseNormal[$i];
        }

        echo "<br>Frase Invertida: ".$fraseInvertida;
        if ($fraseInvertida == $fraseNormal) {
            $palindroma = true;
        } else {
            $palindroma = false;
        }

        if ($palindroma) {
            echo "<br>La frase es palíndroma.";
        } else {
            echo "<br>La frase no es palíndroma.";
        } 

    ?>

</body>
</html>