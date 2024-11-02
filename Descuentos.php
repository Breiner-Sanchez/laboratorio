<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descuentos Especiales</title>
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
            padding: 2rem;
        }

        .discount-section {
            background-color: #fff;
            padding: 3rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
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
    <header class="header text-center fade-in">
        <div class="container">
            <h1 class="display-5 fw-bold">Descuentos Especiales</h1>
            <p class="lead">¡Aprovecha nuestros descuentos exclusivos en análisis clínicos!</p>
        </div>
    </header>

    <section class="content-section text-center fade-in">
        <div class="container">
            <h2>¡Aprovecha nuestros descuentos especiales!</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card p-3">
                        <i class="fas fa-vial fa-2x text-primary mb-3"></i>
                        <h5 class="card-title">Análisis Clínicos</h5>
                        <p class="card-text">Realiza pruebas de sangre, orina y otros fluidos corporales con nuestros descuentos.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-3">
                        <i class="fas fa-microscope fa-2x text-primary mb-3"></i>
                        <h5 class="card-title">Laboratorios de Patología</h5>
                        <p class="card-text">Analiza muestras de tejidos y células para un diagnóstico preciso.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-3">
                        <i class="fas fa-dna fa-2x text-primary mb-3"></i>
                        <h5 class="card-title">Bioquímica Clínica</h5>
                        <p class="card-text">Pruebas bioquímicas para evaluar el funcionamiento de órganos vitales.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section bg-light fade-in" id="beneficios">
        <div class="container">
            <h2>Beneficios</h2>
            <p>Los análisis de laboratorio ofrecen una visión detallada y específica de la salud de una persona, ayudando en la prevención, diagnóstico y tratamiento de enfermedades. Contribuye a una mejor calidad de vida y a un manejo eficiente de la salud.</p>
        </div>
    </section>

    <section class="content-section text-center fade-in">
        <div class="container">
            <h2>¿Cómo acceder al descuento?</h2>
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
