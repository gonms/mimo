<?php

    require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.sendgrid.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'apikey';                 // SMTP username
    $mail->Password = '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';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('mimo@mimo-advisors.com', utf8_decode('Mimo Advisors'));
    $mail->addAddress('gon.munoz.sanchez@gamil.com');

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = utf8_decode('Contacto desde la web');
    $mail->Body    = "<p>Se ha recibido el siguiente mensaje:</p><p>Nombre: " . utf8_decode($_POST['nombre']) .  "</p><p>Empresa: " . utf8_decode($_POST['empresa']) .  "</p><p>Email: " . utf8_decode($_POST['email']) .  "</p><p>Mensaje<br />: " . utf8_decode($_POST['mensaje']) .  "</p>";

    if ($mail->send())
        return "OK";
    else
        return "KO";
?>