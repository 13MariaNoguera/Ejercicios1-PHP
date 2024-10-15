<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario Incorrecto</title>

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
            color: red;
            font-weight: bold;
            margin-bottom: 30px;
        }

        img {
            width: 170px;
            height: 170px;
        }

        .parrafo {
            color: black;
            margin-top: 30px;
            font-weight: bold;
        }

        .redireccion {
            color: white;

        }

        .mensaje {
            background: #ff7171;
            border-radius: 3px;
            text-align: center;
        }

    </style>

</head>
<body>

    <div class="contenedor">
        <h1>¡Usuario Incorrecto!</h1>
        <img src="usu_incorrecto.png" alt="usuario_incorrecto">
        <p class="parrafo">Su identificación no sido verificada.</p>

        <section class="mensaje">
            <?php
                header("Refresh:5; url=3_login.php");
                echo "<p class=\"redireccion\">Pronto serás redireccionado al login...</p>";
            ?>
        </section>
        

    </div>

</body>
</html>
