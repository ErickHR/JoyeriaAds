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
			$stmt = $conn->prepare("SELECT * FROM producto LIMIT 0, 5");
			$stmt ->execute();
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
            $_SESSION['productos'] = [];
            $_SESSION['productos'] = [$_POST];
            return $_SESSION['productos'];
		}
		$data = $_SESSION['productos'];
		$data[] = $_POST;
		$_SESSION['productos'] = $data;
        // foreach( $_POST as $key => $item ) {
        //     $_SESSION['productos'][][$key] = $item;
        // }
        return $_SESSION['productos'];
	}

}

?>
