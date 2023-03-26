<?php
    // USORT SIRVE PARA ORDENAR ARRAYS
    // OBSERVACION SOLO FUNCIONA CON VALORES NUMERICOS
        //sintaxis:  usort(arrayaordenar,funcionanonima)
        $numeros=[2,5,4];
        
        usort($numeros,function($valor1,$valor2){
            return $valor1 <=> $valor2;
        });
        var_dump($numeros);
?>