<?php

    include_once("../controlador/controladorProducto.php");
    $objControlAcceso = new controladorProducto;
    echo $objControlAcceso -> producto();
?>
