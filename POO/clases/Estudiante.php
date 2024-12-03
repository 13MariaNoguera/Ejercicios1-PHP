<?php

    require_once 'Persona.php';

    class Estudiante extends Persona {

        protected $numExpediente; 

        // Constructor de Estudiante
        public function __construct($d, $n, $e, $num) {
            parent::__construct($d, $n, $e);
            $this->numExpediente = $num;
        }

        // Getters
        public function getNumExpediente() : int {
            return $this->numExpediente;
        }

        // Setters 
        public function setNumExpediente(int $numExpediente) {
            $this->numExpediente = $numExpediente;
        }

        // Método Mostrar
        public function Mostrar() {
            $texto = '<div class="datos"><span class="datosTitulo">DNI:</span> ' . $this->dni . '</div>';
            $texto .= '<div class="datos"><span class="datosTitulo">Nombre:</span> ' . $this->nombre . '</div>';
            $texto .= '<div class="datos"><span class="datosTitulo">Email:</span> ' . $this->email . '</div>';
            $texto .= '<div class="datos"><span class="datosTitulo">Número Expediente:</span> ' . $this->numExpediente . '</div>';
            return $texto;
        }
    }

?>