<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Array 4</title>

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

        $coches = array(
            "111BCD" => array("Ford", "Focus", 5), 
            "333BCD" => array("Ford", "Fiesta", 5), 
            "222BCD" => array("Audi", "A3", 5),
            "444BCD" => array("Audi", "A1", 5), 
        );
    
        ksort($coches);
    ?>

    <section>

        <table>

            <thead>
                <tr>
                    <th colspan="4">Garaje de Coches</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="cabecera">Matrícula</td>
                    <td class="cabecera">Marca</td>
                    <td class="cabecera">Modelo</td>
                    <td class="cabecera">Nº Puertas</td>
                </tr>

                <?php

                    foreach($coches as $matricula => $info) {
                        echo "<tr>".
                                "<td>".$matricula."</td>".
                                "<td>".$info[0]."</td>".
                                "<td>".$info[1]."</td>".
                                "<td>".$info[2]."</td>".
                             "</tr>";  
                    }
                ?>
            </tbody>

        </table>

    </section>


    
</body>
</html>