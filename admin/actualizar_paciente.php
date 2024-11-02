<?php
session_start();
require_once '../conexion.php';

// Verificar si el usuario está logueado y es admin
if (!isset($_SESSION['loggedin']) || $_SESSION['rol'] !== 'admin') {
    header('Location: ../login.php');
    exit;
}

// Verificar si se han enviado los datos del formulario
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $tipo_identificacion = $_POST['tipo_identificacion'];
    $numero_identificacion = $_POST['numero_identificacion'];

    // Preparar la consulta para actualizar el paciente
// Preparar la consulta para actualizar el paciente
$sql = "UPDATE pacientes SET nombre = ?, edad = ?, sexo = ?, telefono = ?, correo = ?, tipo_identificacion = ?, numero_identificacion = ? WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param('sissssss', $nombre, $edad, $sexo, $telefono, $correo, $tipo_identificacion, $numero_identificacion, $id);

    if ($stmt->execute()) {
        // Redirigir a la página principal con un mensaje de éxito
        header('Location: dashboard.php?mensaje=Paciente actualizado con éxito');
    } else {
        // Redirigir a la página principal con un mensaje de error
        header('Location: dashboard.php?mensaje=Error al actualizar el paciente');
    }
    $stmt->close();
} else {
    // Redirigir a la página principal si no hay ID
    header('Location: dashboard.php');
}
?>