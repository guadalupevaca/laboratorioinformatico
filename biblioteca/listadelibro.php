<?php


$conexion = mysqli_connect("localhost", "root","","guada") or exit ("no se puede conectar");



// Verificar la conexión
if ($conexion->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conexion->connect_error);
}

// Consultar la base de datos para obtener la lista de libros
$sql = "SELECT * FROM biblioteca";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Libros</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Lista de Libros</h1>
    <ul>
        <?php
        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                echo "<li>{$row['titulo']} - Autor: {$row['autor']} - Caja: {$row['caja']}</li>";
            }
        } else {
            echo "No se encontraron libros.";
        }
        ?>
    </ul>
  
    <a href="index.php" class="boton">Volver al Formulario</a>
</body>
</html>