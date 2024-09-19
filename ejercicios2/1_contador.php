<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de Funciones 1</title>

    <style>

        h1 {
            padding-top: 30px;
            text-align: center;
            text-decoration: underline;
            padding-bottom: 20px;
        }  
        

        section{
            border: 2px solid black;
            width: 500px;
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
    <section>
        <p>
            <?php
            
                function cuenta($a, $b) {
                    
                    if ($a > $b) {
                        $x = $a;
                        $y = $b;

                    } else {
                        $x = $b;
                        $y = $a;
                    }

                    for ($i = $y; $i <= $x; $i++) {

                        if ($i < $x-1) {
                            echo $i.", ";

                        } else if ($i < $x){
                            echo $i;

                        } else {
                            echo " y ".$i;
                        }
                        
                    }

                }

                cuenta(20, 10);
            
            ?>
        </p>
    </section>

    
</body>
</html>