<?php

class Reclamo {

    private $idReclamo;
    private $idCliente;
    private $idTrabajador;
    private $fechaReclamo;
    private $idFactura;

    public function __construct()
    {
        
    }

    public function getIdReclamo(){
        return $this->idReclamo;
    }
    public function getIdCliente(){
        return $this->idCliente;
    }
    public function getIdTrabajador(){
        return $this->idTrabajador;
    }
    public function getFechaReclamo(){
        return $this->fechaReclamo;
    }
    public function getIdFactura(){
        return $this->idFactura;
    }


    public function setIdReclamo(){
        return $this->idReclamo;
    }
    public function setIdCliente(){
        return $this->idCliente;
    }
    public function setIdTrabajador(){
        return $this->idTrabajador;
    }
    public function setFechaReclamo(){
        return $this->fechaReclamo;
    }
    public function setIdFactura(){
        return $this->idFactura;
    }
}

?>