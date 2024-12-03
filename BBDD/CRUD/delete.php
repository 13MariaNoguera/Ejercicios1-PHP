<?php

    require_once("conexionBD.php");

    $pdo=conexionBD();

    $idEliminar = $_REQUEST["id"];

    if ($_SERVER["REQUEST_METHOD"] == 'GET' && isset($idEliminar)) {

        try {

            $eliminar = $pdo->prepare("DELETE FROM task WHERE id = $idEliminar");
            $eliminar->execute();
            header("Location: crud.php");
            exit();

        } catch (PDOExeption $e) {
            echo 'Algo no ha ido bien: '.$e->getMessage();
        }
    } 
?>