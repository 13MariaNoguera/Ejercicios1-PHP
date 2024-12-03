
<?php

    class Articulo {

        protected $nombre;
        protected $precio;

        // CONSTRUCTOR CLASE ARTÍCULO
        public function __construct($pNombre , $pPrecio) {
            $this->nombre = $pNombre;
            $this->precio = $pPrecio;
        }

        // MÉTODOS

        // 1. TO STRING

        public function __toString() {
            $texto = '<div class="datosArticulo"><span>Nombre: </span>'.$this->nombre.'</div>';
            $texto .= '<div class="datosArticulo"><span>Precio: </span>'.$this->precio.'€</div>';
            return $texto;
        }

        // 2. GETTER PRECIO

        public function getPrecio() : float {
            return $this->precio;
        }


        // 3. SETTER PRECIO
        public function setPrecio(float $pPrecio) {

            try {

                if(!is_numeric($pPrecio)) {
                    throw new Exception('El precio introducido no es un valor númerico.');
                } elseif ($pPrecio < 0) {
                    throw new Exception('El precio introducido no puede ser un valor negativo.');
                } else {
                    $this->precio = $pPrecio;
                    return $this->precio;
                }

            } catch (Exception $e) {
                echo '<p>Excepción: '.$e->getMessage().'</p>';
            }
        }
    }

?>