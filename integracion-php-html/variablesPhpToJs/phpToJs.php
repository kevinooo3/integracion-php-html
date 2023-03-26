<?php 
    // este es un array que tiene como objetivo ser pasado a formato json
     $usuarios = array(
        array(
            'nombre' => 'kevin',
            'edad' => 27
        ),
        array(
            'nombre' => 'cristiano',
            'edad' => 39
        ),
        array(
            'nombre' => 'pepe',
            'edad' => 41
        )
     );
     // variable que explica como una var php se puede usar en un doc js externo en este caso esto se usara en index.js
     $nombre = "kevinoxx";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasando variables php a js</title>
</head>
<body>
        <!-- Casi siempre se necesita pasar variables php a javascript -->
<script>
    // aqui usaremos las variables php
    //json_encode :sirve para pasar un array a un formato string pero uno especial para que pueda ser interpretado por js
    let usuarios = JSON.parse('<?= json_encode($usuarios)?>');
    console.log(usuarios);
    let nombreImportado = ('<?= $nombre?>') ; 
</script>
        <!-- tambien podemos usar las mismas variables de php en un js externo  -->
<script src="./index.js">

</script>
</body>
</html>