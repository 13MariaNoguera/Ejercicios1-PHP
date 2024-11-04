<?php 

    session_start();

    session_destroy(); // Se destruyen los datos
    header("Location: calificaciones.view.php");
    exit;

?>