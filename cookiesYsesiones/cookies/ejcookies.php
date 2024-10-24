<?php 

    $nombre = "María";
    $respuesta = "";

    // Si no existe la cookie user
    if (!isset($_COOKIE['user'])) {

        setcookie('user', $nombre, time() + 1000);
        $respuesta = "La cookie 'user' no existe. Se acaba de crear una.";


    // Si existe
    } else {
        $respuesta = "La cookie 'user' ya existe.";
    }
    
?>