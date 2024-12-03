<?php

    require_once("conexionBD.php");

    $pdo=conexionBD();

    $idActualizar = $_POST['id'];
    $titulo = $_POST["title"];
    $descripcion = $_POST["description"];

    if ($_SERVER["REQUEST_METHOD"] == 'POST' ) {

        try {

            $updateTitle = $pdo->prepare("UPDATE task SET title = :title WHERE id = :id");
            $updateDescription = $pdo->prepare("UPDATE task SET description = :description WHERE id = :id");

            $updateTitle->execute(["title" => $titulo, "id" => $idActualizar]);
            $updateDescription->execute(["description" => $descripcion, "id" => $idActualizar]);

            header("Location: crud.php");
            exit();

        } catch (PDOExeption $e) {
            echo 'Algo no ha ido bien: '.$e->getMessage();
        }
    } 
?>