<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Ficheros CSV</title>

    <style>
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>

</head>
<body>
    
    <?php

        $fichero = "./plantillas.csv";
        $lecturaFichero = fopen($fichero, "r");

        if (file_exists($fichero)) {

            if ($lecturaFichero) {
                
                // Mientras haya líneas para leer
                while (!feof($lecturaFichero)){
                
                    $linea = fgets($lecturaFichero);
                    $vector[] = explode(",", $linea);
                }

                // Para quitar la cabecera
                $cabecera = array_shift($vector);

                // Se cierra la lectura
                fclose($lecturaFichero);

                // Visualizamos el vector
                //print_r($vector);

                foreach($cabecera as $valores) {
                    $arrayN[] = trim($valores);
                }

                foreach($vector as $persona) {
                    $arrayAsociativo[] = array_combine($arrayN, $persona);
                }

            } else {
                echo "No se ha podido abrir el archivo.";
            }

        } else {
            echo "El fichero no existe.";
        }
    ?>
    
</body>
</html>