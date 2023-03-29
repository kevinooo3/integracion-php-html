<?php
    class Persona {

        public $nombre ;  // definimos los aributos
        public $edad ;
        public $apodo ;
        
        public function __construct($nombre1,$edad1,$apodo1){
            $this->nombre = $nombre1;
            $this->edad = $edad1;
            $this->apodo = $apodo1;
        }
        public function setEdad($nuevaEdad){
            $this->edad = $nuevaEdad;
        }
        public function getEdad(){
            return $this->edad ;
        }
        public function setNombre($nuevaNombre){
            $this->nombre = $nuevaNombre;
        }
        public function getNombre(){
            return $this->nombre ;
        }
        public function setApodo($nuevaApodo){
            $this->apodo = $nuevaApodo;
        }
        public function getApodo(){
            return $this->apodo ;
        }

        public function imprimirDatosClase(){
            echo nl2br("nombre:{$this->getNombre()} \n   edad:{$this->edad} \n    apodo:{$this->apodo} \n");
        }

    }
        // $kevin = new Persona("kevin Rua",27,"kevinooox");
        // $kevin->imprimirDatosClase();

    class User{
        public $type = "chuchu";
    }
    class Administrator{
        public function greet(){
            return "Hola administrador";
        }
    }
        $user = new User();
        $user = new Administrator();
        echo($user->greet());
    ?>