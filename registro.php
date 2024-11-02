<?php
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    if ($password !== $confirm_password) {
        die('Las contraseñas no coinciden');
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, correo, contraseña, rol) VALUES (?, ?, ?, 'usuario')";
    
    if ($stmt = $conexion->prepare($sql)) {
        $stmt->bind_param("sss", $nombre, $correo, $password_hash);
        
        if ($stmt->execute()) {
            header("location: login.php?registro=exitoso");
        } else {
            echo "Error al registrar el usuario.";
        }
        $stmt->close();
    }
}
?>