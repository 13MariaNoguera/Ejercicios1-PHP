<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión Creada</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gotu&display=swap');

        body {
            font-family: "Gotu", sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .contenedor {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h4 {
            margin-bottom: 50px;
        }

        .credenciales {
            display: flex;
            justify-content: center;
            align-items: center;
            min-width: 29%;
            height: 250px;
            border-radius: 5px;
            background: #F0F0F4;
        }

        table {
            width: 70%;
            height: 100px;
            text-align: center;
            border-collapse: collapse;
            margin: 20px;
            
        }

        th, td {
            border: 1px solid black;
        }

        th {
            background-color: #0D6EFD; 
            color: white;
        }

        td {
            background-color: white; 
        }

        .margen {
            margin-top: 26px;
            margin-bottom: 8px;
        }

        .botones {
            padding-top: 20px;
            display: flex;
            justify-content: center;
            gap: 13px;
        }
        
        a {
            text-decoration: none;
            color: white;
        }

    </style>

</head>
<body>

    <div class="contenedor">

        <h4>¡La Sesión Ha Sido Creada!</h4>

        <div class="credenciales">

            <table>
                <tr>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                </tr>
                <tr>
                    <td><?php echo $_SESSION["usuario"]?></td>
                    <td><?php echo $_SESSION["contrasenya"]?></td>
                </tr>
            </table>

        </div>

        <div class="margen botones">
            <button class="btn btn-primary"><a href="recordar.view.php">Volver al Inicio</a></button>
        </div>


    </div>
    
</body>
</html>