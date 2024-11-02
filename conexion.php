<?php
$host = 'localhost';
$dbname = 'laboratorio';
$username = 'root';
$password = '';

try {
    $conexion = new mysqli($host, $username, $password, $dbname);
    if ($conexion->connect_error) {
        throw new Exception("Error de conexión: " . $conexion->connect_error);
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>