<?php

class Proforma {

    private $idProforma;
    private $idCliente;
    private $idTrabajador;
    private $fecha;
    private $total;
    private $adelanto;

    public function __construct(
        $idProforma,
        $idCliente,
        $idTrabajador,
        $fecha,
        $total,
        $adelanto
    ){
        $this->idProforma = $idProforma;
        $this->idCliente = $idCliente;
        $this->idTrabajador = $idTrabajador;
        $this->fecha = $fecha;
        $this->total = $total;
        $this->adelanto = $adelanto;
    }

    public function getIdProforma(){
        return $this->idProforma;
    }
    public function getIdCliente(){
        return $this->idCliente;
    }
    public function getIdTrabajador(){
        return $this->idTrabajador;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getTotal(){
        return $this->total;
    }
    public function getAdelanto(){
        return $this->adelanto;
    }


    public function setIdProforma(){
        return $this->idProforma;
    }
    public function setIdCliente(){
        return $this->idCliente;
    }
    public function setIdTrabajador(){
        return $this->idTrabajador;
    }
    public function setFecha(){
        return $this->fecha;
    }
    public function setEstado(){
        return $this->estado;
    }
    public function setTotal(){
        return $this->total;
    }
    public function setAdelanto(){
        return $this->adelanto;
    }

    public function json(){
        
        return [
            'idProforma' => $this->getIdProforma(),
            'idCliente' => $this->getIdCliente(),
            'idTrabajador' => $this->getIdTrabajador(),
            'fecha' => $this->getFecha(),
            'total' => $this->getTotal(),
            'adelanto' => $this->getAdelanto(),
        ];

    }
}

?>