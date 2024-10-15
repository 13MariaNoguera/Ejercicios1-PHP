<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=initial-scale=1.0">
    <title>Ejercicio Funciones 2</title>

    <style>

        h1 {
            text-decoration: underline;
            text-align: center;
            padding-bottom: 30px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        section {
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgb(167, 166, 166);
            max-width: 400px;
            width: 40%;
            text-align: center;
        }

        p {
            color: red;
        }
    </style>

</head>
<body>
    <section>
    <h1>Comprobador de Hora</h1>
    <?php

        $varHora = "11:34:24";

        function comprobador($varHora)  {

            if (func_num_args() == 0) {
                return false;
            
            } else {

                $partes = explode(":", $varHora);
                
                list($hora, $minutos, $segundos) = $partes;

                if ($hora < 0 || $hora > 23) {
                    return "<strong>Hora incorrecta: </strong>".$varHora."<p>Introduzca correctamente la hora.</p>";
                
                } else if ($minutos < 0 || $minutos > 60) {
                    return "<strong>Hora incorrecta: </strong>".$varHora."<p>Introduzca correctamente los minutos.</p>";

                } else if ($segundos < 0 || $segundos > 60) {
                    return "<strong>Hora incorrecta: </strong>".$varHora."<p>Introduzca correctamente los segundos.</p>";
                }
            }

            return "<strong>Hora correcta: </strong>".$varHora;
        }

        echo comprobador($varHora);

        ?>
    </section>
    

    
</body>
</html>