<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio Clínico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Estilos personalizados */
        .navbar-brand img {
            height: 50px;
        }

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('ruta/a/tu/imagen/laboratorio.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }

        .service-card {
            transition: transform 0.3s;
            margin-bottom: 20px;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .login-section {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 40px 0;
        }
    </style>
</head>

<body>
    <!-- Barra de navegación -->
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
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="consulta_usuario.php" class="btn btn-outline-primary me-2">Consultar Resultados</a>
                    <a href="login.php" class="btn btn-primary">Iniciar Sesión</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sección Hero -->
    <section class="hero-section text-center" img id="inicio">
        <div class="container">
            <h1>Bienvenidos a LabClínico</h1>
            <p class="lead">Su salud es nuestra prioridad</p>
            <a href="consulta_usuario.php" class="btn btn-primary btn-lg">Consultar Resultados</a>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section class="py-5" id="servicios">
        <div class="container">
            <h2 class="text-center mb-5">Nuestros Servicios</h2>
            <div class="row">
                <!-- Servicio 1 -->
                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center">
                            <i class="fas fa-microscope fa-3x mb-3 text-primary"></i>
                            <h5 class="card-title">Análisis Clínicos</h5>
                            <p class="card-text">Realizamos todo tipo de análisis clínicos con la más alta precisión y tecnología.</p>
                        </div>
                    </div>
                </div>

                <!-- Servicio 2 -->
                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center">
                            <i class="fas fa-heartbeat fa-3x mb-3 text-primary"></i>
                            <h5 class="card-title">Pruebas Especializadas</h5>
                            <p class="card-text">Ofrecemos pruebas especializadas y perfiles completos para diagnósticos precisos.</p>
                        </div>
                    </div>
                </div>

                <!-- Servicio 3 -->
                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center">
                            <i class="fas fa-home fa-3x mb-3 text-primary"></i>
                            <h5 class="card-title">Toma de Muestras a Domicilio</h5>
                            <p class="card-text">Servicio de toma de muestras en la comodidad de su hogar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Por Qué Elegirnos -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">¿Por Qué Elegirnos?</h2>
            <div class="row">
                <div class="col-md-3 text-center mb-4">
                    <i class="fas fa-user-md fa-3x mb-3 text-primary"></i>
                    <h4>Personal Calificado</h4>
                    <p>Equipo de profesionales altamente capacitados.</p>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <i class="fas fa-clock fa-3x mb-3 text-primary"></i>
                    <h4>Resultados Rápidos</h4>
                    <p>Entrega de resultados en el menor tiempo posible.</p>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <i class="fas fa-certificate fa-3x mb-3 text-primary"></i>
                    <h4>Certificados</h4>
                    <p>Laboratorio certificado con estándares internacionales.</p>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <i class="fas fa-comment fa-3x mb-3 text-primary"></i>
                    <h4>Atención Personalizada</h4>
                    <p>Asesoramiento y atención personalizada a cada paciente.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section class="py-5" id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Contáctenos</h2>
                    <p><i class="fas fa-map-marker-alt"></i> Dirección: Av. Principal 123, Ciudad</p>
                    <p><i class="fas fa-phone"></i> Teléfono: (123) 456-7890</p>
                    <p><i class="fas fa-envelope"></i> Email: contacto@labclinico.com</p>
                    <p><i class="fas fa-clock"></i> Horario de Atención:</p>
                    <ul class="list-unstyled ms-4">
                        <li>Lunes a Viernes: 7:00 AM - 7:00 PM</li>
                        <li>Sábados: 7:00 AM - 2:00 PM</li>
                        <li>Domingos: Cerrado</li>
                    </ul>
                </div>
                <div class="col-md-6">

                    <form class="contact-form" action="enviar_mensaje.php" method="POST">
                        <h3>Envíenos un mensaje</h3>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre completo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono">
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Noticias o Promociones -->


    <h2 class="text-center mb-4">Últimas Noticias</h2>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Nuevo Servicio de Pruebas COVID-19</h5>
                        <p class="card-text">Implementamos nuevas pruebas rápidas y PCR con resultados en 24 horas.</p><br>
                        <a href="Covid.php" class="btn btn-outline-primary">Leer más</a>
                    </div>
                </div>
            </div><br>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Descuentos Especiales</h5>
                        <p class="card-text">20% de descuento en perfiles completos durante este mes.</p><br><br>
                        <a href="Descuentos.php" class="btn btn-outline-primary">Ver promoción</a>
                    </div>
                </div>
            </div><br>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Pruebas Genéticas y de Medicina Personalizada</h5>
                        <p class="card-text">Test de ADN para predisposición a enfermedades (cáncer, diabetes, cardiopatías).</p>
                        <a href="pruebas.php" class="btn btn-outline-primary">Leer más</a>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Servicios de Telemedicina y Consultoría Médica</h5>
                        <p class="card-text">Interpretación de resultados en línea con médicos y especialistas.</p><br>
                    <br>    <a href="telemedicina.php" class="btn btn-outline-primary">Leer más</a>
                    </div>
                </div>
            </div><br>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Análisis Avanzados con Tecnología de IA</h5>
                        <p class="card-text">Integración de IA para el análisis de imágenes (por ejemplo, análisis de muestras de sangre o tejidos).</p><br>
                        <a href="analisisavanz.php" class="btn btn-outline-primary">Leer más</a>
                    </div>
                </div>
            </div><br>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"> Programas de Monitoreo Crónico</h5>
                        <p class="card-text">Planes de monitoreo para enfermedades crónicas como diabetes, hipertensión, dislipidemia, con reportes periódicos y consultas de seguimiento.</p><br>
                        <a href="monitoreo.php" class="btn btn-outline-primary">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <!-- Footer -->

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

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script para el smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>