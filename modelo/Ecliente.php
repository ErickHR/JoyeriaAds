<?php
include_once('../conexion/conexion.php');
class Ecliente extends conexion
{
	public function Ecliente()
	{
		$this -> conectar();
	}
	public function funct_obtenerCliente( )
	{
		// $respuesta = $cnn->prepare("select * from usuarios");
        // return "hola";
		// $consulta = "SELECT *
		//              FROM cliente";
		// $resultado = mysql_query($consulta);
		try{
			$conn = $this -> conectar();
			$stmt = $conn->prepare("SELECT *, concat( nombre, ' ', apell_pat, ', ', apell_mat ) nombreCompleto from cliente WHERE dni = :dni");
			$stmt->bindParam(':dni', $_POST['dni']);
			$stmt ->execute();
			$json = $stmt->fetchAll(PDO::FETCH_OBJ);
			if( $stmt->rowCount() >= 1 ) {
				return [ 'resultado' => true, 'data' => $json ];
			}

			return [ ['resultado' => false] ];
		}catch( Exception $e ){

		}
		
        // $aciertos = mysql_num_rows($resultado);
        // return $filaEncontrada;
		// for($i = 0; $i < $aciertos; $i++)
		// 	$filaEncontrada[$i] = mysql_fetch_array($resultado);
		// return($filaEncontrada);
	}
	
	public function funct_agregar_cliente(){
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

}

// $obtjs = new Ecliente;
// try {
// 	$val = [];
// 	foreach( $obtjs->funct_obtenerCliente_module() as $item ) {
// 		// print_r( $item );
// 		$data = (array)$item;
// 		$val[] = json_encode( $data , JSON_FORCE_OBJECT | JSON_UNESCAPED_UNICODE );
// 		// $val[] = $item;
// 	}
// 	$data = json_encode( $val, JSON_PRETTY_PRINT );
// 	echo $data ;
// 	// print_r ( json_encode( $val, JSON_PRETTY_PRINT )  );
// } catch ( Exception $e ) {
// 	print_r( $obtjs->funct_obtenerCliente_module() );
// }

?>
