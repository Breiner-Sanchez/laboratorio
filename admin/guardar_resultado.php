<?php
session_start();
require_once '../conexion.php';

// Verificar si el usuario está logueado y es admin
if (!isset($_SESSION['loggedin']) || $_SESSION['rol'] !== 'admin') {
    header('Location: ../login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recuperar los datos del formulario
    $id_paciente = $conexion->real_escape_string($_POST['id_paciente']);
    $id_prueba = $conexion->real_escape_string($_POST['id_prueba']);
    $resultado = $conexion->real_escape_string($_POST['resultado']);
    $fecha = $conexion->real_escape_string($_POST['fecha']);

    // Preparar la consulta SQL
    $sql = "INSERT INTO resultados (id_paciente, id_prueba, resultado, fecha) 
            VALUES ('$id_paciente', '$id_prueba', '$resultado', '$fecha')";

    // Ejecutar la consulta
    if ($conexion->query($sql)) {
        // Si la inserción fue exitosa
        $_SESSION['mensaje'] = "Resultado guardado correctamente";
        $_SESSION['tipo_mensaje'] = "success";
    } else {
        // Si hubo un error
        $_SESSION['mensaje'] = "Error al guardar el resultado: " . $conexion->error;
        $_SESSION['tipo_mensaje'] = "danger";
    }

    // Redireccionar al dashboard
    header('Location: dashboard.php');
    exit;
}

// Si no es una petición POST, redireccionar al dashboard
header('Location: dashboard.php');
exit;
?>