<?php include("./2_casasRuralesTelefonos.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>

        h3 {
            padding: 20px;
            margin: 20px;
            text-align: center;
            font-weight: bold;
        }
    </style>

</head>
<body>
    

    <div class="container-sm">

        <h3>Tabla Casas Rurales</h3>

        
        <table class="table table-striped table-hover table-sm">
            <tr>
                <th>Id</th>
                <th>Localidad</th>
                <th>Nombre</th>
                <th>Teléfono</th>
            </tr>
        

            <?php

                $casasDescartadas = 0;

                foreach($arrayAsociativo as $value) {

                    if (empty($value['telefono'])) {
                       
                        $casasDescartadas++;

                    } else {

                        echo "<tr>";
                        echo "<td>".$value['id']."</td>";
                        echo "<td>".$value['localidad']."</td>";
                        echo "<td>".$value['nombre']."</td>";
                        echo "<td>".$value['telefono']."</td>";
                        echo "</tr>";
                    }    
                }

                echo "Casas Descartadas: ".$casasDescartadas;
            ?>

        </table>


    </div>
    
</body>
</html>