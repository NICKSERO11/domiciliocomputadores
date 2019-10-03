<?php
header("Content-type: text/html;charset=\"utf-8\"");
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$curso = $_POST['curso'];
$empresa = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . "\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Curso: " . $curso . " \r\n";
$mensaje .= "Mensaje: " . $empresa . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'nicolassegurorojas@hotmail.com';
$asunto = 'Mi sitio web';

if (mail($para, $asunto, utf8_decode($mensaje), $header))
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='http://leonardoposadapedraza.org/prototipos/jm/g3/index2.html';</script>";

?>