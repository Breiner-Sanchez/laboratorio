<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas Genéticas y de Medicina Personalizada</title>
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

        h2 {
            text-align: center;
            margin: 2rem 0;
        }

        .content-section {
            padding: 2rem 0;
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

        .social-links a {
            font-size: 1.2rem;
        }

        .footer h5 {
            margin-bottom: 1rem;
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
            <a class="navbar-brand" href="#">
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
            <h1 class="display-5 fw-bold">Pruebas Genéticas y Medicina Personalizada</h1>
            <p class="lead">Descubre cómo tu ADN puede ayudarte a prevenir enfermedades.</p>
        </div>
    </header>

    <section class="content-section text-center fade-in">
        <div class="container">
            <h2>Pruebas Genéticas Disponibles</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card p-3">
                        <i class="fas fa-dna fa-2x text-primary mb-3"></i>
                        <h5 class="card-title">Predisposición a Cáncer</h5>
                        <p class="card-text">Detecta mutaciones genéticas relacionadas con diferentes tipos de cáncer para una prevención temprana.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-3">
                        <i class="fas fa-heartbeat fa-2x text-primary mb-3"></i>
                        <h5 class="card-title">Evaluación de Cardiopatías</h5>
                        <p class="card-text">Identifica riesgos de enfermedades cardiovasculares según tu ADN. <br><br></p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-3">
                        <i class="fas fa-prescription-bottle-alt fa-2x text-primary mb-3"></i>
                        <h5 class="card-title">Predisposición a Diabetes</h5>
                        <p class="card-text">Evaluación de la probabilidad de desarrollar diabetes tipo 1 y tipo 2. <br><br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section bg-light fade-in" id="beneficios">
        <div class="container">
            <h2>¿Por qué realizar un test de ADN?</h2>
            <p>El análisis de tu ADN puede proporcionar información valiosa sobre tu salud y ayudarte a tomar decisiones informadas para prevenir posibles enfermedades y adoptar un estilo de vida saludable.</p>
        </div>
    </section>

    <section class="content-section text-center fade-in">
        <div class="container">
            <h2>¡Realiza tu prueba ahora!</h2>
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
            <p>&copy; <script>document.write(new Date().getFullYear())</script> LabClínico. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
