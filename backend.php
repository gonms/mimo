<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'vendor/autoload.php';

    $mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.sendgrid.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'apikey';                 // SMTP username
    $mail->Password = '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';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;   
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                                 // TCP port to connect to

    $mail->setFrom('mimo@mimo-advisors.com', utf8_decode('Mimo Advisors'));
    // $mail->addAddress('mimo@mimo-advisors.com');
    $mail->addAddress('gon.munoz.sanchez@gmail.com');

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = utf8_decode('Contacto desde la web');
    $mail->Body    = "<p>Se ha recibido el siguiente mensaje:</p><p>Nombre: " . utf8_decode($_POST['nombre']) .  "</p><p>Empresa: " . utf8_decode($_POST['empresa']) .  "</p><p>Email: " . utf8_decode($_POST['email']) .  "</p><p>Mensaje:<br />" . utf8_decode($_POST['mensaje']) .  "</p>";

    if ($mail->send())
        echo "OK";
    else
        echo $mail->ErrorInfo;
?>