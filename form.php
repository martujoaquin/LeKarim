<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../Composer/vendor/autoload.php';
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$email = new PHPMailer(TRUE);
$email->isSMTP();
$email->Mailer = "smtp";

$email->SMTPDebug  = 1;  
$email->SMTPAuth   = TRUE;
$email->SMTPSecure = "tls";
$email->Port       = 587;
$email->Host       = "smtp.gmail.com";
$email->Username   = "martujoaquin02@mail.com";
$email->Password   = "Martu2503";

if (isset($_POST['submit']))
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
} 
?>

