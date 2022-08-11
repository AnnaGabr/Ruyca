<?php
/*
    $destinatario = "ruycaindustriaspvc@gmail.com";
    $nombre = $_POST['nombre'];
    $email = $_POST['mail'];
    $telefono = $_POST['tel'];
    $mensaje= $_POST['mensaje'];

    $asunto = "Mensaje del sitio web";
    $mensajeCompleto = "De" . $nombre . "\n Correo:" . $email . "\n Teléfono:" . $telefono . "\n Mensaje:" . $mensaje;

    mail($destinatario, $asunto, $mensajeCompleto);
    echo "<script>aler('¡correo enviado!')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
    */

//https://github.com/PHPMailer/PHPMailer
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'email/Exception.php';
require 'email/PHPMailer.php';
require 'email/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    // Se busca en internet lo que se necesita, ej smtp hotmail da smtp.live.com
    // para modificar con hosting: https://www.youtube.com/watch?v=qj-Cn8Cde10
    $mail->Host       = ;                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = ;         //SMTP username
    $mail->Password   = ;                           //SMTP password
    $mail->SMTPSecure = ; //PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = ;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('', 'UsuarioPagWeb');
    $mail->addAddress('');        //Add a recipient
    $mail->addAddress('');               //Name is optional

    /*
    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    */

    //Content
//    $mail->isHTML(true);  
    $mail->isHTML(false);                                  //Set email format to HTML
    $mail->Subject = 'Prueba Email';
    $mail->Body    = 'Correo de prueba desde el hosting';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>