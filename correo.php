<?php 

$nombre = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$consulta = $_POST["consulta"];
$mensaje = $_POST["mensaje"];

$header = 'From'.$email."\r\n";
$header .= "X-Mailer: PHP/".phpversion()."\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Mensaje enviado por: ".$nombre."\r\n";
$message .= "Teléfono de Contacto: ".$phone."\r\n";
$message .= "Correo: ".$email."\r\n";
$message .= "Consulta".$consulta."\r\n";
$message .= "Mensaje".$_POST["mensaje"]."\r\n";
$message .= "Enviado el: ".date('d/m/Y', time());


$para = "davidav.dev@gmail.com";
$asunto = "Asunto del mensaje";

mail($para, $asunto, utf8_decode($message), $header);
header("location:index.html");

?>
