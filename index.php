<?php 


function is_session_started()
{
    // if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    // }
    return FALSE;
}

if ( is_session_started() === FALSE ) session_start();
// session_start([
//     'cookie_lifetime' => 86400,
//     'read_and_close'  => true,
// ]);
// session.use_cookies
include_once('vistas/index/index.php');
include_once('./componentes/cabecera.php');

$obj = new index;
html::cabecera(".");
$obj -> mostrarindex();
html::footer("", ".");


?>