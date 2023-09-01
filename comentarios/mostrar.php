<?php
// Conexión a la base de datos (modifica los datos de conexión según tu configuración)

$conexion = mysqli_connect("localhost", "root","","guada") or exit ("no se puede conectar");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta SQL para obtener los comentarios
$sql = "SELECT nombre, comentario FROM comentarios";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>nombre</th><th>comentario</th></tr>";

    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $fila["nombre"] . "</td><td>" . $fila["comentario"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "No hay comentarios.";
}

// Cerrar la conexión
$conexion->close();
?>
