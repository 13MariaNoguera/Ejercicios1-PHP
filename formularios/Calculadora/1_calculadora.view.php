<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

    <h1>Calculadora PHP</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>Primer Número: <input type="number" name="X" placeholder="Número 1"></p>
        <p>Segundo Número: <input type="number" name="Y" placeholder="Número 2"></p>

        <button type="submit">Enviar</button>
    </form>

    <?php

        // Comprobamos que no están vacías

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if(!empty($_POST["X"]) && !empty($_POST["Y"])){

                // Asignamos los valores recogidos del input
                $numero1 = $_POST["X"];
                $numero2 = $_POST["Y"];
    
                $suma = $numero1 + $numero2;
                $resta = $numero1 - $numero2;
                $multi = $numero1 * $numero2;
                $division = $numero1 / $numero2;
    
                // Mostramos
                echo "<br>Valores a operar: <br>X: $numero1 <br>Y: $numero2";
                echo "<br><br>Suma: $suma";
                echo "<br>Resta: $resta";
                echo "<br>Multiplicación: $multi";
                echo "<br>División: ".round($division, 2);
    
            } else {
    
                echo "<br>Por favor, introduzca los valores correctamente.";
            }
        }
        
    ?>


    <!-- 
    <form action="1_calculadora.php" method="post">
        <p>Primer Número: <input type="number" name="X" placeholder="Número 1"></p>
        <p>Segundo Número: <input type="number" name="Y" placeholder="Número 2"></p>

        <button type="submit">Enviar</button>
    </form>
    
    <a href="http://localhost/ejercicios/formularios/1_calculadora.php?X=1&Y=2">Enviar</a>

    -->

</body>
</html>