<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "retr01.mx@gmail.com";
$asunto = "Enviado desde sitio web";

$carta = "De: $nombre \n";
$carta = "Correo: $correo \n";
$carta = "Asunto: $asunto \n";
$carta = "Mensaje: $mensaje";

// Enviando Mensaje
$correo = mail($destinatario, $asunto, $carta);
if($correo){
    header("Location:mensaje.html");
}

?>
