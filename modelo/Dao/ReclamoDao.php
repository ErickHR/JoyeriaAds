<?php

include_once(__DIR__ . '/../../Bd/Consultas.php');
include_once( __DIR__.'/../Bean/Proforma.php');

class ReclamoDao
{

    public static function reclamoRegistrar($obj)
    {
        date_default_timezone_set('America/Lima');
        // $hora = strtotime('-1 hour', strtotime(date('Y-m-d H:i:s')));
        $hora = date('Y-m-d H:i:s');

        $data = [
            'idcliente' => $obj['id_cliente'],
            'idtrabajador' => $obj['id_trabajador'],
            'fecha_reclamo' => $hora,
            'idfactura' => $obj['idBoleta'],
            'detalle' => $obj['detalle'],
            'categoria' => $obj['categoria'],
            'producto' => $obj['producto']['idProducto'],
        ];

        $stmt = Consultas::insert('reclamo', $data);

        return $stmt;
    }

    public static function reclamoListar( ){

        try{

            $select = "
                cli.nombre,
                cli.apell_pat, 
                cli.apell_mat,
                cli.dni,
                prod.nombre,
                rec.categoria,
                rec.detalle,
                rec.estado_reclamo";
            
                $where = "reclamo rec
                LEFT JOIN cliente cli ON cli.idcliente = rec.idcliente
                LEFT JOIN producto prod ON prod.idproducto = rec.producto
                WHERE rec.estado = 1";

            $stmt = Consultas::select( $select, $where, [] );

            return $stmt;

        } catch( Exception $e ){
            echo $e->getMessage();
        }

        
        // try {
        //     $whereArray = [];
        //     $dni = '';
        //     // $whereArray[':idtrab'] = 1;
        //     if ($obj['dni']) {
        //         $dni = ' AND cli.dni = :dni ';
        //         $whereArray[':dni'] = $obj['dni'];
        //     }
        //     // $whereArray[':desde'] = $obj['desde'].' 00:00:00';
        //     $whereArray[':desde'] = '2020-01-01 00:00:00';
        //     // $whereArray[':desde'] = '2021-01-01 00:00:00';
        //     $whereArray[':hasta'] = $obj['hasta'] . ' 23:59:59';

        //     $select = "
        //     pro.fecha, pro.id, 
        //     CONCAT( cli.apell_pat, ' ', cli.apell_mat, ', ', cli.nombre ) cliente, pro.total, 
        //     COALESCE( 
        //         ( 
        //             SELECT CONCAT( '[', 
        //     GROUP_CONCAT( JSON_OBJECT( 'nombre', prod.nombre, 'cantidad', detal.cantidad, 'descripcion', prod.descripcion, 'precio', detal.precio, 'total', (detal.precio*detal.cantidad) ) SEPARATOR ', ' ) , ']' )
        //             FROM detalle_boleta detal
        //             LEFT JOIN producto prod ON ( prod.idproducto = detal.id_producto) WHERE detal.id_boleta = pro.id AND detal.id IS NOT null  ), '' ) as detal_boleta ";
        //     $where = "boleta pro  
        //     LEFT JOIN cliente cli ON cli.idcliente = pro.id_cliente  
        //     LEFT JOIN trabajador tra ON tra.idtrabajador = pro.id_trabajador 
        //     WHERE status = 1 " . $dni . " AND fecha >= :desde AND fecha <= :hasta ORDER BY fecha DESC LIMIT " . $obj['start'] . " , " . $obj['length'];
        //     // WHERE status = 1 AND pro.idtrabajador = :idtrab " . $dni . " AND fecha >= :desde AND fecha <= :hasta ORDER BY fecha DESC LIMIT " . $obj['start'] . " , " . $obj['length'];

        //     $stmt = Consultas::select($select, $where, $whereArray);


        //     return $stmt;
        // } catch (Exception $e) {
        //     echo $e->getMessage();
        // }

    }

}
