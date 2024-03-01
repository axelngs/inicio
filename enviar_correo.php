<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Datos a guardar
    $datos = "Nombre de usuario: $usuario\nContraseña: $contraseña\n";

    // Crear un archivo temporal
    $archivo_temporal = tmpfile();

    // Escribir los datos en el archivo temporal
    fwrite($archivo_temporal, $datos);

    // Obtener información sobre el archivo temporal
    $metadatos = stream_get_meta_data($archivo_temporal);
    $archivo_temporal_nombre = $metadatos['uri'];

    // Configurar encabezados para descargar el archivo
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="datos_usuarios.txt"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($archivo_temporal_nombre));

    // Leer el contenido del archivo temporal y enviarlo al cliente
    readfile($archivo_temporal_nombre);

    // Eliminar el archivo temporal
    fclose($archivo_temporal);

    exit;
}
?>
