<?php
  
    // como es la estructura de una cookie
   if( !isset($_COOKIE["example_cookie"])){
    setcookie(
        name: "example_cookie", // nombre de la cookie
        value: "un michi salvaje", // un valor de la cookie
        expires_or_options:0, // 0 indica que la cookie morira cuando acabemos la sesion, si deseamos establecer que la cookie muera despues de un tiempo determinado necesitamos time()+60 *60*24*30 el primer 60 es segundos despues minutos despues horas despues dias
        path: "/",// indica que va estar dispnible la cookie en todo el directorio donde se creo
        domain: "localhost", // indicas en que dominio o subdominio va a estar disponible
        secure: false, // true la cookie solo estara disponible en un sitio seguro es decir con https
        httponly: true // true indicamos que la cookie va ser accesible desde el front end es decir va ser leido por javascript
    );
    echo "¡Cookie creada!";
   }
    echo "<pre>";
    var_dump($_COOKIE);
    echo "</pre>";
?>