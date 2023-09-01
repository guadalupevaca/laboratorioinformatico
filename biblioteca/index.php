<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBLIOTECA IPET 363</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1> Biblioteca IPET 363</h1>
    <form action="procesoguardar.php" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br>

        <label for="caja">Caja:</label>
        <input type="number" id="caja" name="caja" required><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
