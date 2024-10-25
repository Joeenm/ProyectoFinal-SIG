<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $universidad = $_POST['universidad'];
    $nota = $_POST['nota'];

    // Prepara la consulta SQL para insertar un nuevo estudiante
    $sql = "INSERT INTO estudiantes (nombre, universidad, nota) VALUES (:nombre, :universidad, :nota)";

    $stmt = $conn->prepare($sql);

    // Vincular parámetros
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':universidad', $universidad);
    $stmt->bindParam(':nota', $nota);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Estudiante agregado exitosamente.";
        // Redirigir a la página principal o mostrar un mensaje de éxito
        header("Location: vista.php");
    } else {
        echo "Error al agregar estudiante.";
    }
}
?>
