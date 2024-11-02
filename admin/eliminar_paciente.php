<?php
session_start();
require_once '../conexion.php';

// Verificar si el usuario está logueado y es admin
if (!isset($_SESSION['loggedin']) || $_SESSION['rol'] !== 'admin') {
    header('Location: ../login.php');
    exit;
}

// Verificar si se ha enviado un ID para eliminar
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Preparar la consulta para eliminar el paciente
    $sql = "DELETE FROM pacientes WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        // Redirigir a la página principal con un mensaje de éxito
        header('Location: dashboard.php?mensaje=Paciente eliminado con éxito');
    } else {
        // Redirigir a la página principal con un mensaje de error
        header('Location: dashboard.php?mensaje=Error al eliminar el paciente');
    }
    $stmt->close();
} else {
    // Redirigir a la página principal si no hay ID
    header('Location: dashboard.php');
}
?>