<?php
session_start();
require_once '../conexion.php';

// Verificar si el usuario está logueado y es admin
if (!isset($_SESSION['loggedin']) || $_SESSION['rol'] !== 'admin') {
    header('Location: ../login.php');
    exit;
}

// Verificar si se ha enviado un ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los datos del paciente
    $sql = "SELECT * FROM pacientes WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $paciente = $result->fetch_assoc();

    if (!$paciente) {
        header('Location: panel_admin.php?mensaje=Paciente no encontrado');
        exit;
    }
} else {
    header('Location: panel_admin.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Editar Paciente</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <span class="nav-link text-white">Bienvenido, <?php echo $_SESSION['nombre']; ?></span>
                    </li>
                    <li class="nav-item">
                        <a href="../logout.php" class="nav-link">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h4>Editar Paciente</h4>
        <form action="actualizar_paciente.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $paciente['id']; ?>">
            <div class="mb-3">
                <label class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $paciente['nombre']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Edad</label>
                <input type="number" class="form-control" name="edad" value="<?php echo $paciente['edad']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Sexo</label>
                <select class="form-select" name="sexo" required>
                    <option value="masculino" <?php echo $paciente['sexo'] === 'masculino' ?
                                        'selected' : ''; ?>>Masculino</option>
                                        <option value="femenino" <?php echo $paciente['sexo'] === 'femenino' ? 'selected' : ''; ?>>Femenino</option>
                                        <option value="otro" <?php echo $paciente['sexo'] === 'otro' ? 'selected' : ''; ?>>Otro</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Teléfono</label>
                                    <input type="tel" class="form-control" name="telefono" value="<?php echo $paciente['telefono']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Correo</label>
                                    <input type="email" class="form-control" name="correo" value="<?php echo $paciente['correo']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tipo de Identificación</label>
                                    <select class="form-select" name="tipo_identificacion" required>
                                        <option value="CC" <?php echo $paciente['tipo_identificacion'] === 'CC' ? 'selected' : ''; ?>>Cédula de Ciudadanía</option>
                                        <option value="TI" <?php echo $paciente['tipo_identificacion'] === 'TI' ? 'selected' : ''; ?>>Tarjeta de Identidad</option>
                                        <option value="CE" <?php echo $paciente['tipo_identificacion'] === 'CE' ? 'selected' : ''; ?>>Cédula de Extranjería</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Número de Identificación</label>
                                    <input type="text" class="form-control" name="numero_identificacion" value="<?php echo $paciente['numero_identificacion']; ?>" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Actualizar Paciente</button>
                            </form>
                        </div>
                    
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                    </body>
                    </html>