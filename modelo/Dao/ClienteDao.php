<?php 

include_once( __DIR__.'/../../Bd/Consultas.php');
include_once( __DIR__.'/../Bean/Cliente.php');


// use Conexion\Conexion;

class ClienteDao {

    public static function clienteBuscar( $dni ) {
        try{
			$stmt = Consultas::select( '*', 'cliente WHERE dni = :dni', [ ':dni' => $dni ] );
			
			if( count( $stmt ) == 0 )
				return null;
			
			$producto = new Cliente( 
				$stmt[0]->idcliente,
				$stmt[0]->nombre,
				$stmt[0]->apell_pat,
				$stmt[0]->apell_mat,
				$stmt[0]->dni,
				$stmt[0]->celular,
			 );

			return $producto;
		}catch( Exception $e ){

		}

	}

}
