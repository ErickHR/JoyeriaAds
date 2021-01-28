<?php
include_once('../conexion/conexion.php');
class Eproducto extends conexion
{
	public function Ecliente()
	{
		$this -> conectar();
	}
	public function funct_buscar_producto_todos( )
	{
		try{
			$conn = $this -> conectar();
			$stmt = $conn->prepare("SELECT * FROM producto WHERE cod_producto like ? OR nombre LIKE ? OR descripcion LIKE ?  LIMIT 0, 5");
			$stmt ->execute( [ '%'.$_POST['nombre'].'%', '%'.$_POST['nombre'].'%', '%'.$_POST['nombre'].'%' ] );
			$json = $stmt->fetchAll(PDO::FETCH_OBJ);
			if( $stmt->rowCount() >= 1 ) {
				return [ 'resultado' => true, 'data' => $json ];
			}

			return [ ['resultado' => false] ];
		}catch( Exception $e ){

		}
		
	}
	
	public function funct_agregar_producto(){
		try{
			$conn = $this -> conectar();
			$stmt = $conn->prepare("INSERT INTO cliente( dni, nombre, apell_pat, apell_mat ) VALUES ( ?, ?, ?, ? ) ");
			$res = $stmt ->execute( [ $_POST['dni'], $_POST['nombre'], $_POST['paterno'], $_POST['materno'] ] );
			if( $res ) {
				return [ 'resultado' => true ];
			}
			return [ ['resultado' => false] ];
		}catch( Exception $e ){

		}
    }
    
    public function funct_guardar_session_producto(){
		if( !isset( $_SESSION['productos'] ) ) {
			$_POST['total'] = $_POST['cantidad']  * $_POST['precio'];
			$_SESSION['productos'] = [];
			unset( $_POST['accion'] );
            $_SESSION['productos'] = [$_POST];
		} else {
			$_POST['total'] = $_POST['cantidad']  * $_POST['precio'];
			$data = $_SESSION['productos'];
			unset( $_POST['accion'] );
			$data[] = $_POST;
			$_SESSION['productos'] = $data;
		}
        // foreach( $_POST as $key => $item ) {
        //     $_SESSION['productos'][][$key] = $item;
		// }
		if( count( $_SESSION['productos'] ) != 0 ) {
			return [ 'resultado' => true, 'data' => $_SESSION['productos'] ];
		}
        return [ ['resultado' => false] ];
	}

	public function funct_borrar_session_producto(){
		$data = [];
		foreach( $_SESSION['productos'] as $item ){
			if( $_POST['idproducto'] != $item['idproducto'] ) {
				$data[] = $item;
			}
		}

		$_SESSION['productos'] = $data;
		return [ 'resultado' => true, 'data' => $_SESSION['productos'] ];
		// $_SESSION['productos'] = null;
		// $data = $_SESSION['productos'];
		// if( isset( $_SESSION['productos'][ $_POST['index'] ] ) ) {
		// 	for(  )
		// 	unset( $_SESSION['productos'][ $_POST['index'] ] );
		// 	return [ 'resultado' => true, 'data' => $_SESSION['productos'] ];
		// }
        // return [ ['resultado' => false] ];
		// foreach( $_SESSION['productos'] as $item ) {
		// 	if(  )
		// }

	}

}

?>
