<?php

    session_start();


    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    
        $usuario = $_POST["usuario"];
        $contrasenya = $_POST["contrasenya"];
        $recordar = isset($_POST["recordar"]);
    
        if (isset($_POST["recordar"])) {

            // Creo la sesión para recordar
            $_SESSION["usuario"] = $usuario;
            $_SESSION["contrasenya"] = $contrasenya;
            
            include("sesionCreada.view.php");

        } else {

            include("sesionNoCreada.view.php");
        }

    } else {
        header("Location: recordar.view.php");
    }
    
?>