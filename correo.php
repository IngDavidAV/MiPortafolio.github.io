<?php 

$destinatario = 'davidav.dev@gmail.com'; //Correo que recibe el mensaje
$nombre = $_POST['name'];
$phone = $_POST['phone'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];

$header = "Enviado desde Portafolio David Avalos por: " . $email;

$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre . "\nTelefono: " . $phone;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script>('Correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>
