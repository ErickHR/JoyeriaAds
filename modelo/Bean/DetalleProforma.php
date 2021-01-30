<?php

class DetalleProforma {

    private $idDetalleProforma;
    private $idProforma;
    private $idProducto;
    private $cantidad;
    private $precio;

    public function __construct(
        $idDetalleProforma,
        $idProforma,
        $idProducto,
        $cantidad,
        $precio )
    {
        $this->$idDetalleProforma = $idDetalleProforma;
        $this->$idProforma = $idProforma;
        $this->$idProducto = $idProducto;
        $this->$cantidad = $cantidad;
        $this->$precio = $precio;
    }

    public function getIdDetalleProforma(){
        return $this->idDetalleProforma;
    }
    public function getIdProforma(){
        return $this->idProforma;
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


    public function setIdDetalleProforma(){
        return $this->idDetalleProforma;
    }
    public function setIdProforma(){
        return $this->idProforma;
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
            'idDetalleProforma' => $this->getIdDetalleProforma(),
            'idProforma' => $this->getIdProforma(),
            'idProducto' => $this->getIdProducto(),
            'cantidad' => $this->getCantidad(),
            'precio' => $this->getPrecio(),
        ];
    }

}

?>