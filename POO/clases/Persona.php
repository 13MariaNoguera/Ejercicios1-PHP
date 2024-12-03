<?php 

    class Persona {

        protected $dni;
        protected $nombre;
        protected $email;

        // Constructor de Persona
        public function __construct($d, $n, $e) {
            $this->dni = $d;
            $this->nombre = $n;
            $this->email = $e;
        }

        // Getters
        public function getDni() : string {
            return $this->dni;
        }

        public function getNombre() : string {
            return $this->nombre;
        }

        public function getEmail() : string {
            return $this->email;
        }

        // Setters 
        public function setDni(string $dni) {
            $this->dni = $dni;
        }

        public function setNombre(string $nombre) {
            $this->nombre = $nombre;
        }

        public function setEmail(string $email) {
            $this->email = $email;
        }

        // Método Mostrar
        public function Mostrar() {
            $texto = '<div class="datos"><span class="datosTitulo">DNI:</span> ' . $this->dni . '</div>';
            $texto .= '<div class="datos"><span class="datosTitulo">Nombre:</span> ' . $this->nombre . '</div>';
            $texto .= '<div class="datos"><span class="datosTitulo">Email:</span> ' . $this->email . '</div>';
            return $texto;
        }
    }

?>
