<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    
    $to = "tu-email@dominio.com"; // Reemplaza esto con tu dirección de correo electrónico
    $subject = "Nuevo mensaje de contacto de $nombre";
    $body = "Nombre: $nombre\nEmail: $email\n\nMensaje:\n$mensaje";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito!";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
