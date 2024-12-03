<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Clases.php</title>
    
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #7896EB;
        }

        .datos {
            font-size: 16px;
            margin: 5px 0;
        }

        .datosTitulo{
            font-weight: bold;
        }

    </style>
</head>
<body>

    <?php

        require_once 'Persona.php';
        require_once 'Estudiante.php';
       
        // 1. Crear un objeto de cada tipo

        // Tipo Persona
        $persona = new Persona("12345678S", "Maria", "marnogbel@alu.edu.gva.es");

        // Tipo Estudiante
        $estudiante = new Estudiante("12345678S", "Maria", "marnogbel@alu.edu.gva.es", 1);



        // 2. Llamada a algún setter de cada tipo

        // Setter de tipo Persona 
        $persona->setNombre("Rosa");

        // Setter de tipo Estudiante
        $estudiante->setNumExpediente(2);



        // 3. Llamada a los métodos Mostrar de cada tipo

        // Método Mostrar Persona
        echo "<h2>Método Mostrar Persona</h2>" . $persona->Mostrar();

        // Método Mostrar Estudiante
        echo "<h2>Método Mostrar Estudiante</h2>" . $estudiante->Mostrar();
    ?>

</body>
</html>
