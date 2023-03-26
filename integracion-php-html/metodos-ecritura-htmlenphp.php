<?php
   $nombre = "kevin";     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML desde php</title>
</head>
<body>
// 1er metodo de escritura de html desde php
    <h1>Esto es html desde php gaaaa</h1>
    <?php 
        echo("<p>Esto es un parrafo desde php</p>
                <br>
                <br>
            <p>Esto es una segunda linea desde php despues de brs</p> 
        ");
    ?>
    // segundo metodo de escritura de html desde php este es el mas usado
    <?=
        "
        <h1>escritura de html con php con el metodo de igual: </h1>  
        " 
    ?>
     // combinacion de escritura 
     <h2>MI NOMBRE ES: <?=$nombre ?>

     </h2>
</body>
</html>