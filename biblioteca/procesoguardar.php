<?php

$conexion = mysqli_connect("localhost", "root","","guada") or exit ("no se puede conectar");


// Obtener datos del formulario
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$caja = $_POST["caja"];

// Insertar los datos en la base de datos
$sql = "INSERT INTO biblioteca (titulo, autor, caja) VALUES ('$titulo', '$autor', '$caja')";

if ($conexion->query($sql) === TRUE) {
    header("Location:listadelibro.php");;
} else {
    echo "Error al guardar el libro: " . $conexion->error;
}

$conexion->close();
?>
