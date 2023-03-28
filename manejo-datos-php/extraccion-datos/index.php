<?php
    //obtener un caracter de una cadena
            // $colegio = "SACO OLIVEROS";
            // $caracterCorchete = $colegio[1];
            // echo("$caracterCorchete");
             // extrae la pos 1 de la cadena
    // caso : uso de substr
            // $cadena = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam id hic reiciendis omnis iste autem ipsa dolores optio aliquam ipsum, assumenda atque ad quia unde at vitae, et quisquam ipsam! ";
            // $extraccion = substr($cadena,0,20);
            // echo $extraccion;
    // implode y explode
        // explode se usa cuando queremos crear un array apartir de un string
                $nombres = "kevin, pepe, carlos";
                $arrayNombres = explode(", ",$nombres);
                echo "<pre>";
                var_dump($arrayNombres);
                echo "</pre>";
         // implode se usa cuando queremos imprimir 
                $extractorArrays = implode(",",$arrayNombres);
                echo "<pre>";
                var_dump($extractorArrays);
                echo "</pre>";
        // trim sirve para eliminar espacio al comienzo y al final, generalmente usado cuando se quiere obtener solo algunos elementos de algun array
                $userInput = "     kevinooo    ";
                $userSecure = trim($userInput);
                echo $userSecure;