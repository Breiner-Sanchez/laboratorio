<?php
// Conexión a la base de datos (asegúrate de ajustar la información de la conexión según tu configuración)
require_once 'conexion.php';

// Verificar si se enviaron los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $tipo_identificacion = $_POST['tipo_identificacion'];
    $numero_identificacion = $_POST['numero_identificacion'];

    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO pacientes (nombre, edad, sexo, telefono, correo, tipo_identificacion, numero_identificacion) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Preparar la declaración
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sisssss", $nombre, $edad, $sexo, $telefono, $correo, $tipo_identificacion, $numero_identificacion);

    // Ejecutar la declaración
    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Paciente registrado con éxito</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
    }

    // Cerrar la declaración
    $stmt->close();
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Registrar Nuevo Paciente</h4>
            </div>
            <div class="card-body">
                <!-- Formulario para registrar paciente -->
                <form method="POST">
                    <!-- Campo para el nombre del paciente -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <!-- Campo para la edad -->
                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad</label>
                        <input type="number" class="form-control" id="edad" name="edad" required>
                    </div>

                    <!-- Campo para el sexo -->
                    <div class="mb-3">
                        <label for="sexo" class="form-label">Sexo</label>
                        <select class="form-select" id="sexo" name="sexo" required>
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>

                    <!-- Campo para el teléfono -->
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" required>
                    </div>

                    <!-- Campo para el correo -->
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>

                    <!-- Campo para el tipo de identificación -->
                    <div class="mb-3">
                        <label for="tipo_identificacion" class="form-label">Tipo de Identificación</label>
                        <select class="form-select" id="tipo_identificacion" name="tipo_identificacion" required>
                            <option value="CC">Cédula de Ciudadanía</option>
                            <option value="TI">Tarjeta de Identidad</option>
                            <option value="CE">Cédula de Extranjería</option>
                        </select>
                    </div>

                    <!-- Campo para el número de identificación -->
                    <div class="mb-3">
                        <label for="numero_identificacion" class="form-label">Número de Identificación</label>
                        <input type="text" class="form-control" id="numero_identificacion" name="numero_identificacion" required>
                    </div>

                    <!-- Botón para enviar el formulario -->
                    <button type="submit" class="btn btn-primary">Guardar Paciente</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
