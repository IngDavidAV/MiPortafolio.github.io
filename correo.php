<?php 
$destino = "davidav.dev@gmail.com";
$nombre = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$consulta = $_POST["consulta"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: ".$nombre.
			 "\nTeléfono: ".$phone.
			 "\nCorreo: ".$email.
			 "\nConsulta: ".$consulta.
			 "\nMensaje: ".$mensaje;

mail($destino, "Contacto", $contenido);
header("location:gracias.html");

?>