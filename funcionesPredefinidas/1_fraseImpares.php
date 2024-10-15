<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Funciones Predefinidas 1</title>

    <style>

        h1 {
            text-decoration: underline;
            text-align: center;
            padding-top: 30px;
        }

        section {
            text-align: center;
            border: 1px solid black;
            width: 30%;
            margin: 0 auto;
            background-color: #a7d8ff;
        }

        p {
            margin: 40px;
        }


    </style>

</head>
<body>

    <h1>Frase con letras Impares</h1>

    <section>

        <?php

            $frase = "Esta es la frase entera a pasar a solo ver las letras impares";

            echo "<p><strong>Frase Entera: </strong><br>\"".$frase."\".</p>";
            
            function fraseImpar($frase) {

                $fraseResultante = "";

                for ($i = 0; $i < strlen($frase); $i++) {

                    if ($i % 2 == 1) {
                        $fraseResultante .= $frase[$i];

                    } else {
                        $fraseResultante .= "_";
                    }
                }

                return $fraseResultante;
            }
            echo "<p><strong>Frase solo letras Impares: </strong><br>\"".fraseImpar($frase)."\".</p>";
        ?>

    </section>
    
</body>
</html>