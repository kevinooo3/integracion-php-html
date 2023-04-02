<?php
    setcookie(
        name:"header_color",
        value:"blue"
    );
    // pregunttamos si esta definida la cookie con  $_COOKIE["header_color"] , en caso de no estar definida le decimos que tome "red"
    $color = $_COOKIE["header_color"] ?? "red";

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
        <header style="
            background:<?= $color ?>;
        ">
            <img src="https://seeklogo.com/images/P/platzi-logo-98005E6AD6-seeklogo.com.png" alt="">
        </header>
</body>
</html>