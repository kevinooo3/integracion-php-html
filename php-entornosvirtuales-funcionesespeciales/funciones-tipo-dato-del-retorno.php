<?php
    
    // : string le decimos a la funcion que retornaremos netamente string
        // $nombre = "kevin";
        // function saludar($name) : string{
        //     return "holaaaaaaa";
        // };
        // echo saludar("kevin");
// en caso quieras que tu funcion no retorne nada debemos decirle : void
        $global = "universo";
        function cambiarValor(&$global) : void{
            $global= "holaaaaaaa";
        };
        cambiarValor($global);
        echo $global;