<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Funciones 1</title>

    <style>

        h1 {
            text-decoration: underline;
            text-align: center;
            padding-top: 30px;
        }

        section {
            border: 1px solid black;
            margin: 0 auto;
            text-align: center;
            width: 30%;
            background-color:  #a7d8ff;
        }

    </style>
</head>
<body>

    <h1>Parámetros Variables</h1>

    <section>
        <p>
            <strong>El número mayor es:</strong> 
            <?php

                function mayor(): int {

                    if (func_num_args() == 0) {
                        return false; 

                    } else {

                        $mayor = func_get_arg(0); 

                        for ($i = 0; $i < func_num_args(); $i++) {
                            
                            if (func_get_arg($i) > $mayor) {
                                $mayor = func_get_arg($i);
                            }
                        }

                        return $mayor;
                    }
                }

                echo mayor(2, 10, 5, 9);
            ?>
        </p>
    </section>
    

</body>
</html>