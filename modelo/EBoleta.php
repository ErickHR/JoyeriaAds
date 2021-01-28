<?php
include_once('../conexion/conexion.php');
class EBoleta extends conexion
{
	public function Ecliente()
	{
		$this -> conectar();
	}
	
	public function funct_registrar_boleta(){
        date_default_timezone_set('America/Lima');
        $hora = strtotime( '-1 hour', strtotime( date('Y-m-d H:i:s') )  );
        date('Y-m-d H:i:s', $hora);
		try{
            $total = 0;

            foreach( $_SESSION['productos'] as $item ) {
                $total += $item->total;
            }

			$conn = $this -> conectar();
            $stmt = $conn->prepare("INSERT INTO boleta( id_cliente, id_trabajador, fecha, total ) VALUES ( ?, ?, ?, ? ) ");
            

			$res = $stmt ->execute( 
                [ 
                    $_POST['cliente'][0], 
                    1, 
                    date('Y-m-d H:i:s', $hora), 
                    $total
                ] 
                );

            $idBoleta = $conn->lastInsertId();
            $stmt = $conn->prepare("INSERT INTO detalle_boleta( idboleta , idproducto , cantidad, precio ) VALUES ( ?, ?, ?, ? ) ");
            foreach( $_SESSION['productos'] as $item ) {
                $res = $stmt ->execute( 
                    [ 
                        1, 
                        $item->idproducto, 
                        $item->cantidad, 
                        $item->precio
                    ] 
                    );
            }

			if( $res ) {
                $_SESSION['productos'] = null;
				return [ 'resultado' => true , "msg" => "Boleta Guardada"];
			}
			return [ ['resultado' => false] ];
		}catch( Exception $e ){
            return [ ['resultado' => false, "msg" =>  $e->getMessage()] ];
		}
    }
    
    public function funct_listar_boleta(){
        $conn = $this -> conectar();
        $where = [];
        $where[] = 1;
        $dni = '';
        if( $_POST['dni'] ) {
            $dni = ' AND cli.dni = ? ';
            $where[] = $_POST['dni'];
        }
        $where[] = $_POST['desde'].' 00:00:00';
        $where[] = $_POST['hasta'].' 23:59:59';

        $stmt = $conn->prepare("
        SELECT pro.fecha, pro.idproforma, 
        CONCAT( cli.apell_pat, ' ', cli.apell_mat, ', ', cli.nombre ) cliente, pro.total, 
        COALESCE( 
            ( 
                SELECT CONCAT( '[', 
        GROUP_CONCAT( JSON_OBJECT( 'nombre', prod.nombre, 'cantidad', detal.cantidad, 'descripcion', prod.descripcion, 'precio', (detal.precio/detal.cantidad), 'total', detal.precio ) SEPARATOR ', ' ) , ']' )
                FROM detalle_proforma detal
         		LEFT JOIN producto prod ON ( prod.idproducto = detal.idproducto) WHERE detal.idproforma = pro.idproforma AND detal.iddetalleproforma IS NOT null  ), '' ) as detal_proforma
         FROM proforma pro  
         LEFT JOIN cliente cli ON cli.idcliente = pro.idcliente  
         LEFT JOIN trabajador tra ON tra.idtrabajador = pro.idtrabajador 
         WHERE status = 1 AND pro.idtrabajador = ? ".$dni." AND fecha >= ? AND fecha <= ? ORDER BY fecha DESC");
        $res = $stmt ->execute( $where );
        // $res = $stmt ->execute( [ 1, '2021-01-01 00:00:00', '2021-01-27 23:59:59' ] );
        $json = $stmt->fetchAll(PDO::FETCH_OBJ);

        return Array(
            "draw"=>$_POST['draw'],
            "recordsTotal"=> $stmt->rowCount(),
            "recordsFiltered"=> $stmt->rowCount(),
            "length" => $stmt->rowCount(),
            "data"=> $json
        );

    }

    public function funct_buscar_boleta( $id ){
		$conn = $this -> conectar();
        $stmt = $conn->prepare("
        SELECT pro.fecha, pro.idproforma, 
        CONCAT( cli.apell_pat, ' ', cli.apell_mat, ', ', cli.nombre ) cliente, 
        cli.dni dnicliente, 
        pro.total, 
        COALESCE( 
            ( 
                SELECT CONCAT( '[', 
        GROUP_CONCAT( JSON_OBJECT( 'nombre', prod.nombre, 'cantidad', detal.cantidad, 'descripcion', prod.descripcion, 'precio', (detal.precio/detal.cantidad), 'total', detal.precio ) SEPARATOR ', ' ) , ']' )
                FROM detalle_proforma detal
         		LEFT JOIN producto prod ON ( prod.idproducto = detal.idproducto) WHERE detal.idproforma = pro.idproforma AND detal.iddetalleproforma IS NOT null  ), '' ) as detal_proforma
         FROM proforma pro  
         LEFT JOIN cliente cli ON cli.idcliente = pro.idcliente  
         LEFT JOIN trabajador tra ON tra.idtrabajador = pro.idtrabajador 
         WHERE pro.idtrabajador = ? AND pro.idproforma = ? ");
        $res = $stmt ->execute( [ 1, $id ] );
        $json = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        return $json;

    }

    public function funct_eliminar_boleta(){
        // return $_POST['id'];
        $conn = $this -> conectar();
        $stmt = $conn->prepare("
            UPDATE proforma SET status = 0 WHERE idproforma = ?
         ");
        $res = $stmt ->execute( [ $_POST['id'] ] );
        
        if( $stmt->rowCount() > 0 ) {
            return ['resultado' => true, 'msg' => "Proforma Eliminada" ];
        }
        return ['resultado' => false ];
    }
    
}

?>
