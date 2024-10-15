<?php

if (!isset($_SESSION['partidoA'], $_SESSION['partidoB'], $_SESSION['partidoC'], $_SESSION['partidoD'], $_SESSION['votosA'], $_SESSION['votosB'], $_SESSION['votosC'], $_SESSION['votosD'], $_SESSION['escanyos'])) {
    echo "<h1>¡Primero debes de rellenar el formulario!</h1>";
    header("Refresh:2; url=hont.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Hont</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gotu&display=swap');
        
        body {
            font-family: "Gotu", sans-serif;
        }

        .centrar {
            display: flex;
            justify-content: center;
            height: 15vh;
            padding-top: 40px;
        }

        .titulo::after {
            margin-left: 15px;
            content: "📊";
        }

        .caja {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .contenedor {
            width: 70%;
            border-radius: 9px;
            padding: 30px;
            background: #F0F0F4;
            box-shadow: 0 5px 20px rgba(54, 54, 54, 0.3);
        }

        table {
            width: 100%;
            text-align: center;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 15px;
            border: 1px solid black;
        }

        table th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        table th:first-child {
            background-color: transparent;
            border: none;
        }

        tr.escanyo-row:nth-child(even) td {
            background-color: #d6d6d6;
        }

        tr.escanyo-row:nth-child(odd) td {
            background-color: #f0f0f0;
        }

        .fondoVotos td {
            background-color: #339af0 !important;
            color: white;
        }

        .votos {
            font-weight: bold;
            background-color: #339af0;
            color: white;
        }

        table td.escanyo {
            font-weight: bold;
        }

        .boton {
            display: flex;
            justify-content: center;
        }

        .margen-arriba {
            margin-top: 30px;
        }

        .resaltado {
            background-color: orange !important;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <div class="centrar">
        <h1 class="titulo">Resultados Ley d'Hont</h1>
    </div>

    <div class="caja">
        <div class="contenedor">
            <table>
                <?php

                    // Encabezado Partidos
                    echo    "<tr>".
                                "<th></th>".
                                "<th>".$_SESSION['partidoA']."</th>".
                                "<th>".$_SESSION['partidoB']."</th>".
                                "<th>".$_SESSION['partidoC']."</th>".
                                "<th>".$_SESSION['partidoD']."</th>".
                            "</tr>";
        
                    // Votos
                    echo    "<tr class='fondoVotos'>".
                                "<td class='votos'>Votos</td>".
                                "<td class='votos'>".$_SESSION['votosA']."</td>".
                                "<td class='votos'>".$_SESSION['votosB']."</td>".
                                "<td class='votos'>".$_SESSION['votosC']."</td>".
                                "<td class='votos'>".$_SESSION['votosD']."</td>".
                            "</tr>";


                    $mayoresVotos = $_SESSION['mayoresVotos'];

                    for ($i = 1; $i <= $_SESSION['escanyos']; $i++) {
                        $votoA = sacarVotos($_SESSION['votosA'])[$i - 1];
                        $votoB = sacarVotos($_SESSION['votosB'])[$i - 1];
                        $votoC = sacarVotos($_SESSION['votosC'])[$i - 1];
                        $votoD = sacarVotos($_SESSION['votosD'])[$i - 1];
                         
                        // Votos y escaños
                        echo "<tr class='escanyo-row'>".
                                 "<td class='escanyo'>Escaño $i</td>";
                                    
                        $claseA = '';
                        $claseB = '';
                        $claseC = '';
                        $claseD = '';
                            
                        if (in_array($votoA, $mayoresVotos)) {
                            $claseA = 'resaltado';
                        }
                        if (in_array($votoB, $mayoresVotos)) {
                            $claseB = 'resaltado';
                        }
                        if (in_array($votoC, $mayoresVotos)) {
                            $claseC = 'resaltado';
                        }
                        if (in_array($votoD, $mayoresVotos)) {
                            $claseD = 'resaltado';
                        }
        
                        echo "<td class='$claseA'>$votoA</td>".
                             "<td class='$claseB'>$votoB</td>".
                             "<td class='$claseC'>$votoC</td>".
                             "<td class='$claseD'>$votoD</td>".
                            "</tr>";
                    }
                ?>
            </table>

            <div class="boton margen-arriba">
                <a href="hont.html" class="btn btn-primary">Volver al formulario</a>
            </div>
        </div>
    </div>

</body>
</html>
