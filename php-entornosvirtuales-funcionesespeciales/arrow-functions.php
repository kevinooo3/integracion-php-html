<?php
    // sintaxis simple
        // $gente = fn($parametro) => $parametro +2;
        // echo $gente(2);
    //arrow functions pasados como callbacks
        $edades =[12,18,22,24,25];
        $mayores_edad = array_filter($edades,fn($valorArray)=> $valorArray >=18);
        print_r($mayores_edad);
    
