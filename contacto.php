<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['comment'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['comment'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'webmaster@vitrinacomercial.tk';
$asunto = 'Mensaje de NISSAN';

mail($para, $asunto, utf8_decode($comment), $header);

header("Location:index.html");
?>