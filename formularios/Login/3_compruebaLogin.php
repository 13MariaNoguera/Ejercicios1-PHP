<?php

    $usuario = $_POST['usuario'];
    $contrasenya = $_POST['contrasenya'];
    
    $usuariosAdmitidos = [
        "maria" => "1312",
        "logan" => "123",
        "admin" => "1234"
    ];

    if ($usuariosAdmitidos[$usuario] === $contrasenya) {
        header("Location:ok.php");
        exit();

    } else {
        header("Location:ko.php");
        exit();
    }
?>
