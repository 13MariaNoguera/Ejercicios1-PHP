<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
    
    <!-- CSS -->
    <style>

        h1{
            padding-top: 20px;
            text-align: center;
        }

        p{
            margin: 20px;
        }

        .p1{
            padding-top: 20px;
        }

        section{
            border: 1px solid #000;
            height: 250px; 
            width: 550px;
            margin: 0 auto;
        }

        .php {
            padding-top: 15px;
            text-align: center;
            font-size: 20px;
            color: violet;
        }

    </style>

</head>
<body>
    
    <?php

        $nombre = "María Noguera Belenguer";

        // Estudios
        $estudio1 = "Bachillerato Científico";
        $estudio2 = "Título Superior de Música";
        $estudios = $estudio1." y ".$estudio2;

        $estudio_actual = "Desarrollo de Aplicaciones Web";

        // Idiomas
        $idioma1 = "Castellano";
        $idioma2 = "Valenciano";
        $idioma3 = "Inglés";
        $idiomas = $idioma1.", ".$idioma2." e ".$idioma3;

    ?>

    <h1>Currículum</h1>
    <br>
    <section>
        <p class="php"><?php echo $nombre?></p>
        <p class="p1"><b>- Estudios realizados: </b> <?php echo $estudios?>.</p>
        <p><b>- Estudios Actuales: </b> <?php echo $estudio_actual?>.</p>
        <p><b>- Idiomas: </b> <?php echo $idiomas?>.</p>
    </section>
    

</body>
</html>