<?php include('conexion.php'); ?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Agregar Estudiante</title>
</head>
<body>
    <div class="container">
        <h2>Agregar Nuevo Estudiante</h2>
        <form action="guardar_estudiante.php" method="POST">
            <label for="nombre">Nombre del Estudiante:</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="universidad">Universidad:</label>
            <input type="text" id="universidad" name="universidad" required><br>

            <label for="nota">Nota:</label>
            <input type="number" id="nota" name="nota" required><br>

            <input type="submit" value="Guardar Estudiante">
        </form>
    </div>
</body>
</html>
