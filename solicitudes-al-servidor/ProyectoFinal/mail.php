<?php
    require("vendor/autoload.php");
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function sendMail($subject,$body,$email,$name,$html = false){

        // todo esto fue copiado de la pagina de packagist phpmailer
        // configuracion inicial de nuestro servidor mailtrap
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = '95e06227934ca6';
        $phpmailer->Password = 'b2e4c24b8d0357';
        

        // Añadiendo destinatarios
        $phpmailer->setFrom('contact@kevinooocorp.com', 'kevinooocorp'); //datos del contacto
        $phpmailer->addAddress($email, $name); // a quien se le envia 

        //definiendo contenido de mi email
        $phpmailer->isHTML($html); // aqui añadimos el parametro recibido arriba, ya que se puede mandar correos por html                                 //Set email format to HTML
        $phpmailer->Subject = $subject;
        $phpmailer->Body    = $body;
        $phpmailer->AltBody = 'This is the body in plain text for non-HTML mail clients';
        

        //al final mandamos correo
        $phpmailer->send();


    }

?>