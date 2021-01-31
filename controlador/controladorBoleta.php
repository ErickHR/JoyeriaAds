<?php
include_once('../componentes/cabecera.php');
include_once("../modelo/Dao/ProformaDao.php");
include_once("../modelo/Dao/ProformaDetalleDao.php");
include_once("../modelo/Dao/BoletaDao.php");
include_once("../modelo/Dao/BoletaDetalleDao.php");
include_once("../modelo/Dao/ClienteDao.php");
include_once("../modelo/Dao/ProductoDao.php");
include_once("../vistas/ModuloBoleta/formBoleta.php");
include_once("../vistas/ModuloBoleta/formListaBoleta.php");

class controladorBoleta
{
    public function boleta()
    {

        // include_once("../modelo/Eboleta.php");
        // $objCliente = new EBoleta;
        // $nombre_function = 'funct_' . $_REQUEST['accion'];

        // if (method_exists($objCliente, $nombre_function)) {

        //     $regreso = call_user_func(array($objCliente, $nombre_function));

        //     return json_encode($regreso, JSON_PRETTY_PRINT);
        // } else {
        //     return 'no existe';
        }
        // } else {
        //     // header("Location: http://www.google.com/");

        // }

    // }

    public function funct_vista_listaboleta()
    {

        html::cabecera();
        listaBoleta::mostrarListaBoleta();
        html::footer('listaBoleta');
    }

    public function funct_vista_boleta()
    {


        $proforma = ProformaDao::proformaBuscar( $_GET['id'] );

        $cliente = ClienteDao::clienteBuscarId( $proforma->getIdCliente() );

        $detalle = ProformaDetalleDao::proformaDetalleBuscarIdproforma( $proforma->getIdProforma() );
        
        foreach( $detalle as $item ) {

            $producto = ProductoDao::productoBuscar( $item->getIdProducto() );

            $item->producto = $producto;
            
        }

        $proforma->cliente = $cliente;
        $proforma->detalle = $detalle;

        foreach( $detalle as $item ) {
            $detallesJson[] = $item->json();
        }

        if( isset( $_SESSION['productos'] ) ) {
            $_SESSION['productos'] = null;
        } 
        
        $_SESSION['productos'] = $detallesJson;

        html::cabecera();
        Boleta::mostrarBoleta( $proforma );
        html::footer('boleta');
    }

    public function funct_boleta_registrar(){
        $total = 0;

        // foreach( $_SESSION['productos'] as $item ) {
        //     $total += $item->getCantidad() * $item->getPrecio();
        // }

        $_POST['total'] = $total;

        // $idBoleta = BoletaDao::boletaRegistrar( $_POST );


        foreach( $_SESSION['productos'] as $item ) {
            // $item['idboleta'] = $idBoleta;
            $item['idboleta'] = 67;
            $detalle = BoletaDetalleDao::boletaDetalleRegistrar( $item );

        }

        if( $detalle ) {
            $_SESSION['productos'] = null;
            return [ 'resultado' => true , "msg" => "Proforma Guardada"];
        }
        return [ ['resultado' => false] ];

    }

    public function funct_boleta_listar(){

        date_default_timezone_set('America/Lima');
        // $hora = strtotime('-3 hour', strtotime(date('Y-m-d H:i:s')));
        $fechaActual = date('Y-m-d H:i:s');

        $stmt = BoletaDao::BoletaListar( $_POST );

        foreach( $stmt as $item ) {

            // $item->garantia1 = $hora ;
            $item->garantia = date( "Y-m-d H:i:s", strtotime( "$item->fecha +3 month" ) ) >= $fechaActual ? 'Con Garantía' : 'Sin Garantía';

            // if( ( date('Y-m-d H:i:s') - date( 'Y-m-d H:i:s', strtotime( $item->fecha ) ) ) >= 36000 ) {
            //     $item->garantia = "Sin Garantia";
            // } else {
            //     $item->garantia = "Con Garantia";
            // }

        }

        return Array(
            "draw"=> 1,
            "recordsTotal"=> count($stmt),
            "recordsFiltered"=> count( $stmt ),
            "length" => count( $stmt ),
            "data"=> $stmt
        );
    }

}
