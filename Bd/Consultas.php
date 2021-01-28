<?php

include_once('Conexion.php');

// use Conexion\Conexion;

class Consultas{

    public static function select( $selects, $instruc, $arrayWhere ) {
        try{
			$conn = Conexion::getInstance()->connect();
            $stmt = $conn->prepare( "SELECT $selects FROM $instruc");
            
            foreach( $arrayWhere as $key => $item ) {
                $stmt->bindParam( $key, $item );
            }

			$stmt ->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}catch( Exception $e ){
            echo $e->getMessage();
		}
    }

    public static function insert( $select, $instruc, $arrayWhere ) {
        try{
			$conn = Conexion::getInstance()->connect();
            $stmt = $conn->prepare( "SELECT $select FROM $instruc ");
            
            foreach( $arrayWhere as $key => $item ) {
                $stmt->bindParam( $key, $item );
            }

			$stmt ->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}catch( Exception $e ){

		}
    }

    public static function insertgetIdLast( $table, $insert ) {
        try{
            $conn = Conexion::getInstance()->connect();

            $names = implode( ', ', array_keys( $insert ) );
            $values = ':'.implode(', :', array_keys( $insert ) );

            $stmt = $conn->prepare( "INSERT INTO $table ($names) VALUES ( $values )");
            
            foreach( $insert as $key => $item ) {
                $stmt->bindParam( ":$key", $item );
            }

			return $conn->lastInsertId();
		}catch( Exception $e ){

		}
    }

    public static function update( $table, $update, $where ) {
        try{
            $conn = Conexion::getInstance()->connect();

            $names = null;

            foreach( $update as $key => $item ){
                $names .= "$key = :field_$key,";
            }

            $names = rtrim( $names, ',' );

            $values = null;
            $i = 0;

            foreach( $where as $key => $item ) {
                if( $i == 0 ) {
                    $values = " $key = :where_$key ";
                } else {
                    $values = " $key = :where_$key AND ";
                }
            }

            $stmt = $conn->prepare( "UPDATE $table SET $names WHERE $values " );
            
            foreach( $update as $key => $item ) {
                $stmt->bindValue( ":field_$key", $item );
            }

            foreach( $where as $key => $item ) {
                $stmt->bindValue( ":where_$key", $item );
            }
            $stmt ->execute();
            return $stmt->rowCount();
		}catch( Exception $e ){
            echo $e->getMessage();		
        }
    }

}

?>