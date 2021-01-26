<?php
class controladorBoleta
{
    public function boleta()
    {

        include_once("../modelo/Eproforma.php");
        $objCliente = new Eproforma;
        $nombre_function = 'funct_' . $_REQUEST['accion'];

        if (method_exists($objCliente, $nombre_function)) {

            $regreso = call_user_func(array($objCliente, $nombre_function));

            return json_encode($regreso, JSON_PRETTY_PRINT);
        } else {
            return 'no existe';
        }
        // } else {
        //     // header("Location: http://www.google.com/");

        // }

    }

    public function funct_vista_listaboleta()
    {

        include_once("../vistas/ModuloBoleta/formListaBoleta.php");
        include_once('../componentes/cabecera.php');

        $objProforma = new listaBoleta;
        $objCabecera = new html;
        $objCabecera->cabecera();
        $objProforma->mostrarListaBoleta();
        $objCabecera->footer('listaBoleta');
    }

    public function funct_vista_boleta()
    {

        include_once("../vistas/ModuloBoleta/formBoleta.php");
        include_once("../modelo/Eproforma.php");
        include_once('../componentes/cabecera.php');

        $proforma = new Eproforma;
        $data = $proforma->funct_buscar_proforma(  $_GET['id'] );

        $objCabecera = new html;
        $objCabecera->cabecera();
        Boleta::mostrarBoleta( $data );
        $objCabecera->footer('boleta');
    }
}
