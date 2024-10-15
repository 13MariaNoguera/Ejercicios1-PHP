<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imágenes Subidas</title>
    
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
            padding: 20px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 40px;
            color: #333;
        }

        table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 15px;
            border: 1px solid #dee2e6;
            font-size: 17px;
        }

        table th {
            background-color: #007bff;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table img {
            width: 100px;
            height: auto;
            transition: transform 0.3s;
        }

        table img:hover {
            transform: scale(1.2);
        }

        .boton {
            margin-top: 20px;
        }

        .boton a {
            color: white;
            text-decoration: none;
        }

        .boton a:hover {
            color: #ffc107;
        }

        .btn-primary {
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
        }

    </style>

</head>
<body>

<div class="contenedor">
    <h1>Imágenes Subidas</h1>
    <table>
        <tr>
            <th>Nombre Imagen</th>
            <th>Imagen</th>     
        </tr>

        <?php
        
            $directorio = 'imagenes/';
            $imagenes = array_diff(scandir($directorio), array('.', '..')); // Para excluir los puntos que aparecen en la lista

            foreach ($imagenes as $imagen) {
                echo "<tr>".
                        "<td>".$imagen."</td>".
                        "<td><img src='./imagenes/{$imagen}'></td>".
                "</tr>";
            }

        ?>
    </table>

    <button class="btn btn-primary mt-3 boton"><a href="4_subidaImagen.html">Volver</a></button>
</div>

</body>
</html>
