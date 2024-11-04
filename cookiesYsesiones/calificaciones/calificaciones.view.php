<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Gotu&display=swap');
        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Gotu", sans-serif;
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;  
        }

        .formContainer {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form {
            width: 80%;
            min-width: 400px;
            border-radius: 9px;
            padding: 40px;
            background: #F0F0F4;
            box-shadow: 0 5px 10px rgba(54, 54, 54, 0.1);
        }

        input.form-control:focus {
            box-shadow: none;
            border-color: #d9edff;
        }

        .divBtn {
            padding-top: 20px;
            display: flex;
            justify-content: center;
            gap: 13px;
        }
        
        .margen {
            margin-top: 26px;
        }

        .form-label {
            font-weight: bold;
        }

        .resultTable {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
            font-weight: normal;
        }

        th {
            background-color: #519EFF;
            color: #FFFFFF;
            font-weight: bold;
        }

        td {
            background-color: #FFFFFF;
            color: black;
        }

        tr:nth-child(even) td {
            background-color: #F1F1F1;
        }

        th[colspan="5"] {
            background-color: #0D6EFD;
        }

        table, th, td {
            border: 1px solid #D3D3D3;
        }

        .title-1, .title-2 {
            margin-bottom: 30px;
        }

    </style>

</head>
<body>

    <div class="formContainer">
        <h2 class="title-1">Calificaciones</h2>

        <form class="form" action="calificaciones.php" method="post">

            <!-- Nombre Alumn@ -->
            <div class="row">
                <div class="col">
                    <label class="form-label">Alumno</label>
                    <input type="text" class="form-control" name="nombreAlumno" placeholder="Nombre alumn@" aria-label="First name" required>
                </div>
            </div>
          
            <!-- Calificaciones Alumn@ -->
            <div class="row">
                <div class="col">
                    <label for="exampleInputPassword1" class="form-label margen">1er Trimestre</label>
                    <input type="number" class="form-control" name="nota1" placeholder="Nota 1er" min="1" max="10" required>
                </div>
                <div class="col">
                    <label for="exampleInputPassword1" class="form-label margen">2do Trimestre</label>
                    <input type="number" class="form-control" name="nota2" placeholder="Nota 2do" min="1" max="10" required>
                </div>
                <div class="col">
                    <label for="exampleInputPassword1" class="form-label margen">3er Trimestre</label>
                    <input type="number" class="form-control" name="nota3" placeholder="Nota 3er" min="1" max="10" required>
                </div>
            </div>

            <!-- Botones Añadir y Resetear -->
            <div class="divBtn margen">
                <button class="btn btn-primary" type="submit">Añadir</button>
                <button class="btn btn-secondary" type="reset">Reiniciar</button>
            </div>

        </form>
    </div>
    
    <div class="formContainer">
        <h2 class="title-2">Tabla Calificaciones</h2>

        <div class="resultTable">
            <table>
                <tr>
                    <th colspan="5">Calificaciones de los Alumnos</th>
                </tr>
                <tr>
                    <th>Nombre Alumno</th>
                    <th>1er Trimestre</th>
                    <th>2do Trimestre</th>
                    <th>3er Trimestre</th>
                    <th>Media Final</th>
                </tr>
                <?php 
                    if(isset($calificaciones)) {
                        
                        foreach($calificaciones as $alumno) {
                            echo    "<tr>".
                                        "<td>". $alumno["nombre"] ."</td>".
                                        "<td>". $alumno["nota1"] ."</td>".
                                        "<td>". $alumno["nota2"] ."</td>".
                                        "<td>". $alumno["nota3"] ."</td>".
                                        "<td>". $alumno["media"] ."</td>".
                                    "</tr>";
                        }

                    }
                ?>
            
            </table>
        </div>
        <div class="divBtn margen">
                <a href="borrarDatos.php">Borrar Datos</a>
        </div>
    </div>
    
</body>
</html>