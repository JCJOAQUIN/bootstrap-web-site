<?php 
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$message = $_POST['message'];

$body = "Nombre: " . $nombre . "<br>Email: " .$email . "<br>Mensaje: " .$message;


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
    $mail->Username   = 'discomjv21@gmail.com';                     //SMTP username
    $mail->Password   = 'jovc880125';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('discomjv21@gmail.com', $nombre);
    $mail->addAddress('iscjovc0125@gmail.com', 'LabTech-Dev');     //Add a recipient
 
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $body;
    $mail->CharSet = 'utf-8';

    $mail->send();
    echo '<script>
    alert("El mensaje ha sido enviado satisfactoriamente");
    window.history.go(-1);
    </script>';
} catch (Exception $e) {
    echo "El mensaje no se ha podido enviar correctamente. Mailer Error: {$mail->ErrorInfo}";
}
 
?> 