<?php
include_once('../conexion/conexion.php');
class Eproforma extends conexion
{
	public function Ecliente()
	{
		$this -> conectar();
	}
	
	public function funct_registrar_proforma(){
        // return $_SESSION['productos'];
        date_default_timezone_set('America/Lima');
        $hora = strtotime( '-1 hour', strtotime( date('Y-m-d H:i:s') )  );
        date('Y-m-d H:i:s', $hora);
		try{
            $total = 0;

            foreach( $_SESSION['productos'] as $item ) {
                $total += $item['total'];
            }

			$conn = $this -> conectar();
            $stmt = $conn->prepare("INSERT INTO proforma( idcliente, idtrabajador, fecha, total ) VALUES ( ?, ?, ?, ? ) ");
            

			$res = $stmt ->execute( 
                [ 
                    $_POST['cliente'][0], 
                    1, 
                    date('Y-m-d H:i:s', $hora), 
                    $total
                ] 
                );

            $idProforma = $conn->lastInsertId();
            
            $stmt = $conn->prepare("INSERT INTO detalle_proforma( idproforma , idproducto , cantidad, precio ) VALUES ( ?, ?, ?, ? ) ");

            foreach( $_SESSION['productos'] as $item ) {
                $res = $stmt ->execute( 
                    [ 
                        $idProforma, 
                        $item['idproducto'], 
                        $item['cantidad'], 
                        $item['precio']
                    ] 
                    );
            }

			if( $res ) {
                $_SESSION['productos'] = null;
				return [ 'resultado' => true ];
			}
			return [ ['resultado' => false] ];
		}catch( Exception $e ){

		}
    }
    
    public function funct_listar_proforma(){
		$conn = $this -> conectar();
        $stmt = $conn->prepare("SELECT pro.fecha, pro.idproforma, 
        CONCAT( cli.apell_pat, ' ', cli.apell_mat, ', ', cli.nombre ) cliente, pro.total, 
        CONCAT( '[', GROUP_CONCAT( JSON_OBJECT( 'nombre', prod.nombre, 'cantidad', detal.cantidad, 'descripcion', prod.descripcion, 'precio', (detal.precio/detal.cantidad), 'total', detal.precio ) SEPARATOR ', ' ) , ']' ) as detal_proforma 
         FROM proforma pro  LEFT JOIN cliente cli ON cli.idcliente = pro.idcliente  LEFT JOIN trabajador tra ON tra.idtrabajador = pro.idtrabajador LEFT JOIN detalle_proforma detal ON detal.idproforma = pro.idproforma LEFT JOIN producto prod ON prod.idproducto = detal.idproducto  WHERE pro.idtrabajador = ? ");
        $res = $stmt ->execute( [1] );
        $json = $stmt->fetchAll(PDO::FETCH_OBJ);

        return Array(
            "draw"=>$_POST['draw'],
            "recordsTotal"=> $stmt->rowCount(),
            "recordsFiltered"=> $stmt->rowCount(),
            "length" => $stmt->rowCount(),
            "data"=> $json
        );

    }
    
}

?>
