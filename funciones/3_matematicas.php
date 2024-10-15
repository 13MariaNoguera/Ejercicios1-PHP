<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Funciones 3</title>

    <style>

        h1 {
            text-decoration: underline;
            text-align: center;
        }

        section {
            text-align: center;
            border: 1px solid black;
            width: 30%;
            margin: 0 auto;
            background-color: #a7d8ff;
        }

        p {
            margin: 20px;
        }

    </style>

</head>
<body>

    <?php

        $num = 4165728;
        $cant = 3;

        // 1
        echo "<h1>Función Dígitos</h1>".
        "<section>".
            "<p>El número ".$num." está compuesto por ".digitos($num)." dígitos.</p>".
        "</section>";
        
        // 2
        echo "<h1>Función DígitosN</h1>".
        "<section>".
            "<p>El número ".$num." está compuesto por ".digitos($num)." dígitos.</p>".
        "</section>";

        // 3
        echo "<h1>Función QuitarPorDetrás</h1>".
            "<section>".
                "<p>El número ".$num." quitando por detrás ".$cant." dígitos es: ".quitaPorDetras($num, $cant).".</p>".
            "</section>";

        // 4
        echo "<h1>Función QuitarPorDelante</h1>".
            "<section>".
                "<p>El número ".$num." quitando por delante ".$cant." dígitos es: ".quitaPorDelante($num, $cant).".</p>".
            "</section>";


        // Devuelve la cantidad de dígitos de un número
        function digitos(int $num) : int {

            return strlen($num);
        }

        // Devuelve el dígito que ocupa, empezando por la izquierda, la posición $pos.
        function digitoN(int $num, int $pos) :int {
            $cadena = strval($num);

            return $cadena[$pos-1];
        }

        // Quita por detrás (derecha) $cant dígitos.
        function quitaPorDetras(int $num, int $cant) :int {

            $longitudNueva = strlen($num) - $cant;

            return substr($num, 0, $longitudNueva);
        }

        // Quita por delante (izquierda) $cant dígitos.
        function quitaPorDelante(int $num, int $cant): int {

            $longitudNueva = strlen($num) - $cant;

            return substr($num, $longitudNueva-1, strlen($num));
        }
    ?>
    
</body>
</html>