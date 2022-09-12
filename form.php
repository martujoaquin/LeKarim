<?php

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$para = 'mail';
$asunto = 'Este email fue enviado desde la web';

mail($para, $asunto, utf8_decode($nombre,$mail,$telefono,$mensaje));

header('Location:exito.html');

?>