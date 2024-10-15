<?php include("./1_plantilla.php");?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Ficheros CSV</title>

    <style>

        table {
            border-collapse: collapse;
            border: 1px solid black;
        }


    </style>

</head>
<body>

    <h1>Plantillas</h1>

    <h3>1. Mostrar solo el dorsal, nombre apellidos, posicion y equipo.</h3>
    <table>
        <tr>
            <th>Dorsal</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Posicion</th>
            <th>Equipo</th>
        </tr>

        <?php 
                
            foreach($arrayAsociativo as $value) {

                echo "<tr>";
                echo "<td>".$value["Dorsal"]."</td>";
                echo "<td>".$value["Nombre"]."</td>";
                echo "<td>".$value["Apellidos"]."</td>";
                echo "<td>".$value["Posicion"]."</td>";
                echo "<td>".$value["Equipo"]."</td>";
                echo "</tr>";
            }
        ?>
    </table>

    <h3>2. Mostrar la plantilla del Atlético de Madrid ordenada por dorsal.</h3>

    <table>
        <tr>
            <th>Temporada</th>
            <th>Equipo</th>
            <th>Id</th>
            <th>Apodo</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Fecha</th>
            <th>Edad</th>
            <th>Localidad</th>
            <th>Pais</th>
            <th>Posicion</th>
            <th>Dorsal</th>
            <th>PJ</th>
            <th>PT</th>
            <th>PC</th>
            <th>PS</th>
            <th>M</th>
            <th>G</th>
            <th>TA</th>
            <th>TR</th>
        </tr>

        <?php

            // Preguntar
            usort($arrayAsociativo, function($a, $b) {
                return $a['Dorsal'] <=> $b['Dorsal'];
            });

            foreach($arrayAsociativo as $value) {

                if ($value['Equipo'] == 'Atlético de Madrid') {
                    echo "<tr>";
                    echo "<td>".$value['Temporada']."</td>";
                    echo "<td>".$value['Equipo']."</td>";
                    echo "<td>".$value['Id']."</td>";
                    echo "<td>".$value['Apodo']."</td>";
                    echo "<td>".$value['Nombre']."</td>";
                    echo "<td>".$value['Apellidos']."</td>";
                    echo "<td>".$value['Fecha']."</td>";
                    echo "<td>".$value['Edad']."</td>";
                    echo "<td>".$value['Localidad']."</td>";
                    echo "<td>".$value['Pais']."</td>";
                    echo "<td>".$value['Posicion']."</td>";
                    echo "<td>".$value['Dorsal']."</td>";
                    echo "<td>".$value['PJ']."</td>";
                    echo "<td>".$value['PT']."</td>";
                    echo "<td>".$value['PC']."</td>";
                    echo "<td>".$value['PS']."</td>";
                    echo "<td>".$value['M']."</td>";
                    echo "<td>".$value['G']."</td>";
                    echo "<td>".$value['TA']."</td>";
                    echo "<td>".$value['TR']."</td>";
                    echo "</tr>";
                }
            }
        ?>

    </table>


</body>
</html>