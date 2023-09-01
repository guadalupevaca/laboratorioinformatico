<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $comentario = $_POST["comentario"];

    // Conexión a la base de datos (modifica los datos de conexión según tu configuración)
 
$conexion = mysqli_connect("localhost", "root","","guada") or exit ("no se puede conectar");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Preparar y ejecutar la consulta SQL para insertar el comentario
    $stmt = $conexion->prepare("INSERT INTO comentarios (nombre, comentario) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $comentario);
    $stmt->execute();
    $stmt->close();

    // Cerrar la conexión
    $conexion->close();
}

header("Location: index.php");
?>
