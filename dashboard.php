

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<Center>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <!-- Reemplaza con tu logo -->
                <i class="fas fa-flask"></i> Registro
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                       
                    </li>
                    <li class="nav-item">
                       
                    </li>
                </ul>
                <div class="d-flex">
                   
                    <a href="index.php" class="btn btn-primary">Volver</a>
                </div>
            </div>
        </div>
    </nav>
            <!-- Formulario de Registro de Paciente -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Registrar  Paciente</h4>
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
            </Center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>