<?php
class conexion
{
    // function __construct($name) {
    //     $this->name = $name;
    // }
    
	protected function conectar()
	{
        $dsn = 'mysql:dbname=ads_joyerias;host=localhost;charset=utf8';
        $usuario = 'root';
        $contraseña = '';

        try {
            $conn = new PDO($dsn, $usuario, $contraseña, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
		// mysql_select_db('sistema');
    }
    
    

	protected function desConectar()
	{
		// mysql_close();
	}
}
?>
