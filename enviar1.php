<?php
	$destino='domicomputadores@gmail.com';
	$asunto = 'Mi sitio web';
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	$contenido= "Nombre: " . $nombre . "\nCorreo: " . $correo "\nMensaje" . $mensaje;
	mail($destino, "Domicilios", $contenido);

	header("Location:index2.html");


?>