<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobación</title>

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

        p {
            margin-top: 30px;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .mensaje {
            background: #BDECB6;
            border-radius: 3px;
            text-align: center;
        }

    </style>


</head>
<body>

    <div class="contenedor">
        <?php
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['imagen'])) {

                $archivosPermitidos = '/\.(jpg|jpeg|png|gif|bmp|tiff|webp)$/i';
                $imagen = $_FILES['imagen']['name'];
                
                if (preg_match($archivosPermitidos, $imagen)) {

                    // Si ha sido subido con éxito
                    if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
                        
                        header("Refresh: 5; url=4_subidaImagen.html");
                        
                        $nombre = $_FILES['imagen']['name']; // Nombre de la imagen
                        move_uploaded_file($_FILES['imagen']['tmp_name'], "imagenes/{$nombre}"); // Mueve la imagen que se ha sudido a la carpeta temporal a la carpeta mencionada (imagenes/)
                        $ruta = "SubidaImagen/imagenes/".$nombre;
                    

                        // Para sacar el tamaño de la imagen
                        $carpeta = "imagenes\\";
                        $directorio = scandir($carpeta);

                        $tamanyo = getimagesize($carpeta . $nombre);
                        $anchura = $tamanyo[0];
                        $altura = $tamanyo[1];


                        // Mostramos lo pedido
                        echo "<h1>¡Extensión Correcta!</h1>";
                        echo '<p class="mensaje">Archivo "'.$nombre.'" subido con éxito</p>';
                        echo "<img src='./imagenes/{$nombre}'>"; // Imagen
                        echo "<p><strong>Ruta Imagen:</strong> ".$ruta."</p>"; // Ruta Imagen
                        echo "<p><strong>Nombre Imagen:</strong> ".$nombre."</p>"; // Nombre Imagen
                        echo "<p><strong>Tamaño Imagen:</strong> ".$anchura." x ".$altura." píxeles</p>"; // Tamaño (Anchura y Altura)
                    }

                } else {
                    header("Location:4_mensajeError.php");
                }
                
            } else {
                echo "Primero debes subir la imagen.";
            }

        ?>
    </div>
</body>
</html>

