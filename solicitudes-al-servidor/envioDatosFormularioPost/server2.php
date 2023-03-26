<?php
    echo "<pre>"; // esto permite debuguear mejor para tener mejor visibilidad

    var_dump($_POST); //esto mostraba el contenido cuando enviaba mi formulario 
    var_dump("\n");
    
    $nombrex = $_POST["nombre"];
    $edadx = $_POST["edad"];

    echo( "Hola $nombrex tienes $edadx , con el metodo post");
    echo "</pre>";
