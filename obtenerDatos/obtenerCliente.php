<?php

    include_once("../controlador/controladorCliente.php");
    $objControlAcceso = new controladorCliente;
    echo $objControlAcceso -> cliente();
?>
