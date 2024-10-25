<?php
$host = 'localhost';
$dbname = 'admin'; 
$username = 'root';
$password = '';

try {
    // Establecer la conexión a la base de datos
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Configurar PDO para que lance excepciones en caso de errores
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Mensaje opcional para confirmar la conexión (se puede eliminar en producción)
    // echo "Conexión exitosa a la base de datos";
} catch (PDOException $e) {
    // Mostrar un mensaje de error si la conexión falla
    echo "Error: " . $e->getMessage();
}
?>
