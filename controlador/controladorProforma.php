<?php
class controladorProforma
{
	public function proforma()
	{

       

			// include_once("../modelo/Eproforma.php");
            // $objCliente = new Eproforma;
            // $nombre_function = 'funct_'.$_REQUEST['accion'];

            // if( method_exists($objCliente,$nombre_function ) ){

            //     $regreso = call_user_func( array( $objCliente, $nombre_function) );

            //     return json_encode($regreso, JSON_PRETTY_PRINT) ;

            // } else {
            //     return'no existe';
            // }
        // } else {
        //     // header("Location: http://www.google.com/");
            
        // }
            
    }

    public function funct_proforma_registrar(){

        $total = 0;

        foreach( $_SESSION['productos'] as $item ) {
            $total += $item['total'];
        }

        $_POST['total'] = $total;

    }
    
    public function funct_vista_listaproforma()
	{

            include_once("../vistas/ModuloProforma/formListaProforma.php");
            include_once('../componentes/cabecera.php');
            
            $objProforma = new Proforma;
            $objCabecera = new html;
            $objCabecera -> cabecera();
            $objProforma -> mostrarListaPreguia();
            $objCabecera -> footer('listaProforma');
            
    }

    public function funct_vista_proforma()
	{

            include_once("../vistas/ModuloProforma/formProforma.php");
            include_once('../componentes/cabecera.php');
            $objProforma = new formProforma;
            html::cabecera();
            $objProforma -> formProformaShow();
            html::footer('proforma');
            
    }
    
}
