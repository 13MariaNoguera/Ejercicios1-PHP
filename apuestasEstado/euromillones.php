<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Euromillones</title>    

</head>
<body>

    <?php
        include("loteriasFuncion.php");

        // 5 nums entre 50 posibles (del 1 al 50)
        $numGanadores = [];
        $nums = 5;
        $rango = 50;

        $numGanadores = numAleatorios($numGanadores, $nums, $rango);

        

        // 2 nums entre 9 posibles (del 1 al 9)
        $numEstrellas = [];
        $nums = 2;
        $rango = 9;

        $numEstrellas = numAleatorios($numGanadores, $nums, $rango);


        // Juntamos ambos listados
        $euromillonGanador = array_merge($numGanadores, $numEstrellas);
    ?>

</body>
</html>