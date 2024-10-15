<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primitiva</title>
</head>
<body>
    
    <?php
        include("loteriasFuncion.php");

        // 6 nums entre 49 posibles (del 1 al 49)
        $numGanadores = [];
        $nums = 6;
        $rango = 49;

       $numGanadores = numAleatorios($numGanadores, $nums, $rango);
    ?>
    
</body>
</html>
