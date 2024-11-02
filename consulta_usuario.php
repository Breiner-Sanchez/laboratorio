<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laboratorio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Inicializar variables
$resultado_busqueda = null;
$error = "";

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_id = $_POST['tipo_identificacion'];
    $numero_id = $_POST['numero_identificacion'];
    
    // Consulta JOIN para obtener los resultados
    $sql = "SELECT p.nombre, p.numero_identificacion, pr.nombre_prueba, r.resultado, r.fecha 
            FROM pacientes p 
            INNER JOIN resultados r ON p.id = r.id_paciente 
            INNER JOIN pruebas pr ON r.id_prueba = pr.id 
            WHERE p.tipo_identificacion = ? AND p.numero_identificacion = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $tipo_id, $numero_id);
    $stmt->execute();
    $resultado_busqueda = $stmt->get_result();
    
    if ($resultado_busqueda->num_rows === 0) {
        $error = "No se encontraron resultados para el documento ingresado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Resultados - Laboratorio</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .header {
            background-color: #0056b3;
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
        }
        .search-container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        .results-container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .form-label {
            font-weight: bold;
        }
        .table th {
            background-color: #0056b3;
            color: white;
        }
        .alert {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <!-- Reemplaza con tu logo -->
                <i class="fas fa-flask"></i> LabClínico
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
                   
                    <a href="dashboard.php" class="btn btn-primary">Registrarse</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="header text-center">
        <h1>Consulta de Resultados</h1>
        <p>Ingrese su documento de identidad para consultar sus resultados</p>
    </div>

    <div class="container">
        <div class="search-container">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="tipo_identificacion" class="form-label">Tipo de Documento</label>
                        <select class="form-select" name="tipo_identificacion" required>
                            <option value="">Seleccione...</option>
                            <option value="TI">Tarjeta De Identidad</option>
                            <option value="CC">Cedula De Ciudadania</option>
                            <option value="Ce">Cedula De Extranjeria</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="numero_identificacion" class="form-label">Número de Documento</label>
                        <input type="text" class="form-control" name="numero_identificacion" required>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary">Consultar Resultados</button>
                        <a href="dashboard.php">Registrarse</a>
                    </div>
                
                </div>
            </form>
        </div>

        <?php if ($error): ?>
            <div class="alert alert-warning" role="alert">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <?php if ($resultado_busqueda && $resultado_busqueda->num_rows > 0): ?>
            <div class="results-container">
                <h3 class="mb-4">Resultados encontrados</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre del Paciente</th>
                                <th>Documento</th>
                                <th>Prueba Realizada</th>
                                <th>Resultado</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $resultado_busqueda->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                                    <td><?php echo htmlspecialchars($row['numero_identificacion']); ?></td>
                                    <td><?php echo htmlspecialchars($row['nombre_prueba']); ?></td>
                                    <td><?php echo htmlspecialchars($row['resultado']); ?></td>
                                    <td><?php echo date('d/m/Y', strtotime($row['fecha'])); ?></td>
                                </tr>
                                <button id="downloadPDF" class="btn btn-primary mt-3">Descargar en PDF</button>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif; ?>

        <div class="text-center mt-4">
            <p>Si tiene problemas para consultar sus resultados, por favor contáctenos:</p>
            <p>Teléfono: (123) 456-7890</p>
            <p>Email: laboratorio@ejemplo.com</p>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>LabClínico</h5>
                    <p>Comprometidos con su salud y bienestar desde hace más de 20 años.</p>
                    <div class="social-links">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Enlaces Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Inicio</a></li>
                        <li><a href="#servicios" class="text-white text-decoration-none">Servicios</a></li>
                        <li><a href="consulta_usuario.php" class="text-white text-decoration-none">Consultar Resultados</a></li>
                        <li><a href="#contacto" class="text-white text-decoration-none">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Boletín Informativo</h5>
                    <p>Suscríbase para recibir noticias y promociones.</p>
                    <form class="mb-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Su correo electrónico">
                            <button class="btn btn-primary" type="submit">Suscribirse</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="text-white">
            <div class="text-center">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> LabClínico. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="script.js"></script>
    <script>
        document.getElementById('downloadPDF').addEventListener('click', function () {
    // Verifica si existen resultados antes de generar el PDF
    if (document.querySelector('.results-container tbody tr') === null) {
        alert('No hay resultados para descargar.');
        return;
    }

    // Crear una instancia de jsPDF
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    // Establecer las dimensiones y márgenes del PDF
    const pageHeight = doc.internal.pageSize.height || 297;
    const margin = 10;
    let yOffset = margin;

    // Título del PDF
    doc.setFontSize(18);
    doc.text('Resultados del Laboratorio', margin, yOffset);
    yOffset += 10;

    // Encabezados de la tabla
    doc.setFontSize(12);
    const headers = ['Nombre del Paciente', 'Documento', 'Prueba Realizada', 'Resultado', 'Fecha'];

    // Extraer datos de la tabla HTML
    const data = obtenerDatosDeTabla();

    // Establecer la tabla en el PDF
    doc.autoTable({
        head: [headers],
        body: data,
        startY: yOffset,
        theme: 'striped',
        margin: { left: margin, right: margin },
        styles: { cellPadding: 2, fontSize: 10 },
    });

    // Descargar el archivo
    doc.save('resultados_laboratorio.pdf');
});

function obtenerDatosDeTabla() {
    const rows = document.querySelectorAll('.results-container tbody tr');
    const data = [];

    rows.forEach(row => {
        const cells = row.querySelectorAll('td');
        const rowData = [];
        cells.forEach(cell => {
            rowData.push(cell.textContent.trim());
        });
        data.push(rowData);
    });

    return data;
}</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
    </script>
</body>
</html>

<?php
// Cerrar la conexión
$conn->close();
?>