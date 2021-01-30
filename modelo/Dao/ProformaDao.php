<?php

include_once(__DIR__ . '/../../Bd/Consultas.php');
include_once( __DIR__.'/../Bean/Proforma.php');

class ProformaDao
{

    public static function proformaRegistrar($obj)
    {
        date_default_timezone_set('America/Lima');
        $hora = strtotime('-1 hour', strtotime(date('Y-m-d H:i:s')));

        $data = [
            'idtrabajador' => 1,
            'idcliente' => $obj['cliente'][0],
            'fecha' => $hora,
            'total' => $obj['total']
        ];
        $stmt = Consultas::insertgetIdLast('proforma', $data);

        return $stmt;
    }

    public static function proformaListar($obj)
    {

        try {
            $whereArray = [];
            $dni = '';
            $whereArray[':idtrab'] = 1;
            if ($obj['dni']) {
                $dni = ' AND cli.dni = :dni ';
                $whereArray[':dni'] = $obj['dni'];
            }
            // $whereArray[':desde'] = $obj['desde'].' 00:00:00';
            $whereArray[':desde'] = '2021-01-01 00:00:00';
            $whereArray[':hasta'] = $obj['hasta'] . ' 23:59:59';

            $select = "
            pro.fecha, pro.idproforma, 
            CONCAT( cli.apell_pat, ' ', cli.apell_mat, ', ', cli.nombre ) cliente, pro.total, 
            COALESCE( 
                ( 
                    SELECT CONCAT( '[', 
            GROUP_CONCAT( JSON_OBJECT( 'nombre', prod.nombre, 'cantidad', detal.cantidad, 'descripcion', prod.descripcion, 'precio', detal.precio, 'total', (detal.precio*detal.cantidad) ) SEPARATOR ', ' ) , ']' )
                    FROM detalle_proforma detal
                    LEFT JOIN producto prod ON ( prod.idproducto = detal.idproducto) WHERE detal.idproforma = pro.idproforma AND detal.iddetalleproforma IS NOT null  ), '' ) as detal_proforma ";
            $where = "proforma pro  
            LEFT JOIN cliente cli ON cli.idcliente = pro.idcliente  
            LEFT JOIN trabajador tra ON tra.idtrabajador = pro.idtrabajador 
            WHERE status = 1 AND pro.idtrabajador = :idtrab " . $dni . " AND fecha >= :desde AND fecha <= :hasta ORDER BY fecha DESC LIMIT " . $obj['start'] . " , " . $obj['length'];

            $stmt = Consultas::select($select, $where, $whereArray);

            // $lista = [];

            // foreach( $lista as $stmt[0] ){

            //     $data = new Proforma(
            //         $stmt[0] -> idproforma,
            //         $stmt[0] -> idproforma,
            //         $stmt[0] -> idproforma,
            //         $stmt[0] -> idproforma,
            //         $stmt[0] -> idproforma,
            //         $stmt[0] -> idproforma,
            //         $stmt[0] -> idproforma,
            //     );

            // }

            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function proformaEliminar($data)
    {

        $stmt = Consultas::update('proforma', ['status' => 0], ['idproforma' => $data]);
        return $stmt;
    }

    public static function proformaBuscar($id)
    {
        // $select = "
        //     pro.fecha, pro.idproforma,
        //     cli.nombre,
        //     cli.apell_mat,
        //     cli.apell_pat,
        //     pro.total, 
        //     COALESCE( 
        //         ( 
        //             SELECT CONCAT( '[', 
        //     GROUP_CONCAT( JSON_OBJECT( 'nombre', prod.nombre, 'cantidad', detal.cantidad, 'descripcion', prod.descripcion, 'precio', detal.precio, 'total', (detal.precio*detal.cantidad) ) SEPARATOR ', ' ) , ']' )
        //             FROM detalle_proforma detal
        //             LEFT JOIN producto prod ON ( prod.idproducto = detal.idproducto) WHERE detal.idproforma = pro.idproforma AND detal.iddetalleproforma IS NOT null  ), '' ) as detal_proforma ";
        // $where = "proforma pro  
        //     LEFT JOIN cliente cli ON cli.idcliente = pro.idcliente  
        //     LEFT JOIN trabajador tra ON tra.idtrabajador = pro.idtrabajador 
        //     WHERE status = 1 AND pro.idproforma = :id ";

        $stmt = Consultas::select('*', 'proforma where status = 1 AND idproforma = :id', [":id" => $id]);


        $proforma = new Proforma(
            $stmt[0]->idproforma,
            $stmt[0]->idcliente,
            $stmt[0]->idtrabajador,
            $stmt[0]->fecha,
            $stmt[0]->total,
            $stmt[0]->adelanto,
        );


        return $proforma;
    }
}
