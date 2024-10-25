<?php
include('conexion.php');

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM estudiantes WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$student = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['eliminar'])) {
        // Eliminar el estudiante
        $deleteStmt = $conn->prepare("DELETE FROM estudiantes WHERE id = :id");
        $deleteStmt->bindParam(':id', $id);
        
        if ($deleteStmt->execute()) {
            echo "<script>alert('Estudiante eliminado correctamente'); window.location.href='index.php';</script>";
        } else {
            echo "Error al eliminar el estudiante.";
        }
    } else {
        // Agregar nueva recomendación
        $nuevaRecomendacion = $_POST['recomendacion'];

        $insertStmt = $conn->prepare("INSERT INTO recomendaciones (estudiante_id, recomendacion) VALUES (:estudiante_id, :recomendacion)");
        $insertStmt->bindParam(':estudiante_id', $id);
        $insertStmt->bindParam(':recomendacion', $nuevaRecomendacion);
        
        if ($insertStmt->execute()) {
            echo "<script>alert('Recomendación agregada correctamente');</script>";
        } else {
            echo "Error al agregar la recomendación.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<<link rel="stylesheet" href="/asssets/css/estilo.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Recomendación</title>
</head>
<body>
    <h2>Agregar Recomendación para <?php echo htmlspecialchars($student['nombre']); ?></h2>
    <form method="POST">
        <label for="recomendacion">Nueva Recomendación:</label>
        <textarea name="recomendacion" rows="4" cols="50" required></textarea>
        <button type="submit">Agregar Recomendación</button>
    </form>
    
    <form method="POST" style="margin-top: 20px;">
        <input type="hidden" name="eliminar" value="1">
        <button type="submit" style="background-color: red; color: white;">Eliminar Estudiante</button>
    </form>
</body>
</html>
