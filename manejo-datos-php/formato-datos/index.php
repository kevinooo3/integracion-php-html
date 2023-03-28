<?php
    // MONOBYTE
        // conversion a mayusculas
            // $nombreDB = "mysql";
            // echo strtoupper($nombreDB); 

        // conversion a minusculas
            // $nombreSerie = "DRAGON BALL";
            // echo strtolower($nombreSerie); 
        // conversion de las primera letra
            //primera letra a mayuscula
                // $dj = "DEADMOUSE" ;     
                // echo lcfirst($dj);
            //primera letra a minuscula
                // $dj2 = "hardwell" ;     
                // echo ucfirst($dj2);
    
                
    // MULTIBYTE
        // NACE PARA CORREGIR ERRORES SOBRE LA Ñ y LAS TILDES
        // conversion a mayusculas multibyte
            // $nombreDB = "ño ño camión";
            // echo mb_strtoupper($nombreDB); 
        // conversion a minusculas
            // $nombreSerie = "ÑAÑA COMO ESTÁ";
            // echo mb_strtolower($nombreSerie); 


    // EVITAR INYECCION DE CODIGO CON strip_tags
        // $titulo = "<h1> Titulo de página web </h1>";   
        // $tituloSinEtiqueta = strip_tags($titulo);
        // echo strip_tags($titulo);
        // var_dump($tituloSinEtiqueta);

    // AUTO RELLENO DE STRING str-pads
        // autorelleno por defecto a la derecha
            // $colegio = "Saco";
            // $gaa = str_pad($colegio,8,"$");
            // echo $gaa;
        // autorelleno por defecto alo medio
            // $colegio = "AWA";
            // $gaa = str_pad($colegio,9,"*",STR_PAD_BOTH);
            // echo $gaa;
        // autorelleno por defecto a la izquierda
            // $colegio = "AWA";
            // $gaa = str_pad($colegio,8,"%",STR_PAD_LEFT);
            // echo $gaa;
    