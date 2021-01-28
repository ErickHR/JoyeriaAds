<?php

include_once( __DIR__.'/../../Bd/Proforma.php');
include_once( __DIR__.'/../Bean/Producto.php');

class ProformaDao {

    public static function proformaRegistrar( $obj ){
        date_default_timezone_set('America/Lima');
        $hora = strtotime( '-1 hour', strtotime( date('Y-m-d H:i:s') )  );
        
        $data = [
           'idcliente' => $obj['idCliente'], 
           'idtrabajador' => $obj['idTrabajador'], 
           'fecha' => $hora, 
           'total' => $obj['total'] 
        ];
        
        $stmt = Consultas::insertgetIdLast( 'proforma', $data );

    }

}

?>