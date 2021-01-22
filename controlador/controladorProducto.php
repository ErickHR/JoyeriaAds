<?php
class controladorProducto
{
	public function producto()
	{
			include_once("../modelo/Eproducto.php");
            $objCliente = new Eproducto;
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