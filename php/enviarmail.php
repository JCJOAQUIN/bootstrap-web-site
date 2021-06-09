<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'josecarlos19882546@gmail.com';                     //SMTP username
    $mail->Password   = 'jovc880125';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('josecarlos19882546@gmail.com');
    $mail->addAddress('josecarlos19882546@gmail.com', 'prueba email');     //Add a recipient
 
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'correo de prueba';
    $mail->Body    = 'este es el cuerpo del correo <b>en negritas</b>';
    $mail->AltBody = 'correo cliente';

    $mail->send();
    echo 'El mensaje ha sido enviado satisfactoriamente';
} catch (Exception $e) {
    echo "El mensaje no se ha podido enviar correctamente. Mailer Error: {$mail->ErrorInfo}";
}
 
?> 