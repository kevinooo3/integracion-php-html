<?php
    //COMO USAR VARIABLES EXTERNAS A UNA FUNCION SIN SER PASADAS COMO PARAMETRO, ES DECIR USARLAS DIRECTAMENTE;
    $nombre="kevin";
    function saludar(){
        global $nombre; // debemos redeclararla por asi decirlo, pero es mas como decirle a php oe esta variable es global , es decir ya la tengo declarada afuera y la estoy llamando
        return "hola $nombre";
    }
    echo saludar();