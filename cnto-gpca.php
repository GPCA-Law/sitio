<?php

$mail='emanuelfe2002@yahoo.com.ar';

$nombre = $_POST['template-contactform-name'];
$email = $_POST['template-contactform-email'];
$telefono = $_POST['template-contactform-phone'];
$asunto = $_POST['template-contactform-subject'];
$servicio = $_POST['template-contactform-service'];
$consulta = $_POST['template-contactform-message'];
$header = "From:" .$email;
$thank="gracias.html";

$message = "

----------------------------------------------------------------
Formulario de contacto https://www.gpca.com.ar
----------------------------------------------------------------

Nombre: ".$nombre."

Email: ".$email."

Tel.: ".$telefono."

Asunto: ".$asunto."

Servicio: ".$servicio."

Consulta:

".$consulta."

----------------------------------------------------------------

";
if (mail($mail,$asunto,$message,$header))
Header ("Location: $thank");


?> 