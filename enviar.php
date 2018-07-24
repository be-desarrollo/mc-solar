<?php

// ----------- LLAMAR CAMPOS -----------

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$asunto = $_POST ['asunto'];
$mensaje = $_POST['mensaje'];


// ----------- DATOS PARA EL CORREO -----------

$destinatario = "contacto@mcsolar.mx";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta.= "Télefono: $telefono \n";
$carta = "Asunto: $asunto  \n"
$carta.= "E-mail: $email \n";
$carta.= "Mensaje: $mensaje";

// ----------- ENVIO DE MENSAJE -----------

//mail($destinatario, $asunto, $carta);
//header('Location:mensajeEnvio.html');


 ?>
