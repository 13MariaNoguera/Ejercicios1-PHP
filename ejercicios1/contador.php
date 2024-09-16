<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>

    <style>

        h1, h2{
            padding-top: 30px;
            text-align: center;
        }

        h1 {
            text-decoration: underline;
            padding-bottom: 20px;
        }

        section{
            border: 1px solid #000;
            width: 600px;
            margin: 0 auto;
        }

        p{
            text-align: center;
            margin: 40px;
        }

    </style>

</head>
<body>


    <h1>Ejercicio Contador</h1>


    <h2>1. Estructura For</h2>
    <section>
        <p>
            <?php

                for($i = 0; $i <= 100; $i++) {

                    if ($i != 99 && $i != 100) {
                        echo $i.", ";

                    } else if ($i == 99){
                        echo " ".$i;
                        
                    } else {
                        echo " y ".$i.".";
                    }
                }

            ?>
        </p>
    </section>


    <h2>2. Estructura While</h2>
    <section>
        <p>
            <?php
                $i = 10;
                while ($i >= 0) {

                    if ($i != 0) {
                        echo $i." - ";
                    } else {
                        echo $i."";
                    }

                    $i--;
                }
            ?>
        </p>
    </section>
    
</body>
</html>