<?php

include_once( __DIR__.'/../../Bd/Consultas.php');
include_once( __DIR__.'/../Bean/DetalleProforma.php');

class ProformaDetalleDao {

    public static function proformaDetalleRegistrar( $obj ){
        
        $data = [
           'idproforma' => $obj['idProforma'], 
           'idproducto' => $obj['idProducto'], 
           'cantidad' => $obj['cantidad'] , 
           'precio' => $obj['precio'] 
        ];
        
        $stmt = Consultas::insert( 'detalle_proforma', $data );

        return $stmt;

    }

    public static function proformaDetalleBuscarIdproforma( $id ){
        
        $stmt = Consultas::select( '*', 'detalle_proforma WHERE idproforma = :id', [':id' => $id] );

        $lista = [];
        foreach( $stmt as $item ) {
            $detalleProforma = new DetalleProforma(
                $item->iddetalleproforma,
                $item->idproforma ,
                $item->idproducto ,
                $item->cantidad,
                $item->precio
            );
            $lista[] = $detalleProforma;

        }

        return $lista;

    }

}

?>