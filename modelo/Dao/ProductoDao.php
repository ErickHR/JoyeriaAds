<?php 

include_once( __DIR__.'/../../Bd/Consultas.php');
include_once( __DIR__.'/../Bean/Producto.php');


// use Conexion\Conexion;

class ProductoDao {

    public static function productoBuscar( $id ) {
        try{
			$stmt = Consultas::select( '*', 'producto WHERE idproducto = :id AND status = 1 ', [ ':id' => $id ] );

			if( count( $stmt ) == 0 ) {
				return null;
			}

			$producto = new Producto( 
				$stmt[0]->idproducto,
				$stmt[0]->cod_producto,
				$stmt[0]->idcategoria,
				$stmt[0]->nombre,
				$stmt[0]->precio,
				$stmt[0]->stock,
				$stmt[0]->descripcion,
			 );

			return $producto;
		}catch( Exception $e ){

		}

	}

	public static function productoListar( $data ) {
        try{

			$where = [
				":cod" => "%$data%",
				":nombre" => "%$data%",
				":desc" => "%$data%"
			];
			
			$stmt = Consultas::select( '*', 'producto WHERE cod_producto like :cod OR nombre LIKE :nombre OR descripcion LIKE :desc  LIMIT 0, 5', $where );

			$lista = [];

			foreach( $stmt as $item ) {
				$producto = new Producto( 
					$item->idproducto,
					$item->cod_producto,
					$item->idcategoria,
					$item->nombre,
					$item->precio,
					$item->stock,
					$item->descripcion,
				 );
				 $lista[] = $producto;
			}

			

			return $lista;
		}catch( Exception $e ){

		}

	}

	public static function guardarSessionProducto(){
		
	}

	
}
