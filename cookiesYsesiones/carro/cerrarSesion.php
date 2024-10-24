<?php

    session_start();

    if (isset($_SESSION["carroCompra"])) {
        unset($_SESSION["carroCompra"]);
    }

    session_destroy();
    header("Location: carro.view.php");
    exit;

?>