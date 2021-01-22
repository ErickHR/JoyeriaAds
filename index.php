<?php 
session_start() or die('Error iniciando gestor de variables de sesión');
// session_start([
//     'cookie_lifetime' => 86400,
//     'read_and_close'  => true,
// ]);
// session.use_cookies
print_r($_SESSION);
$_SESSION['nombre'] = "juan";
print_r($_SESSION);

include_once('vistas/ModuloProforma/formProforma.php');

$obj = new formProforma;
$obj -> formProformaShow();
print_r($_SESSION);

?>