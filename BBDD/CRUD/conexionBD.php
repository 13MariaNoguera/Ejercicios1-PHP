<?php

    // CONEXIÓN A LA BASE DE DATOS [BBDD]
    function conexionBD() {

        $host = "localhost";
        $nombreBD = "crud";
        $usuario = "root";
        $password = "";

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8", $usuario, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(Exception $e) {
            echo 'Falló la conexión: '.$e->getMessage();
        }
    }

?>