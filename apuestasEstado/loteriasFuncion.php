<?php

    function numAleatorios($numGanadores, $nums, $rango) {


        for ($i = 0; $i < $nums; $i++) {
            
            do {
                $numGanador = rand(1, $rango);
            } while (in_array($numGanador, $numGanadores));
            $numGanadores[] = $numGanador;
        }
        // Ordenamos el listado de números ganadores
        sort($numGanadores);
        
        return $numGanadores;
    }


?>