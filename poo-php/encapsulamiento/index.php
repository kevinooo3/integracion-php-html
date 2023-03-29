<?php

    // public : se puede acceder a la variable o metodo desde cualquier parte
    // protected : solo tienen acceso a la variable o al metodo el padre y el hijo
    // private : solo tiene acceso a la variable el padre


    class Clase1{
        public $publico= "publico";
        protected $protected= "protected";
        private $private= "private";

        public function imprimirValores(){
            echo $this->publico. "<br>" ;
            echo $this->protected. "<br>";
            echo $this->private. "<br>";
        }
    }

    class Clase2 extends Clase1{
        public function imprimirValores(){
            echo $this->publico."<br>";
            echo $this->protected."<br>";
            echo $this->private."<br>";
        }
    }

   // $clasesita = new Clase1;// si usamos esto obviamente la misma clase tiene todo acceso a sus propios atributos
    $clasesita = new Clase2;// si usamos esto muestra error cuando quiere imprimir private porque private solo puede ser accedido por su propia clase  
    $clasesita->imprimirValores();


        
       