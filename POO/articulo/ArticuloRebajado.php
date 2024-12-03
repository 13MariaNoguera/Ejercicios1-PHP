
<?php

    require_once 'Articulo.php';

    try {

        if(!class_exists('Articulo')) {
            throw new FatalError('Cuidado. Aún no se ha creado  Articulo');

        } else {

            // CLASE QUE HEREDA DE LA CLASE ARTÍCULO
            final class ArticuloRebajado extends Articulo {
            
                private $rebaja;

                public function __construct($pNombre, $pPrecio, $pRebaja) {
                    parent::__construct($pNombre, $pPrecio);
                    $this->rebaja = $pRebaja;
                }

                private function calculaDescuento() {
                    $descuento = ($this->precio * $this->rebaja) / 100;
                    return $descuento;
                }

                private function precioRebajado() {
                    $precioRebajado = $this->precio - self::calculaDescuento();
                    return $precioRebajado;
                }

                public function __toString() {
                    $texto = parent::__toString();
                    $texto .= '<div class="datosArticulo"><span>La rebaja es: </span>'.$this->rebaja.'%</div>';
                    $texto .= '<div class="datosArticulo"><span>El descuento es: </span>'.self::calculaDescuento().'</div>';
                    $texto .= '<div class="datosArticulo"><span>El precio del articulo rebajado es </span>'.self::precioRebajado().'€</div>';
                    return $texto;
                }
            }
        }

    } catch (FatalError $e){
        echo '<p><span class>Error: </span>'.$e->getMessage().'</p>';
    }



        
        
    

?>