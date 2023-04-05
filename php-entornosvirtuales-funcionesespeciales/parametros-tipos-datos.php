<?php
// forzamos a que nos pasen un tipo de dato como parametro
    function saludar (string $nombre, int $edad, int $dni){
        return "hola me llamo $nombre , tengo $edad años y mi dni es $dni";
    };
    echo saludar("kevin",12,"74641542");