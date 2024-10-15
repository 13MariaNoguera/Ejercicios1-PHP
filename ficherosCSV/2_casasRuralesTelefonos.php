<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Ficheros CSV</title>
</head>
<body>

    <?php

        $fichero = "./casas_rurales.csv";
        $lecturaFichero = fopen($fichero, "r");


        if (file_exists($fichero)) {

            if ($lecturaFichero) {
                
                // Mientras haya líneas para leer
                while (!feof($lecturaFichero)){
                
                    $linea = fgets($lecturaFichero);
                    $vector[] = explode(";", $linea);
                }

                // Para quitar la cabecera
                $cabecera = array_shift($vector);

                // Se cierra la lectura
                fclose($lecturaFichero);


                foreach($cabecera as $valores) {
                    $arrayN[] = trim($valores);
                }

                foreach($vector as $persona) {
                    $arrayAsociativo[] = array_combine($arrayN, $persona);
                }

            } else {
                echo "No se ha podido abrir el fichero.";
            }

        } else {
            echo "El fichero no existe.";
        }
    ?>
    
</body>
</html>