<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recordar</title>

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

        h1 {
            margin-bottom: 50px;
        }

        form {
            width: 30%;
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

        .margen {
            margin-top: 26px;
            margin-bottom: 8px;
        }

        .form-label {
            font-weight: bold;
        }

        .botones {
            padding-top: 20px;
            display: flex;
            justify-content: center;
            gap: 13px;
        }

        .form-check {
            margin-top: 20px;
        }

        a {
            text-decoration: none;
            color: white;
        }

    </style>
    
    <?php
    session_start();
    ?>

</head>
<body>

    <div class="contenedor">
        <h1>Recordar</h1>

        <form action="recordar.php" method="post">
            <!-- Usuario -->
            <div class="row">
            <div class="col">
                <label class="form-label margen">Usuario</label>
                <input type="text" value="<?php echo $user = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : "" ?>" class="form-control" name="usuario" placeholder="Introduzca su usuario" aria-label="First name" required>
            </div>
            </div>
          
            <!-- Contraseña -->
            <div class="row">
                <div class="col">
                    <label for="exampleInputPassword1" class="form-label margen">Contraseña</label>
                    <input type="password" value="<?php echo $user = isset($_SESSION["contrasenya"]) ? $_SESSION["contrasenya"] : "" ?>" class="form-control" name="contrasenya" placeholder="Introduzca su contraseña" required>
                </div>
            </div>

            <!-- Botón Recordar -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="recordar" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Recordar</label>
            </div>


            <!-- Botones de Enviar y de Resetear -->
            <div class="margen botones">
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                <button class="btn btn-danger"><a href="olvidarUsuario.php">Olvidar Usuario</a></button>
            </div>

            
            
        </form>
    </div>
    
</body>
</html>
