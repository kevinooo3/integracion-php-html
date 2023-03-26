<?php
    $saiyayines = ["goku","veguetta","gohan","picoro"];
    $varWhile= 0;
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
    //for
    <h1>For</h1>
    <ul>
        <?php for($i=0; $i<10;$i++):?>
            <li><?= $i; ?></li>
        <?php endfor;?>
    </ul>
    <h1>Foreach</h1>
    <ul>
        <?php foreach($saiyayines as $saiyayin):?>
            <li><?= $saiyayin; ?></li>
        <?php endforeach;?>
    </ul>
    <h1>While</h1>
    <ul>
        <?php while($varWhile < 10):?>
            <li><?= $varWhile; ?></li>
            <?php $varWhile++; ?>
        <?php endwhile; ?>
    </ul>
</body>
</html>