<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fronit - Página Principal</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ secure_asset('js/home.js') }}"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Josefin+Sans:wght@400;700&family=Great+Vibes&family=Libre+Baskerville:wght@400;700&family=Cardo:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <img src="{{ asset('css/images/logo-fronit-menu.png') }}" alt="Logo Fronit" class="logo-menu">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Inicio Section -->
    <section id="inicio" class="d-flex justify-content-center align-items-center text-center" style="height: 100vh;">
        <div>
            <h1 class="display-3 dynamic-text font-libre">
                Bienvenido a
                <img src="{{ asset('css/images/logo-fronit-carrusel.png') }}" alt="Logo Fronit" class="logo-inicio">
            </h1>

            <p class="lead">Tecnología, talento y lealtad para tus ideas.</p>
            <a href="#servicios" class="btn btn-primary btn-lg mt-4">Nuestros Servicios</a>
        </div>
    </section>



    <!-- Servicios Section -->
    <section id="servicios" class="text-center">
        <div class="container">
            <h2 class="dosis text-uppercase my-4 ">Nuestros Servicios</h2>
            <div class="row">
                <div class="col-md-4 col-sm-12 mb-4 mb-md-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <i class="bi bi-laptop display-4  mb-3 subtitulos"></i>
                            <h5 class="card-title subtitulos dosis">Desarrollo de Software</h5>
                            <p class="card-text">"Creamos aplicaciones personalizadas para optimizar tus procesos. Colaboramos de forma directa con tu equipo, enseñando a utilizar herramientas más fáciles e intuitivas. La modernización debe ser rápida y no interferir en tu modelo de negocio ni ciclo productivo. Un equipo altamente capacitado estará monitoreando nuevos requerimientos, brindando soporte y capacitando de manera constante. Nos esforzamos por transmitir lo que necesitas automatizar, estando siempre al servicio con la mejor disposición y humildad para satisfacer al máximo a nuestros clientes."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 mb-4 mb-md-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <i class="bi bi-graph-up display-4 mb-3 subtitulos"></i>
                            <h5 class="card-title subtitulos dosis ">Transformación Digital</h5>
                            <p class="card-text">"Una empresa puede operar con pocos recursos tecnológicos y aún así ser exitosa. Sin embargo, muchas tareas tediosas y procesos se pueden automatizar fácilmente. No importa el tamaño de tu empresa o su infraestructura tecnológica, te explicamos cada paso de la arquitectura de software que desarrollamos para ti. ¿Preocupado por los costos? No necesariamente son elevados. Nuestras soluciones se adaptan de forma accesible a tus necesidades. Trabajamos con diversas tecnologías para construir aplicaciones y siempre estamos para ayudarte, incluso si no está relacionado directamente con el desarrollo de software. Nos comprometemos a resolver cualquier reto."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 mb-4 mb-md-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <i class="bi bi-lightbulb display-4 mb-3 subtitulos"></i>
                            <h5 class="card-title subtitulos dosis">Asesoría para Startup</h5>
                            <p class="card-text">"¿Necesitas un founder técnico? ¿Te cobran demasiado por un MVP? Quizás un solo desarrollador no sea suficiente. Nosotros te damos flexibilidad: nos reunimos por Meet o en una exclusiva terraza en Providencia. Nuestro equipo tiene experiencia en el desarrollo de startups. ¿Nos ofreces un porcentaje o prefieres pagar solo por el desarrollo de tu producto? Desde el primer minuto garantizamos la confidencialidad de tu idea con un NDA firmado por ambas partes. Nuestro sello es el talento y la lealtad hacia nuestros clientes, lo que nos permitirá ser una marca prestigiosa y confiable en soluciones tecnológicas."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre Nosotros Section -->
    <section id="nosotros" class="py-5 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="sobre-nosotros-card p-4 text-center">
            <h2 class="text-uppercase dosis titulo-sobre-nosotros mb-4">Sobre Fronit</h2>
            <p class="lead texto-sobre-nosotros">En Fronit, transformamos ideas en soluciones tecnológicas efectivas. Nos especializamos en optimizar procesos y brindar asesoría personalizada a empresas y startups, siempre manteniendo la simplicidad y la eficiencia como prioridad.</p>
            <p class="lead texto-sobre-nosotros">Nuestros servicios incluyen desarrollo de software, transformación digital y asesoría técnica. Nuestra misión es ser tu aliado tecnológico, ofreciéndote soluciones que se adapten a tus necesidades sin interferir en tu ciclo de negocio.</p>
        </div>
    </section>


    <!-- Contacto Section -->
    <section id="contacto" class="py-5">
        <div class="container">
            <div class="contact-container p-4 mt-contact">
                <h2 class="text-center mb-4 dosis">Contáctanos</h2>
                <form id="contactForm" method="POST" action="https://getform.io/f/anleggka">
                    <div class="row mb-3">
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="name" required>
                            <div class="invalid-feedback">Por favor, ingresa tu nombre.</div>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">Por favor, ingresa un correo electrónico válido.</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="mensaje" name="message" rows="5" required></textarea>
                        <div class="invalid-feedback">Por favor, escribe tu mensaje.</div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg mt-4">Enviar Mensaje</button>
                    </div>
                </form>
            </div>
        </div>
    </section>






    <footer class="footer">
        <div class="container text-center text-lg-start py-4">
            <div class="row">
                <!-- Logo y descripción -->
                <div class="col-md-6 ">
                    <img src="{{ asset('css/images/logo-fronit-carrusel.png') }}" alt="Logo Fronit" class="footer-logo">
                    <p>Somos una empresa comprometida con la transformación digital <br>y el desarrollo de software a medida, siempre enfocados <br>en proporcionar soluciones tecnológicas innovadoras y leales.</p>
                </div>

                <!-- Contacto -->
                <div class="col-md-3 ">
                    <h5 class="text-uppercase mb-3">Contáctanos</h5>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fas fa-map-marker-alt mr-icon"></i>
                            <span class="direccion">Los Piñones 100, Providencia,<br>Región Metropolitana.</span>
                        </li>
                        <li><i class="fas fa-phone mr-icon"></i> +56 9 2394 6655 </li>
                        <li><i class="fas fa-envelope mr-icon"></i> contacto@fronit.cl</li>
                    </ul>
                </div>

                <!-- Redes sociales -->
                <div class="col-md-3 ">
                    <h5 class="text-uppercase mb-3">Síguenos</h5>
                    <a href="https://www.linkedin.com/company/fronit" class="social-icon" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
                    <a href="https://wa.me/message/IXZXZ6LX4LAKF1" class="social-icon" target="_blank"><i class="fab fa-whatsapp fa-2x"></i></a>
                </div>
            </div>
        </div>
        <div class="text-center mbb">
            © 2024 Fronit. Todos los derechos reservados.
        </div>
    </footer>


    <!-- Bootstrap 5.3 JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Validación del formulario con JavaScript -->
    <script>
        (function() {
            'use strict';
            const form = document.getElementById('contactForm');
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        })();
    </script>

    <!-- Botón de WhatsApp -->
    <a href="https://wa.me/message/IXZXZ6LX4LAKF1" class="whatsapp-button" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
    </a>


</body>

</html>