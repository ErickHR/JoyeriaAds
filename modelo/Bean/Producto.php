<?php


    class Producto {

        private $idProducto;
        private $idCategoria;
        private $codProducto;
        private $nombre;
        private $precio;
        private $stock;
        private $descripcion;

        public function __construct( 
            $idProducto,
            $idCategoria, 
            $codProducto, 
            $nombre, 
            $precio, 
            $stock,
            $descripcion  ) {
            $this->idProducto = $idProducto;
            $this->idCategoria = $idCategoria;
            $this->codProducto = $codProducto;
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->stock = $stock;
            $this->descripcion = $descripcion;
        }

        public function getIdProducto(){
            return $this->idProducto;
        }

        public function getIdCategoria(){
            return $this->idCategoria;
        }

        public function getCodProducto(){
            return $this->codProducto;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getPrecio(){
            return $this->precio;
        }

        public function getStock(){
            return $this->stock;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }

        public function setIdProducto( $idProducto ){
            return $this->idProducto = $idProducto;
        }

        public function setIdCategoria( $idCategoria ){
            return $this->idCategoria = $idCategoria;
        }

        public function getCodidoProducto( $codigoProducto ){
            return $this->codProducto = $codigoProducto;
        }

        public function setNombre( $nombre ){
            return $this->nombre = $nombre;
        }

        public function setPrecio( $precio ){
            return $this->precio = $precio;
        }

        public function setStock( $stock ){
            return $this->stock = $stock;
        }

        public function setDescripcion( $descripcion ){
            return $this->descripcion = $descripcion;
        }

        public function json(){

            return [
                'idProducto' => $this->getIdProducto(),
                'idCategoria' => $this->getIdCategoria(),
                'codProducto' => $this->getCodProducto(),
                'nombre' => $this->getNombre(),
                'precio' => $this->getPrecio(),
                'stock' => $this->getStock(),
                'descripcion' => $this->getDescripcion()
            ];

        }

    }

?>