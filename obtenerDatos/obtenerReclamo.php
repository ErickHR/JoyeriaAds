<?php

    include_once("../controlador/controladorReclamo.php");
    $objControlAcceso = new controladorReclamo;

    if( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
        
        $nombre_function = 'funct_'.$_POST['accion'];
        
        if( method_exists($objControlAcceso,$nombre_function ) ){

            $regreso = call_user_func( array( $objControlAcceso, $nombre_function) );
            $data = json_encode( $regreso, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE );
            print_r( $data );
            // echo $regreso;

        } else {
            return'no existe esa funcion';
        }


     } else {
        $nombre_function = 'funct_vista_'.$_GET['accion'];
        if( method_exists($objControlAcceso,$nombre_function ) ){

            $regreso = call_user_func( array( $objControlAcceso, $nombre_function) );

        } else {
            echo 'no existe la vista';
        }
     }

