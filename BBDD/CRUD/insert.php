<?php
    require_once "conexionBD.php";
    require_once "funciones.php";

    $pdo=conexionBD();

    if ($_SERVER["REQUEST_METHOD"] === 'POST') {

        $title = $_POST["title"];
        $description = $_POST["description"] ?? "";
       
        $consulta = "INSERT INTO task(title, description)" . " VALUES(:title, :description)";
        $insercion = $pdo->prepare($consulta);
        
        $insercion->bindParam(":title", $title, PDO::PARAM_STR);
        $insercion->bindParam(":description", $description, PDO::PARAM_STR);
        $insercion->execute();

        header("Location: crud.php");
        exit();

    } else {
        header("Location: index.php");
        exit();
    }

    $pdo = null;
?>