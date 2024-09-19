<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de Funciones 2</title>

    <style>
        h1 {
            padding-top: 30px;
            text-align: center;
            text-decoration: underline;
            padding-bottom: 20px;
        }  
        

        section{
            border: 1px solid #000;
            width: 400px;
            margin: 0 auto;
            background-color: #a7d8ff;
        }

        p{
            text-align: center;
            margin: 40px;
        }
    </style>

</head>
<body>

    <h1>Ejercicio Intercambio</h1>
        <section>
            <p>
                <?php

                    function intercambia($a, $b) {

                        echo "<strong>Valor antiguo de A: </strong>". $a;
                        echo "<br><strong>Valor antiguo de B: </strong>". $b;
                        
                        $x;

                        $x = $a;
                        $a = $b;
                        $b = $x;

                        echo "<br><br><strong>Valor nuevo de A: </strong>". $a;
                        echo "<br><strong>Valor nuevo de B: </strong>". $b;
                    }

                    intercambia(4, 7);
                ?>

            </p>
            
        </section>
    
</body>
</html>