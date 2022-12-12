<?php

if(isset($_POST["submit"]))
{
    $nombre = $_POST["nombre"];
    $mail = $_POST["mail"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
    
    $para = "martujoaquin02@gmail.com";
    $asunto = "Este email fue enviado desde la web de Le Karim";
    $message = $nombre . "" . $telefono . "" . $mail . "\n\n" . $mensaje;
    
    mail($para, $asunto, utf8_decode($message));
    
    header('Location:exito.html');
}
?>
