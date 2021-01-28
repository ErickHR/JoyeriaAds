<?php

class Cliente {

    private $idCliente;
    private $nombre;
    private $apellPat;
    private $apellMat;
    private $dni;
    private $celular;

    public function __construct( $idCliente, $nombre, $apellMat, $apellPat, $dni, $celular )
    {
        $this->idCliente = $idCliente;
        $this->nombre = $nombre;
        $this->apellMat = $apellMat;
        $this->apellPat = $apellPat;
        $this->celular = $celular;
    }

    public function getIdCliente(){
        return $this->idCliente;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellPat(){
        return $this->apellPat;
    }
    public function getApellMat(){
        return $this->apellMat;
    }
    public function getDni(){
        return $this->dni;
    }
    public function getCelular(){
        return $this->celular;
    }


    public function setIdCliente(){
        return $this->idcliente;
    }
    public function setNombre(){
        return $this->nombre;
    }
    public function setApellPat(){
        return $this->apellPat;
    }
    public function setApellMat(){
        return $this->apellMat;
    }
    public function setDni(){
        return $this->dni;
    }
    public function setCelular(){
        return $this->celular;
    }

    public function json(){
        return [
            'idCliente' => $this->getIdCliente(),
            'nombre' => $this->getNombre(),
            'apellPat' => $this->getApellPat(),
            'apellMat' => $this->getApellMat(),
            'dni' => $this->getDni(),
            'celular' => $this->getCelular()
        ];

    }

}

?>