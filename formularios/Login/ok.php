<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario Correcto</title>

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
            text-align: center;
        }

        h1 {
            color: green;
            font-weight: bold;
            margin-bottom: 30px;
        }

        img {
            width: 170px;
            height: 170px;
        }

        p {
            color: black;
            margin-top: 30px;
            font-weight: bold;
        }

        a {
            text-decoration: none;
            color: white;
        }
    

    </style>

</head>
<body>

    <div class="contenedor">
        <h1>¡Usuario Correcto!</h1>
        <img src="usu_correcto.png" alt="usuario_correcto">
        <p>Su identificación ha sido verificada.</p>
        <button class="btn btn-success mt-3"><a href="3_login.php">Volver</a></button>
    </div>

</body>
</html>
