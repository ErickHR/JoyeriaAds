<?php
include_once('../componentes/cabecera.php');
include_once("../modelo/Dao/ProformaDao.php");
include_once("../modelo/Dao/ClienteDao.php");
include_once("../modelo/Dao/ProformaDetalleDao.php");
include_once("../modelo/Dao/ProductoDao.php");
include_once("../vistas/ModuloBoleta/formBoleta.php");

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

        // include_once("../vistas/ModuloBoleta/formListaBoleta.php");
        // include_once('../componentes/cabecera.php');

        // $objProforma = new listaBoleta;
        // $objCabecera = new html;
        // $objCabecera->cabecera();
        // $objProforma->mostrarListaBoleta();
        // $objCabecera->footer('listaBoleta');
    }

    public function funct_vista_boleta()
    {

        include_once('../componentes/cabecera.php');

        $proforma = ProformaDao::proformaBuscar( $_GET['id'] );

        $cliente = ClienteDao::clienteBuscarId( $proforma->getIdCliente() );

        $detalle = ProformaDetalleDao::proformaDetalleBuscarIdproforma( $proforma->getIdTrabajador() );

        foreach( $detalle as $item ) {
            $producto = ProductoDao::productoBuscar( $item->getIdProducto() );
            $item->producto = $producto;
        }

        $proforma->cliente = $cliente;
        $proforma->detalle = $detalle;

        // foreach( $detalle as $item ) {
        //     $detallesJson[] = $item->json();
        // }

        if( isset( $_SESSION['productos'] ) ) {
            $_SESSION['productos'] = null;
        } 
        
        $_SESSION['productos'] = $detalle ;

        html::cabecera();
        Boleta::mostrarBoleta( $proforma );
        html::footer('boleta');
    }
}
