<?php

    include_once("../controlador/controladorProforma.php");
    $objControlAcceso = new controladorProforma;

    if( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
        
        $nombre_function = 'funct_'.$_POST['accion'];
        
        echo $objControlAcceso -> proforma();


     } else {
        $nombre_function = 'funct_vista_'.$_GET['accion'];
        if( method_exists($objControlAcceso,$nombre_function ) ){

            $regreso = call_user_func( array( $objControlAcceso, $nombre_function) );

        } else {
            return'no existe la vista';
        }
     }

