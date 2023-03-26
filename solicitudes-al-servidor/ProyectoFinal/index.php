<?php
    require("mail.php"); // permite agregar el archivo mail.php para que tambien lo lea


    $status = "";
    function validate($name,$email,$asunto,$mensaje){
         return !empty($name) && !empty($email) && !empty($asunto) && !empty($mensaje) ;
    }  ;  
    if(isset($_POST["form"])){
        if(validate($_POST["name"],$_POST["email"],$_POST["subject"],$_POST["message"])){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $motivo = $_POST["subject"];
            $mensaje = $_POST["message"];

            //mandar correo
            // USAREMOS PHPMAILER PACKAGIST https://packagist.org/packages/phpmailer/phpmailer
            // pero antes necesitamos de composer
            // en la pag de composer download nos da el codigo de instalacion:
            // php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
            // php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
            // php composer-setup.php
            // php -r "unlink('composer-setup.php');"

            //llamamos a la funcion desde el archivo mail.php
            sendMail($motivo,$mensaje,$email,$name, true);


            $status="enviado";
        }
        else{
            $status ="rechazo";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Mail</title>
</head>
<body>
    <!-- alertas -->

    <?php if($status == "enviado"):?>
        <div class="success">
             <p>MENSAJE ENVIADO</p>
             <p><?= $status?></p>
        </div>
    <?php endif;?> 
    <?php if($status == "rechazo"):?>   
        <div class="imposible">
            <p>MENSAJE NO ENVIADO</p>
            <p><?= $status?></p>
        </div>
    <?php endif;?>   
    
    
    <!-- formulario -->
    <form action="index.php" method="POST">
        <div class="title">
            <h1>Contactanos</h1>
        </div>
        <div class="cuerpoForm">
            <div class="input-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="input-group">
                <label for="email">Correo</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="input-group">
                <label for="subject">Asunto</label>
                <input type="text" name="subject" id="subject">
            </div>
            <div class="input-group">   
                <label for="message">Mensaje</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div> 
            <div class="button-container">
                <button type="submit" name="form">Enviar</button>
            </div>
        </div>
        <div class="contactanos">
            <div class="contact-info">
                <div class="info">
                    <span>Kevinooo Corp</span>
                </div>
                <div class="info">
                    <span>+00 20202020202</span>
                </div>
            </div>
        </div>
        
    </form>
</body>
</html>