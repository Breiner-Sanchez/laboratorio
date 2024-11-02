<?php
session_start(); // Inicia la sesión

// Configuración de conexión a la base de datos
$servername = "localhost"; // Cambia si tu servidor tiene otro nombre
$username = "root"; // Por defecto en XAMPP
$password = ""; // Por defecto en XAMPP
$dbname = "laboratorio"; // Cambia por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Preparar y vincular
$stmt = $conn->prepare("INSERT INTO contact_messages (nombre, email, telefono, mensaje) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $email, $telefono, $mensaje);

// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    // Ejecutar la consulta
    if ($stmt->execute()) {
        $_SESSION['message'] = "Mensaje enviado con éxito."; // Almacena el mensaje en la sesión
    } else {
        $_SESSION['message'] = "Error: " . $stmt->error;
    }
}

// Cerrar la conexión
$stmt->close();
$conn->close();

// Redirigir a index.php
header("Location: index.php");
exit();
?>