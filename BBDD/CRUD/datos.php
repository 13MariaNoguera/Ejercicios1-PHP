<?php

    require_once("conexionBD.php");

    $pdo=conexionBD();

    $dato = [];
    $consulta = $pdo->query("SELECT * FROM task");
    $consulta -> setFetchMode(PDO::FETCH_ASSOC);
    $consulta->execute();
      
    while ($registro = $consulta->fetch()) {
        array_push($dato, $registro);
    }

?>