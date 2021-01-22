<?php
class controladorCliente
{
	public function cliente()
	{
			include_once("../modelo/Ecliente.php");
            $objCliente = new Ecliente;
            $nombre_function = 'funct_'.$_REQUEST['accion'];

            if( method_exists($objCliente,$nombre_function ) ){

                $regreso = call_user_func( array( $objCliente, $nombre_function) );

                return json_encode($regreso, JSON_PRETTY_PRINT) ;

            } else {
                return'no existe';
            }
	}
}
?>