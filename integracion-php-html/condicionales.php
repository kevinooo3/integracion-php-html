<?php
    $miracleisback=true;
    $dendiback=true;
    $kevinback=true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <!--Esto no se deberia hacer-->
    <?php
        if($miracleisback){
            echo("yeahhhh miracle");
        }else{
            echo("oh noooo!!");
        };
    ?>
    <!--Esto es aceptable-->
    <?php if($dendiback){ ?>
        
        <?php echo("yeahhhh dendi"); ?>
    <?php   }else{ ?>
        <?php echo("oh noooo!!");  ?>
            <?php  };?>
     <!--Esto es mas legible-->
    <?php if($kevinback): ?>
            <b>yeahhhh kevin</b>
    <?php else: ?>
        <b>oh noooo!!</b>
    <?php endif; ?>    
</body>
</html>