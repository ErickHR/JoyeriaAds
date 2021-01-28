<?php

class Proforma {

    private $idProforma;
    private $idCliente;
    private $idTrabajador;
    private $fecha;
    private $estado;
    private $total;
    private $adelanto;

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