<?php

    // Asigno los valores recogidos del input
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $url = $_POST["url"];
    $sexo = $_POST["sexo"];
    $numConvivientes = $_POST["numConvivientes"];
    $aficiones = $_POST["aficiones"];
    $menuFav = $_POST["menuFav"];


    // Pasamos las variables que son array a string
    if (isset($_POST["aficiones"])) {
        $aficiones = implode(", ", $_POST["aficiones"]);
    }

    if (isset($_POST["menuFav"])) {
        $menuFav = implode(", ", $_POST["menuFav"]);
    }

    include("2_formulario.view.php");
?>