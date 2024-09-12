<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Círculo</title>
</head>
<body>
    
    <?php

        $radio = 3.5;
        define('PI', 3.1416);

        $area_circulo = PI * pow($radio,2);

    ?>

    <p>El área del cículo es <?php echo $area_circulo?>.</p>

</body>
</html>