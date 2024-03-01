<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Datos a guardar
    $datos = "Nombre de usuario: $usuario\nContraseña: $contraseña\n";

    // Definir el nombre del archivo
    $nombre_archivo = 'datos_usuarios.txt';

    // Configurar encabezados para descargar el archivo
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $nombre_archivo . '"');
    header('Content-Length: ' . strlen($datos));

    // Imprimir los datos para que se descarguen como archivo
    echo $datos;

    exit;
}
?>
