<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar si el email ya existe
    $stmt = $conexion->prepare("SELECT * FROM usuario WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>
                alert('El email ya está registrado');
                window.location.href = '/signup.php';
              </script>";
    } else {
        // Insertar el nuevo usuario
        $stmt = $conexion->prepare("INSERT INTO usuario (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $password);
        if ($stmt->execute()) {
            echo "<script>
                    alert('Registro exitoso');
                    window.location.href = '/index.php';
                  </script>";
        } else {
            echo "<script>alert('Error al registrarse');</script>";
        }
    }
}
?>