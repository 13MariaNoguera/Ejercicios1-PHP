<?php

    session_start();

    if ($_SERVER["REQUEST_METHOD"] === 'POST') { 

        $_SESSION["usuario"] = $_POST["usuario"];
        $_SESSION["contrasenya"] = $_POST["contrasenya"];

        $usuariosAdmitidos = [
            "maria" => "1312",
            "logan" => "123",
            "admin" => "1234"
        ];

        if ($usuariosAdmitidos[$_SESSION["usuario"]] === $_SESSION["contrasenya"]) {
            header("Location:crud.php");
            exit();

        } else {
            header("Location:usuarioIncorrecto.php");
            exit();
        }

    } else {
        header("Location: index.php");
    }
?>