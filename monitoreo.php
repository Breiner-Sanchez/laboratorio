<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programas de Monitoreo Crónico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .header {
            background: linear-gradient(135deg, #0056b3, #0099e6);
            color: white;
            padding: 3rem 0;
            text-align: center;
        }

        .navbar-brand i {
            margin-right: 10px;
        }

        .nav-link {
            color: #343a40 !important;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #0056b3;
            border: none;
        }

        .content-section {
            padding: 3rem 0;
        }

        .card {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 40px 0;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-heartbeat"></i> LabClínico
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
                        <a class="nav-link" href="#beneficios">Beneficios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="dashboard.php" class="btn btn-primary">Registrarse</a>
                </div>
            </div>
        </div>
    </nav>
    <header class="header fade-in">
        <div class="container">
            <h1 class="display-5 fw-bold">Programas de Monitoreo Crónico</h1>
            <p class="lead">Proporcionamos seguimiento para mejorar la calidad de vida y prevenir complicaciones.</p>
        </div>
    </header>

    <section class="content-section text-center fade-in">
        <div class="container">
            <h2>¿En qué consisten nuestros Programas de Monitoreo?</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card p-3">
                        <i class="fas fa-heart fa-2x text-primary mb-3"></i>
                        <h5 class="card-title">Control de Enfermedades Crónicas</h5>
                        <p class="card-text">Seguimiento continuo para detectar de forma temprana posibles cambios en los indicadores de salud.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-3">
                        <i class="fas fa-shield-alt fa-2x text-primary mb-3"></i>
                        <h5 class="card-title">Prevención de Complicaciones</h5>
                        <p class="card-text">Mantén un control adecuado de glucosa, presión arterial y colesterol para reducir el riesgo de complicaciones graves.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-3">
                        <i class="fas fa-user-md fa-2x text-primary mb-3"></i>
                        <h5 class="card-title">Atención Personalizada</h5>
                        <p class="card-text">Nuestros profesionales se enfocan en tus necesidades particulares para mejorar tu calidad de vida.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section bg-light fade-in" id="beneficios">
        <div class="container">
            <h2>Beneficios del Monitoreo Crónico</h2>
            <div class="row">
                <div class="col-md-6">
                    <p><i class="fas fa-check-circle text-success"></i> Mejor control de la enfermedad.</p>
                    <p><i class="fas fa-check-circle text-success"></i> Detección temprana de cambios.</p>
                    <p><i class="fas fa-check-circle text-success"></i> Atención y seguimiento continuo.</p>
                </div>
                <div class="col-md-6">
                    <p><i class="fas fa-check-circle text-success"></i> Reducción de complicaciones graves.</p>
                    <p><i class="fas fa-check-circle text-success"></i> Plan personalizado para cada paciente.</p>
                    <p><i class="fas fa-check-circle text-success"></i> Mejora de la calidad de vida.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section text-center fade-in" id="contacto">
        <div class="container">
            <h2>¡Contáctanos ahora!</h2>
            <p>Comunícate con nosotros a nuestra línea gratuita: <strong>(123) 456-7890</strong></p>
            <p>O escríbenos a nuestro E-mail: <strong>contacto@labclinico.com</strong></p>
        </div>
    </section>

    <footer class="footer text-center fade-in">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>LabClínico</h5>
                    <p>Comprometidos con su salud y bienestar desde hace más de 20 años.</p>
                    <div class="social-links">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>Enlaces Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Inicio</a></li>
                        <li><a href="#beneficios" class="text-white text-decoration-none">Beneficios</a></li>
                        <li><a href="consulta_usuario.php" class="text-white text-decoration-none">Consultar Resultados</a></li>
                        <li><a href="#contacto" class="text-white text-decoration-none">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
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
            <p class="mb-0">&copy; <script>document.write(new Date().getFullYear())</script> LabClínico. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
