<?php

$nombre = $_POST["nombre"];
$mail = $_POST["email"];
$mensaje = $_POST["textarea"];

$mensaje = "Mensaje enviado por" . $nombre . ",\r\n";
$mensaje .= "Su email es: " . $mail . " \r\n";
$mensaje .= "mensaje: " . $_POST["textarea"] . " \r\n";


$para = "juambaledesma@gmail.com";
$asunto = "consulta taller de escritura creativa web"

mail($para, $asunto, utf8_decode($mensaje), $header);

header("location:index.html");

?>