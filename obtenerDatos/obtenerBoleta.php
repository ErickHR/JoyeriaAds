<?php

    include_once("../controlador/controladorBoleta.php");
    $objControlAcceso = new controladorBoleta;

    if( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
        
        $nombre_function = 'funct_'.$_POST['accion'];

        if( method_exists($objControlAcceso,$nombre_function ) ){

            $regreso = call_user_func( array( $objControlAcceso, $nombre_function) );
            $data = json_encode( $regreso, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE );
            print_r( $data );

        } else {
            return'no existe esa funcion';
        }


     } else {
        $nombre_function = 'funct_vista_'.$_GET['accion'];
        if( method_exists($objControlAcceso,$nombre_function ) ){
            
            if( $_GET['accion'] == 'Proforma' ) 
                $_SESSION['productos'] = null;

            $regreso = call_user_func( array( $objControlAcceso, $nombre_function) );

        } else {
            return'no existe la vista';
        }
     }
