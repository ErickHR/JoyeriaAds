<?php

class DetalleBoleta {

    private $idDetalleBoleta;
    private $idBoleta;
    private $idProducto;
    private $cantidad;
    private $precio;

    public function __construct(
        $idDetalleBoleta,
        $idBoleta,
        $idProducto,
        $cantidad,
        $precio )
    {
        $this->idDetalleBoleta = $idDetalleBoleta;
        $this->idBoleta = $idBoleta;
        $this->idProducto = $idProducto;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
    }

    public function getIdDetalleBoleta(){
        return $this->idDetalleBoleta;
    }
    public function getIdBoleta(){
        return $this->idBoleta;
    }
    public function getIdProducto(){
        return $this->idProducto;
    }
    public function getCantidad(){
        return $this->cantidad;
    }
    public function getPrecio(){
        return $this->precio;
    }


    public function setIdDetalleBoleta(){
        return $this->idDetalleBoleta;
    }
    public function setIdBoleta(){
        return $this->idBoleta;
    }
    public function setIdProducto(){
        return $this->idProducto;
    }
    public function setCantidad(){
        return $this->cantidad;
    }
    public function setPrecio(){
        return $this->precio;
    }

    public function json(){
        return [
            'idDetalleBoleta' => $this->getIdDetalleBoleta(),
            'idBoleta' => $this->getIdBoleta(),
            'idProducto' => $this->getIdProducto(),
            'cantidad' => $this->getCantidad(),
            'precio' => $this->getPrecio(),
        ];
    }

}

?>