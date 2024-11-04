<?php

    session_start();

    
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {

        
        if (!isset($_SESSION["calificaciones"])) {
            $_SESSION["calificaciones"] = [];
        }
        
        $registro = [
            "nombre" => $_POST["nombreAlumno"],
            "nota1" => $_POST["nota1"],
            "nota2" => $_POST["nota2"],
            "nota3" => $_POST["nota3"],
            "media" => round(($_POST["nota1"] + $_POST["nota2"] + $_POST["nota3"]) / 3)
        ];
        // Agregar el registro a la lista de calificaciones
        array_push($_SESSION["calificaciones"], $registro);

        $calificaciones = $_SESSION["calificaciones"];

        include("calificaciones.view.php");
    } else {
        // Redirige a la página principal para rellenar los datos
        header("Location: calificaciones.view.php");
    }
?>