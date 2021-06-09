<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$message = $_POST['message'];

$header = 'From: ' . $email . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombre . "\r\n";
$message .= "Su e-mail es: " . $email . "\r\n";
$message .= "Asunto: " . $asunto . "\r\n";
$message .= "Mensaje: " . $_POST['message'] . "\r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'josecarlos19882546@gmail.com';
$titulo = 'ejemplo de mensaje';

mail($para, $titulo, utf8_decode($message), $header);

header("Location:index.html");
?>






