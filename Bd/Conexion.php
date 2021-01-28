<?php

// namespace  Conexion;

class Conexion
{
    private static $instance;
    private $conn;
    // function __construct($name) {
    //     $this->name = $name;
    // }
    
	public function connect()
	{
        $dsn = 'mysql:dbname=joyeria_july;host=localhost;charset=utf8';
        $usuario = 'root';
        $contraseña = '';

        try {
            $this->conn = new PDO($dsn, $usuario, $contraseña, array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
            return $this->conn;
        } catch ( PDOException $e ) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    }

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            
            // echo "<br/>";
            // echo "entro";
            // echo "<br/>";

            self::$instance = new self();
        }

        return self::$instance;
    }

}
