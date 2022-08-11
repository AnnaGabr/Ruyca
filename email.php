<?php
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
?>