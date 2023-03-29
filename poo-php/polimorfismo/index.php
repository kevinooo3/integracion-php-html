<?php

// buen ejemplo para explicar casi todo poo en php
 abstract class Base{
    protected $name;
    private function getClassName(){
        return get_called_class();
    }
    public function login(){
        return "Mi nombre es {$this->name}, desde la clase {$this->getClassName()}";
    }
    public function asignarNombre($valor){
            $this->name = $valor;
    }
 }
 class User extends Base{
    public function __construct($name){
        $this->name=$name;

    }
 }

 class Admin extends Base{
    public function __construct($name){
        $this->name=$name;

    }
 }

 class Guest extends Base{
 }

 $guest = new Guest();
 $guest->asignarNombre("ICE MC GOGOG");
 echo $guest->login();

 $user = new User("kevinooo");
 echo $user->login();

 $admin = new Admin("jys");
 echo $admin->login();