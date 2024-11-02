<?php
session_start();
require_once '../conexion.php';

// Verificar si el usuario está logueado y es admin
if (!isset($_SESSION['loggedin']) || $_SESSION['rol'] !== 'admin') {
    header('Location: ../login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Panel de Administración</a>
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
        <div class="row">
            <!-- Formulario de Registro de Paciente -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Registrar Nuevo Paciente</h4>
                    </div>
                    <div class="card-body">
                        <form action="guardar_paciente.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Edad</label>
                                <input type="number" class="form-control" name="edad" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sexo</label>
                                <select class="form-select" name="sexo" required>
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" name="telefono">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Correo</label>
                                <input type="email" class="form-control" name="correo">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tipo de Identificación</label>
                                <select class="form-select" name="tipo_identificacion" required>
                                    <option value="CC">Cédula de Ciudadanía</option>
                                    <option value="TI">Tarjeta de Identidad</option>
                                    <option value="CE">Cédula de Extranjería</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Número de Identificación</label>
                                <input type="text" class="form-control" name="numero_identificacion" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar Paciente</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Formulario de Registro de Resultado -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Registrar Nuevo Resultado</h4>
                    </div>
                    <div class="card-body">
                        <form action="guardar_resultado.php" method ="POST">
                            <div class="mb-3">
                                <label class="form-label">Paciente</label>
                                <select class="form-select" name="id_paciente" required>
                                    <?php
                                    $sql = "SELECT id, nombre FROM pacientes";
                                    $result = $conexion->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Prueba</label>
                                <select class="form-select" name="id_prueba" required>
                                    <?php
                                    $sql = "SELECT id, nombre_prueba FROM pruebas";
                                    $result = $conexion->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre_prueba'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Resultado</label>
                                <textarea class="form-control" name="resultado" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Fecha</label>
                                <input type="date" class="form-control" name="fecha" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar Resultado</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabla de Pacientes Registrados -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Pacientes Registrados</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Edad</th>
                                        <th>Sexo</th>
                                        <th>Teléfono</th>
                                        <th>Correo</th>
                                        <th>Identificación</th>
                                        <th>Acciones</th> <!-- Nueva columna para acciones -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM pacientes ORDER BY id DESC";
                                    $result = $conexion->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['nombre'] . "</td>";
                                        echo "<td>" . $row['edad'] . "</td>";
                                        echo "<td>" . $row['sexo'] . "</td>";
                                        echo "<td>" . $row['telefono'] . "</td>";
                                        echo "<td>" . $row['correo'] . "</td>";
                                        echo "<td>" . $row['tipo_identificacion'] . " " . $row['numero_identificacion'] . "</td>";
                                        echo "<td>
                                            <a href='editar_paciente.php?id=" . $row['id'] . "' class='btn btn-success btn-sm'><i class='fas fa-edit'></i></a>
                                            <form action='eliminar_paciente.php' method='POST' style='display:inline;'>
                                                <input type='hidden' name='id' value='" . $row['id'] . "'>
                                                <button type='submit' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este paciente?\");'><i class='fas fa-trash-alt'></i></button>
                                            </form>
                                        </td>"; // Botones de editar y eliminar con iconos
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

