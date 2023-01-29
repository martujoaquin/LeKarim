<?php

/* if (isset($_POST['submit']))
{
    $mailto = "martinajoaquin02@gmail.com";
    $name = $_POST['nombre'];
    $fromemail = $_POST['mail'];
    $phone = $_POST['telefono'];
    $subject2 = "Este email fue enviado desde la web de Le Karim";

    $message = "Nombre del cliente: " . $name . "\n"
        . "Email del cliente: " . $fromemail . "\n"
        . "Teléfono del cliente: " . $phone . "\n"
        . "Mensaje del cliente: " . "\n" . $_POST['mensaje'];

    $message2 = $name . "\n"
    . "Gracias por contactarte con nosotros. Te responderemos a la brevedad!" . "\n\n"
    . "Le Karim";

    $headers = "De: " . $fromemail;
    $headers2 = "De: " . $mailto;

    //PHP MEILER FUNCTION
    $result1 = mail($mailto, $subject2, $message, $headers); //empresa
    $result2 = mail($fromemail, $subject2, $message2, $headers2); //confirmation
}

if($result1 && $result2){
    header('Location:exito.html');
} else {
    $failed = "Tu mensaje no se pudo enviar, intentalo nuevamente";
} */

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

