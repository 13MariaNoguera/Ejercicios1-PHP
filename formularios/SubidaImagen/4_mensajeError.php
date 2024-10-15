<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extensión Inválida</title>
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
        
        <h1>¡Algo no ha ido bien!</h1>
        <img src="ups.png" alt="ups">
        <p class="parrafo">La extensión de la imagen subida no es válida. Vuelve a intentarlo.</p>

        <section class="mensaje">
            <?php
                header("Refresh:7; url=4_subidaImagen.html");
                echo "<p class=\"redireccion\">Pronto serás redireccionado a la página principal...</p>";
            ?>
        </section>
        

    </div>
    
</body>
</html>