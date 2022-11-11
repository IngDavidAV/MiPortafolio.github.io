<?php 

		$visitor_name = strip_tags($_POST['nombre']);
    $visitor_email = strip_tags($_POST['email']);
    $visitor_question = strip_tags($_POST['asunto']);
    $visitor_message = strip_tags($_POST['mensaje']);

        // enviando correo electrónico
        $to_admin = "davidav.dev@gmail.com";
        $subject = "Enviado desde Portafolio de David Avalos: ";
        $message = '
<html><body>
<table>
<tr>
<td>Name</td>
<td>'.$visitor_name.'</td>
</tr>
<tr>
<td>Email</td>
<td>'.$visitor_email.'</td>
</tr>
<tr>
<td>Phone</td>
<td>'.$visitor_question.'</td>
</tr>
<tr>
<td>Comment</td>
<td>'.nl2br($visitor_message).'</td>
</tr>
</table>
</body></html>
';
        $headers = 'From: ' . $to_admin . "\r\n" .
                   'Reply-To: ' . $visitor_email . "\r\n" .
                   'X-Mailer: PHP/' . phpversion() . "\r\n" . 
                   "MIME-Version: 1.0\r\n" . 
                   "Content-Type: text/html; charset=ISO-8859-1\r\n";

        // Enviando correo electrónico al administrador
        //REVISAR ESTE METODO YA QUE NO SE ESTA CONECTANDO CON EL SERVIDOR SMTP                 
        mail($to_admin, $subject, $message, $headers); 
        
        $success_message = $receive_email_thank_you_message;

?>


