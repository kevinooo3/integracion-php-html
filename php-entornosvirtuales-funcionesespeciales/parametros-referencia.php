<?php
// simularemos un pedido de plato en restaurant 
    $pedidoPlato = "arroz a la cubana"; 
// como parametro  pasaremos el valor por ref que tiene la sintaxis &$variable
    function cambiarPlato(&$plato){

        $plato = "ceviche";
    };

    cambiarPlato($pedidoPlato);
    echo($pedidoPlato);