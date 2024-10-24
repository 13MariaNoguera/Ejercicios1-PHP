<?php

    session_start();

    $articulos = array(
        array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60, "foto" => "img/nike.png"),
        array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15, "foto" => "img/sudadera.png"),
        array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50, "foto" => "img/palaPadel.png"),
        array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio" => 20, "foto" => "img/pelota.png"),
        array("id" => 5, "nombre" => "Pantalón Nike", "precio" => 54, "foto" => "img/pantalonNike.png"),
        array("id" => 6, "nombre" => "Sudadera Nike", "precio" => 50, "foto" => "img/sudaderaNike.png"),
        array("id" => 7, "nombre" => "Pelota Eurocopa 2024", "precio" => 43, "foto" => "img/pelotaEurocopa.png"),
        array("id" => 8, "nombre" => "Reloj Deportivo Garmin", "precio" => 152, "foto" => "img/relojDeportivo.png"),
    );

    if ($_SERVER["REQUEST_METHOD"] === 'GET' && isset($_GET["articulo"]) ) {

        if (!isset($_SESSION["carroCompra"])) {
            
            $_SESSION["carroCompra"] = []; // Creamos la sesión
        }

       foreach($articulos as $articulo) {

            if ($articulo["id"] == $_GET["articulo"]) {
                array_push($_SESSION["carroCompra"], $articulo);
            }
            header("Location:carro.view.php");
       }
    }

?>
