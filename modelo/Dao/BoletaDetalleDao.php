<?php

include_once( __DIR__.'/../../Bd/Consultas.php');
include_once( __DIR__.'/../Bean/DetalleBoleta.php');

class BoletaDetalleDao {

    public static function boletaDetalleRegistrar( $obj ){
        $data = [
           'id_boleta' => $obj['idboleta'], 
           'id_producto' => $obj['idProducto'], 
           'cantidad' => $obj['cantidad'] , 
           'precio' => $obj['precio'] 
        ];
        $stmt = Consultas::insertDetalleBoletaProformagetIdLast( 'detalle_boleta', $data );

        return $stmt;

    }

    public static function boletaDetalleBuscarIdproforma( $id ){
        
        $stmt = Consultas::select( '*', 'detalle_boleta WHERE id_boleta = :id', [':id' => $id ] );
        
        $lista = [];
        foreach( $stmt as $item ) {
            $detalle = new DetalleBoleta(
                $item->id,
                $item->id_boleta ,
                $item->id_producto ,
                $item->cantidad,
                $item->precio
            );
            $lista[] = $detalle;

        }
        return $lista;

    }

}

?>