<?php
session_start(); 
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta a la base de datos
    $stmt = $conexion->prepare("SELECT * FROM usuario WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user;
        header("Location: /views/index.php");
        exit;
    } else {
        echo "<script>alert('Credenciales incorrectas');</script>";
    }
}

?>