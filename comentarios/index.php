<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios Públicos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Comentarios Públicos</h1>

    <form action="guardarcomentario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario" rows="4" required></textarea><br>

        <input type="submit" value="Enviar">
    </form>

    <h2>Comentarios</h2>
    <div id="comentarios">
        <?php
            include ('mostrar.php');
        ?>
    </div>
</body>
</html>
