<?php
    unset($_SESSION["usuario"]);
    unset($_SESSION["contrasenya"]);

    session_destroy();
    header("Location: inicioSesion.php");
    exit;
?>