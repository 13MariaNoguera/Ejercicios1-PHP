<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Funciones Predefinidas 4</title>
</head>
<body>

    <?php
    
        $frase = "Esto es una cadena transformada a cani.";
        $fraseCani = "";

        for ($i = 0; $i < strlen($frase); $i++) {

            if ($i % 2 == 0) {
                $fraseCani .= strtoupper($frase[$i]);
            } else {
                $fraseCani .= strtolower($frase[$i]);
            }
        }
        echo $fraseCani;

    ?>

</body>
</html>