<?php
   //operadores para uso de contadores 
   //CASO DE PRECEDENCIA
   //php muchas veces lee primero la asignacion y despues lee los operadores 
    $numero1 = 2;
    $numero2 = $numero1++;
    var_dump($numero1);// resulta 3
    var_dump($numero2);// resulta 2
    //operador de suma acortado
    $num_1 = 2;
    $num_1 +=2;
    var_dump($num_1);


    //operadores para uso de array
    $nombre= "kevin";
    $nombre.="Cristhian";
    var_dump($nombre);