<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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

    </style>

</head>
<body>

    <div class="contenedor">
        <h1>Login</h1>

        <form action="3_compruebaLogin.php" method="post">
          <!-- Usuario -->
          <div class="row">
            <div class="col">
                <label class="form-label margen">Usuario</label>
                <input type="text" class="form-control" name="usuario" placeholder="Introduzca su usuario" aria-label="First name" required>
            </div>
          </div>
          
          <!-- Contraseña -->
          <div class="row">
            <div class="col">
                <label for="exampleInputPassword1" class="form-label margen">Contraseña</label>
                <input type="password" class="form-control" name="contrasenya" placeholder="Introduzca su contraseña" required>
            </div>
          </div>

          <!-- Botones de Enviar y de Resetear -->
          <div class="margen botones">
            <button type="submit" class="btn btn-primary">Acceder</button>
            <button type="reset" class="btn btn-light">Reiniciar</button>
          </div>
            
        </form>
    </div>
    
</body>
</html>
