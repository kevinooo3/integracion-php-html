<?php   
    //Existen dos formas de crear constantes
    //Creacion de constantes con define
        // define("gato","Mr. Michi");
        // echo gato;
    //Creacion de constantes con const
        // const gatito = "miau";
        // echo gatito;
    // define permite crear constantes dentro un bloque o funcion
        function retornarConstante(){
            define("perro","woof");
            return perro;
        };
        echo retornarConstante();
    // const no deja  constantes dentro un bloque o funcion
        const gallo = "kokoroko";
        function retornarValor(){
        // const gallo = "kokoroko"; // const no puede crearse dentro de la funcion , debe crearse afuera e igualmente la funcion tiene acceso.
            return gallo;
        };
        echo retornarValor(); 
        echo PHP_VERSION;