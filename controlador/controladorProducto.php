<?php

include_once("../modelo/Dao/ProductoDao.php");

class controladorProducto
{
	public function producto()
	{
            // $objCliente = new Eproducto;
            // $nombre_function = 'funct_'.$_REQUEST['accion'];

            // if( method_exists($objCliente,$nombre_function ) ){

            //     $regreso = call_user_func( array( $objCliente, $nombre_function) );

            //     return json_encode($regreso, JSON_PRETTY_PRINT) ;

            // } else {
            //     return'no existe';
            // }
    }
    
    public function funct_producto_buscar(){
        // return json_encode( ProductoDao::productoBuscar( $_POST['id'] ), JSON_PRETTY_PRINT );
    }

    public static function funct_buscar_producto_lista(){
        $data = [];
        foreach( ProductoDao::productoListar( $_POST['nombre'] ) as $item ) {
            $data[] = $item->json();
        }
        return [ 'resultado' => true, 'data' => $data ];
        
    }

    public function funct_guardar_session_producto(){
        if( !isset( $_SESSION['productos'] ) ) {

			$_POST['total'] = $_POST['cantidad']  * $_POST['precio'];
			$_SESSION['productos'] = [];
			unset( $_POST['accion'] );
            $_SESSION['productos'] = [$_POST];

		} else {

            foreach( $_SESSION['productos'] as $item ) {
                if( $item['idProducto'] == $_POST['idProducto'] ) {
                    return ['resultado' => false, 'msg' => "Producto ya esta en la lista"];
                }
            }

			$_POST['total'] = $_POST['cantidad']  * $_POST['precio'];
			$data = $_SESSION['productos'];
			unset( $_POST['accion'] );
			$data[] = $_POST;
            $_SESSION['productos'] = $data;
            
        }
        
		if( count( $_SESSION['productos'] ) != 0 ) {
			return [ 'resultado' => true, 'data' => $_SESSION['productos'], "msg" => 'Agregado a la lista' ];
		}
        return ['resultado' => false];
    }

    public function funct_borrar_session_producto(){
        $data = [];
		foreach( $_SESSION['productos'] as $item ){
			if( $_POST['idProducto'] != $item['idProducto'] ) {
				$data[] = $item;
			}
		}
		$_SESSION['productos'] = $data;
		return [ 'resultado' => true, 'data' => $_SESSION['productos'], 'msg' => "Eliminado" ];
    }

    public function funct_producto_agregar_session_reclamo(){
        $producto = ProductoDao::productoBuscar( $_POST['id'] );

        $dataReclamo = [
            'producto' => $producto->json(),
            'categoria' => $_POST['categoria'],
            'detalle' => $_POST['detalle']
        ];

        if( !isset( $_SESSION['productos'] ) ) {

			$_SESSION['productos'] = [];
			unset( $_POST['accion'] );
            $_SESSION['productos'] = [ $dataReclamo ];

		} else {
            foreach( $_SESSION['productos'] as $item ) {
                if( $item['producto']['idProducto'] == $producto->getIdProducto() ) {
                    return ['resultado' => false, 'msg' => "Producto ya esta en la lista"];
                }
            }

			$data = $_SESSION['productos'];
			$data[] = $dataReclamo;
            $_SESSION['productos'] = $data;
            
        }
        
		if( count( $_SESSION['productos'] ) != 0 ) {
			return [ 'resultado' => true, 'data' => $_SESSION['productos'], "msg" => 'Agregado a la lista' ];
		}
        return ['resultado' => false];

    }

    public function funct_producto_eliminar_session_reclamo(){
        $data = [];
		foreach( $_SESSION['productos'] as $item ){
			if( $_POST['idProducto'] != $item['producto']['idProducto'] ) {
				$data[] = $item;
			}
        }
        // $data = $_SESSION['productos'];
        // unset( $data[ $_POST['index'] ] );
		$_SESSION['productos'] = $data;
		return [ 'resultado' => true, 'data' => $_SESSION['productos'], 'msg' => "Eliminado" ];
    }

}

?>