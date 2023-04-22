<?php

namespace Database\PDO;

class Connection {

    private static $instance;
    private $connection;

    private function __construct() {
        $this->make_connection();
    }

    public static function getInstance() {
        if (!self::$instance instanceof self)
            self::$instance = new self();

        return self::$instance;
    }

    public function get_database_instance() {
        return $this->connection;
    }

    private function make_connection() {
        $server = "localhost";
        $database = "finanzas_personales";
        $username = "root";
        $password = "123456";

        $conexion = new \PDO("mysql:host=$server;dbname=$database", $username, $password);

        $setnames = $conexion->prepare("SET NAMES 'utf8'");
        $setnames->execute();

        $this->connection = $conexion;
    }
    
}


/* class Connection {

    private static $instance;
    private $connection;

    private function __construct() {
        $this->make_connection();
    }

    public static function getInstance() {
        if (!self::$instance instanceof self)
            self::$instance = new self();

        return self::$instance;
    }

    public function get_database_instance() {
        return $this->connection;
    }

    private function make_connection() {
        $server = "localhost";
        $database = "finanzas_personales";
        $username = "root";
        $password = "123456";

        $conexion = new \PDO("mysql:host=$server;dbname=$database", $username, $password);

        $setnames = $conexion->prepare("SET NAMES 'utf8'");
        $setnames->execute();

        $this->connection = $conexion;
    }
    
}
*/
/*
    $server = "localhost";
    $database = "finanzas_personales";
    $username = "root";
    $password = "123456";

    $connection = new PDO("mysql:host=$server;dbname=$database",$username,$password);
  
    $setnames = $connection->prepare("SET NAMES 'utf8'");
    $setnames->execute();

    var_dump($setnames);

*/

