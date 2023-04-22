<?php
  namespace Database\MySQLi;


 class Connection {
    private static $instance;
    private $connection;

    private function __construct(){
        $this->make_connection();
    }
    public static function getInstance(){
        if(!self::$instance instanceof self){
            self::$instance = new self();
        }// preguntamos si instance no pertenece a esta misma clase entonces creala
        return self::$instance;
    }
    public function get_database_instance(){
        return  $this->connection;
    }
    private function make_connection(){
        $server = "localhost";
        $database = "finanzas_personales";
        $username = "root";
        $password = "123456";

        $mysqli = new \mysqli($server, $username, $password, $database);
        if ($mysqli->connect_errno)
            die("Falló la conexión: {$mysqli->connect_error}");
        $setnames = $mysqli->prepare("SET NAMES 'utf8'");
        $setnames->execute();
        $this->connection = $mysqli;
    }
 }
// todo esto es lo antiguo
    /*
        // Esta es la forma procedural
        //$mysqli = mysqli_connect($server, $username, $password, $database);

        // Esta es al forma orientada a objetos
        $mysqli = new mysqli($server, $username, $password, $database);

        // Comprobar conexión de manera procedural
         if (!$mysqli)
           // die("Falló la conexión: " . mysqli_connect_error()); 

        // Comprobar conexión de manera orientada a objetos
        if ($mysqli->connect_errno)
            die("Falló la conexión: {$mysqli->connect_error}");

        // Esto nos ayuda a poder usar cualquier caracter en nuestras consultas
        $setnames = $mysqli->prepare("SET NAMES 'utf8'");
        $setnames->execute();

        var_dump($setnames);
    */

