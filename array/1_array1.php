<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Array 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            max-width: 200px;
            margin: auto;
        }

        li {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        section {
            border: 2px solid black;
            border-radius: 8px;
            padding: 20px;
            width: 80%;
            max-width: 500px;
            margin: 20px auto;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        p {
            font-size: 18px;
            margin: 10px;
            line-height: 1.5;
        }

    </style>

</head>
<body>

    <?php

        $array = array();

        for($i = 0; $i <= 49; $i++) {

            do {

                $numAle = rand(0, 99);

            } while (in_array($numAle, $array));
           
            $array[] = $numAle;
        }

        # Ordenamos el array
        sort($array);

        echo "<ul>";
        foreach($array as $num) {
            echo "<li>$num</li>";
        }
        echo "</ul>";

        # Mayor
        $mayor = max($array);

        # Menor
        $menor = min($array);

        # Media
        $media = array_sum($array)/count($array);
        echo "<section>".
            "<p><strong>El número mayor es:</strong> $mayor</p>".
            "<p><strong>El número menor:</strong> $menor</p>".
            "<p><strong>La media de los números:</strong> $media</p>".
            "</section>";
    ?>

</body>
</html>