<?php
include_once("../vistas/ModuloReclamo/formListaReclamo.php");
include_once("../vistas/ModuloReclamo/formReclamo.php");
include_once('../componentes/cabecera.php');
include_once("../modelo/Dao/BoletaDao.php");
include_once("../modelo/Dao/BoletaDetalleDao.php");
include_once("../modelo/Dao/ProductoDao.php");
include_once("../modelo/Dao/ReclamoDao.php");

class controladorReclamo
{
    public function reclamo()
    {

        // include_once("../modelo/Eproforma.php");
        // $objCliente = new Eproforma;
        // $nombre_function = 'funct_' . $_REQUEST['accion'];

        // if (method_exists($objCliente, $nombre_function)) {

        //     $regreso = call_user_func(array($objCliente, $nombre_function));

        //     return json_encode($regreso, JSON_PRETTY_PRINT);
        // } else {
        //     return 'no existe';
        // }
        // } else {
        //     // header("Location: http://www.google.com/");

        // }

    }

    public function funct_reclamo_agregar_session(){

    }

    public function funct_vista_listareclamo()
    {

        html::cabecera();
        listaReclamo::mostrarListaReclamo();
        html::footer('listaReclamo');
    }

    public function funct_vista_reclamo()
    {
        if( isset( $_SESSION['productos'] ) ) {
            $_SESSION['productos'] = null;
        }
        $detalle = BoletaDetalleDao::boletaDetalleBuscarIdproforma( $_GET['id'] );
        $boletaSession = BoletaDao::BoletaBuscarId( $_GET['id'] );

        $_SESSION['boleta'] = $boletaSession[0];
        
        foreach( $detalle as $item ) {

            $producto = ProductoDao::productoBuscar( $item->getIdProducto() );

            $item->producto = $producto;
            
        }

        html::cabecera();
        reclamo::mostrarReclamo( $detalle );
        html::footer('reclamo');
    }

    public function funct_reclamo_guardar() {

        if( !isset( $_SESSION['productos'] ) ) {
            return [ 'resultado' => false, 'data' => null, 'msg' => "Agregue productos" ];
        }

        foreach( $_SESSION['productos'] as $item ) {
            $item['idBoleta'] = $_SESSION['boleta']->id;
            $item['id_cliente'] = $_SESSION['boleta']->id_cliente;
            $item['id_trabajador'] = 1;
            $reclamo = ReclamoDao::reclamoRegistrar( $item );

        }

        if( $reclamo ) {
            $_SESSION['productos'] = null;
            unset(  $_SESSION['boleta'] );
            return [ 'resultado' => true , "msg" => "Proforma Guardada"];
        }
        return [ ['resultado' => false] ];

    }

    public function funct_reclamo_listar() {
        $stmt = ReclamoDao::reclamoListar( );
        // $stmt = [];
        return Array(
            "draw"=> 1,
            "recordsTotal"=> count($stmt),
            "recordsFiltered"=> count( $stmt ),
            "length" => count( $stmt ),
            "data"=> $stmt
        );
    }

}
