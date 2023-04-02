<?php
  session_start(); // cuando vamos a usar alguna var session en php necesitamos llamar ala funcion session_start solo una vez dentro del archivo
 // aqui vamos  simular una base de datos
    $users = [
        array(
            "username" => "Retaxito",
            "email" => "retaxito@noesmiemail.com"
        ),
        array(
            "username" => "Mr.Michi",
            "email" => "mrmichi@noesmiemail.com"
        ),
        array(
            "username" => "",
            "email" => "invitado@noesmiemail.com"
        )
    ];

    $user = $_GET["user"] ?? "";
 // debemos poner en el url : http://localhost/php-cookies-sesiones/sesiones/login.php?user=1
 // para definir un usuario
    $_SESSION["id"]=$user;
    $_SESSION["username"]=$users[$user]["username"];
    $_SESSION["email"]=$users[$user]["email"];