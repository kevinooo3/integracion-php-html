<?php
// EN PHP UN CLOSURE ES LO MISMO QUE UN CALLBACK
    function saludar(closure $lang,$nombre)
    {
        return $lang($nombre) ;
    };
    
    $es = function ($name){
        echo "hola , $name como estas";
    };
    $en = function ($name){
        echo "hi , $name how are you";
    };

    saludar($en,"netzerk");