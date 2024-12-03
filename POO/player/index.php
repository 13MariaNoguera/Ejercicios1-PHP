<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualización Player</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gotu&display=swap');

        body {
            font-family: "Gotu", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 14px;
            height: 100vh;
        }

        span {
            font-weight: bold;
        }

        .pJugadores {
            line-height: 5;
        }

        p {
            margin: 0px;
        }

        .contenedorPrincipal {
            display: flex;
            justify-content: center;
            align-content: center;
            flex-direction: column;
            gap: 10px;
            width: 100vw;
            height: 100%;
        }

        .contenedorDatos {
            display: flex;
            justify-content: center;
            width: 100%;
            height: 50%;
        }

        .contenedorInfo {
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 70%;
            gap: 5px;
        }

        .contenedorTabla {
            display: flex;
            justify-content: center;
            width: 100%;
            height: 50%;
        }

        table {
            border-collapse: collapse;
            width: 70%;
            text-align: center;
        }

        th {
            text-transform: uppercase;
            background-color: #9CC4FF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td, th {
            padding: 10px;
            border: 1px solid black;
        }

    </style>

</head>
<body>

    <?php

        include_once("Player.php");
        include_once("Team.php");

        $fichero = "csv/plantillas.csv";
        $lecturaFichero = fopen($fichero, "r");

        if (file_exists($fichero)) {
            if ($lecturaFichero) {
                $vector = [];
                while (!feof($lecturaFichero)) {
                    $linea = fgets($lecturaFichero);
                    $vector[] = explode(",", $linea);
                }

                // QUITA CABECERA
                $cabecera = array_shift($vector);

                // CIERRA LECTURA
                fclose($lecturaFichero);
                
                // CABECERA
                $arrayCabecera = [];
                foreach($cabecera as $valores) {
                    $arrayCabecera[] = trim($valores);
                }

                // CREACIÓN OBJETO TIPO TEAM PEDIDO
                $nombreEquipo = "Atlético de Madrid";
                $equipo = new Team($nombreEquipo);

                foreach($vector as $valor) {

                    $datos = array_combine($arrayCabecera, $valor);

                    if ($datos['Equipo'] == $nombreEquipo) {
                        
                        // CREACIÓN OBJETO DE TIPO PLAYER
                        $jugador = new Player(
                            $datos['Nombre'],
                            $datos['Apellidos'],
                            $datos['Fecha'],
                            $datos['Pais'],
                            $datos['Dorsal'],
                            $datos['Posicion'],
                            $datos['G'],
                            $datos['PJ'],
                            $datos['M'],
                            $datos['TA'],
                            $datos['TR']
                        );

                        // ADICIÓN DEL OBJETO TIPO PLAYER AL OBJETO TIPO TEAM
                        $equipo->SignPlayer($jugador);
                    }
                }

                // VISUALIZACIÓN PLANTILLA DEL OBJETO TIPO TEAM CREADO
                $equipo->Render();


            } else {
                echo "No se ha podifo abrir el fichero";
            }
        } else {
            echo "El fichero no existe";
        }

    ?>

</body>
</html> 