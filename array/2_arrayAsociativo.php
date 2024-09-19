<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Array 2</title>

    <style>

        section {
            margin: 50px;
        }

        table {
            width: 60%;              
            margin: 0 auto; 
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        thead th {
            background-color: #a7d8ff;
            padding: 10px;
            text-align: center;
        }

        .cabecera {
            background-color: #d4ecff;
        }

        tbody td {
            border: 1px solid #dddddd;
            padding: 8px;   
            text-align: center;
        }
    </style>


</head>
<body>
    
    <?php

        $array = array();

        for($i = 0; $i < 100; $i++) {

            $letras = rand(0, 1);
            
            switch($letras) {
                case 0:
                    $array[] = "M";
                    break;
                case 1:
                    $array[] = "F";
                    break;
            }
        }

        $contador = ['M' => 0, 'F' => 0];

        foreach($array as $valor) {
            $contador[$valor]++;
        }
    ?>

    <section>
        <table>

            <thead>
                <tr>
                    <th colspan="2">Cantidad de Elementos</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="cabecera">Elemento M</td>
                    <td class="cabecera">Elemento F</td>
                </tr>
                
                <tr>
                    <?php
                        echo
                        "<td>{$contador['M']}</td>";
                        echo
                        "<td>{$contador['F']}</td>";
                    ?>
                </tr>
            </tbody>

        </table>

    </section>

</body>
</html>