<?php
$destino ="valentinaramos26@gmail.com"
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$numero = $_POST["numero"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono " . $numero . "\nMensaje: " . $mensaje;
mail($destino,"Contacto", $contenido);
?>