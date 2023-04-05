<?php
    // almacenadas en una variables
        $suma = function($a){
            return $a + 10;
        };
        echo $suma(2);
    // closure pasar una funcion o variable como parametro de otra funcion
        // $multiplicacion = function() use( $suma) {
        //     var_dump($suma);
        // };
        // $multiplicacion();

     // Uso de una funcion anonima como parametro
        $numerosIniciales = [1,2,3];
        $numerosFinales = array_map(function($valor){
            return $valor*2;
        },$numerosIniciales);
        var_dump($numerosFinales);