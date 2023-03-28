<?php
    // TEMA EXPRESIONES REGULARES
            // preg_match retorna 1 su cumple y sino cumple 0 
            // sintaxis preg_match('/^[valorepermitidos]{longitudpermitida}$/',$password)
            //  / contenedor
            //  ^ inicio
            //  $ final
            //  - rango
            // [] patron
            // {}condiciones

                    $password = '1234567';
                    var_dump((bool) preg_match('/^[0-9]{6,9}$/',$password));