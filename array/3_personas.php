<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Array 3</title>

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

        $personas = [
            ['nombre' => 'Maria', 'altura' => 165, 'email' => 'mnoguerabe@gmail.com'],
            ['nombre' => 'Logan', 'altura' => 170, 'email' => 'lnaranjo@gmail.com'],
            ['nombre' => 'Emi', 'altura' => 157, 'email' => 'etaberner@gmail.com'],
            ['nombre' => 'Alex', 'altura' => 180, 'email' => 'aruiz@gmail.com'],
            ['nombre' => 'Luis', 'altura' => 176, 'email' => 'lfernandez@gmail.com']
        ];      

        # print_r($personas);
    ?>
    
    <section>

        <table>

            <thead>
                <tr>
                    <th colspan="3">Personas</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="cabecera">Nombre</td>
                    <td class="cabecera">Altura</td>
                    <td class="cabecera">Email</td>
                </tr>

                <?php

                    for($i = 0; $i < count($personas); $i++) {
                        echo "<tr>".
                            "<td>".$personas[$i]["nombre"]."</td>".
                            "<td>".$personas[$i]["altura"]."</td>".
                            "<td>".$personas[$i]["email"]."</td>".
                        "</tr>";
                    }
                ?>
            </tbody>

        </table>

    </section>

</body>
</html>