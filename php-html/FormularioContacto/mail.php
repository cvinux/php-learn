<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;


function sendMail($subject, $body,$email,$name, $html = false){

    //Configuracion inicial de nuestro servidor
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'c890303a921350';
    $phpmailer->Password = '868c5f1d2268a7';

    //añadiendo destinatarios
    $phpmailer->setFrom('mark@facebook.com', 'Mark Zuckerberg');
    $phpmailer->addAddress($email, $name); 

    //definiendo el contenido de mi email
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    //mandar el correo
    $phpmailer->send();
}

?>