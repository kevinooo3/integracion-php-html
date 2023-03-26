<?php
    echo("<pre>");
    var_dump($_POST);
    echo("</pre>");

    echo("Sanitizacion");

    // almacenamos todos los inputs
    $name = $_POST["nombre"];
    $user = $_POST["usuario"];
    $correox = $_POST["correo"];
    $age = $_POST["edad"];

    // html_entities: sirve para evitar que inyecten codigo html en el input
    $html_entities_to_name = htmlentities($name);
    //supongamos que le ponemos algun caracter ' a nuestro campo, lo que hara sera anteponer al ' un caracter \
    $addslashes_to_user = addslashes($user);
    
    //pregreplace("/\d/",loquequieresqueentreareeemplazar,variablequealamacenaelvalor) : reeemplaza los numeros por lo que quieras
    $pregreplace_noNumbers_to_name = preg_replace("/\d/","",$user);
    //pregreplace("/\d/",loquequieresqueentreareeemplazar,variablequealamacenaelvalor) : reeemplaza los numeros por lo que quieras
    $pregreplace_noWords_to_name = preg_replace("/\D/","",$user);
    //filtervar : permite filtrar campos pasandole la variable que quieres filtrar y depues la variable global de php que empieza por FILTER_SANITIZE ***** que permite filtrar para cada caso que tengamos
    //por ejemplo para un correo
    $filtervar_to_email =  filter_var($correox,FILTER_SANITIZE_EMAIL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>validacion de name por html_entities :Hola <?= $html_entities_to_name ?> como estas</h1>
    <h2>validacion de user por addslashes: Hola <?= $addslashes_to_user ?> como estas</h2>
    <h2>validacion de user por preg_replace eliminando numeros: Hola <?= $pregreplace_noNumbers_to_name ?> como estas</h2>
    <h2>validacion de user por FILTER_SANITIZE corrigiendo correos medio raros: El correo acorde <?=  $filtervar_to_email ?> como estas</h2>
</body>
</html>
