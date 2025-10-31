<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Colegio Adonai</title>
    
    @vite(['resources/css/style.css', 'resources/css/blog.css', 'resources/js/script.js', 'resources/js/blog.js'])
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <!-- Navbar Corregido -->
<nav class="navbar" id="navbar">
    <div class="nav-container">
        <!-- Logo como botón -->
        <div class="logo">
            <a href="/" class="logo-link">
                <img src="/img/logoad.png" alt="Colegio Adonai" class="logo-img">
            </a>
        </div>

        <ul class="nav-menu" id="nav-menu">
            <li class="nav-item"><a href="/" class="nav-link">Inicio</a></li>
            
            <!-- Dropdown corregido -->
            <li class="nav-item dropdown">
                <a href="#nosotros" class="nav-link dropdown-toggle">
                    Sobre Nosotros <i class="fas fa-chevron-down dropdown-icon"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#mision" class="dropdown-link">Misión</a></li>
                    <li><a href="#vision" class="dropdown-link">Visión</a></li>
                    <li><a href="#valores" class="dropdown-link">Valores</a></li>
                </ul>
            </li>
            
            <li class="nav-item"><a href="{{ route('cursos') }}" class="nav-link">Cursos</a></li>
            <li class="nav-item"><a href="{{ route('talleres') }}" class="nav-link">Talleres</a></li>
            <li class="nav-item"><a href="{{ route('docentes') }}" class="nav-link">Profesores</a></li>
            <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="{{ route('tour') }}" class="nav-link">Visita Guiada</a></li>
        </ul>

        <div class="nav-actions">
            <!-- Botón Intranet -->
            <a href="{{ route('login') }}" class="btn-intranet">
                <span>Intranet</span>
                <i class="bi bi-person-circle"></i>
            </a>

            <!-- Hamburguesa -->
            <button class="menu-toggle" id="menu-toggle">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</nav>

    <!-- Contenido del Blog -->
    <section class="blog-section">
        <div class="container">
            <!-- Header -->
            <div class="blog-header">
                <span class="section-tag">Blog Escolar</span>
                <h1>Noticias y Eventos</h1>
                <p>Mantente informado sobre todas las actividades, concursos, premios y eventos de nuestra institución</p>
            </div>

            <!-- Búsqueda -->
            <div class="blog-search">
                <input type="text" id="searchInput" placeholder="Buscar noticias, eventos, concursos...">
                <i class="bi bi-search"></i>
            </div>

            <!-- Filtros -->
            <div class="blog-filters">
                <span class="filter-label">
                    <i class="bi bi-funnel-fill"></i> Filtrar por:
                </span>
                <button class="filter-btn active" data-filter="todos">
                    <i class="bi bi-grid-fill"></i> Todos
                </button>
                <button class="filter-btn" data-filter="concursos">
                    <i class="bi bi-megaphone-fill"></i> Concursos
                </button>
                <button class="filter-btn" data-filter="premios">
                    <i class="bi bi-trophy-fill"></i> Premios
                </button>
                <button class="filter-btn" data-filter="academico">
                    <i class="bi bi-book-fill"></i> Académico
                </button>
                <button class="filter-btn" data-filter="eventos">
                    <i class="bi bi-calendar-event-fill"></i> Eventos
                </button>
                <button class="filter-btn" data-filter="comunidad">
                    <i class="bi bi-people-fill"></i> Comunidad
                </button>
            </div>

            <!-- Grid de Noticias -->
            <div class="blog-grid" id="blogGrid">
                <!-- Las noticias se generarán con JavaScript -->
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="blog-modal" id="blogModal">
        <div class="modal-overlay"></div>
        <div class="modal-content">
            <button class="modal-close" id="modalClose">
                <i class="bi bi-x-lg"></i>
            </button>
            <div id="modalBody">
                <!-- Contenido dinámico generado por JavaScript -->
            </div>
        </div>
    </div>

    <footer class="footer" id="footer">
  <div class="container">
    <div class="footer-content">
      
      <!-- COLUMNA 1 -->
      <div class="footer-column">
        <div class="footer-logo">
          <div class="logo-icon">
            <i class="bi bi-mortarboard-fill"></i>
          </div>
          <span>Colegio Adonai</span>
        </div>
        <p>Formando vidas con propósito desde 2009</p>

        <h4>Ubícanos</h4>
        <div class="footer-map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.946333083066!2d-77.0428!3d-12.0464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c4413d67e1%3A0x2b2b7a51a1cb68e7!2sLima%2C%20Per%C3%BA!5e0!3m2!1ses!2spe!4v1695678901234!5m2!1ses!2spe"
            loading="lazy"
            allowfullscreen=""
          ></iframe>
        </div>
      </div>

      <!-- COLUMNA 2 -->
      <div class="footer-column">
        <h4>Contacto</h4>
        <p><i class="bi bi-geo-alt-fill"></i> Av. Principal 123, Lima</p>
        <p><i class="bi bi-telephone-fill"></i> (01) 234-5678</p>
        <p><i class="bi bi-envelope-fill"></i> info@colegioadonai.edu.pe</p>
      </div>

      <!-- COLUMNA 3 -->
      <div class="footer-column">
        <h4>Enlaces</h4>
        <a href="/#nosotros"><i class="bi bi-chevron-right"></i> Sobre Nosotros</a>
        <a href="/#cursos"><i class="bi bi-chevron-right"></i> Cursos</a>
        <a href="/blog"><i class="bi bi-chevron-right"></i> Blog</a>
        <a href="/#visita"><i class="bi bi-chevron-right"></i> Visita Guiada</a>
      </div>

      <!-- COLUMNA 4 -->
      <div class="footer-column">
        <h4>Síguenos</h4>
        <div class="social-links">
          <a href="https://www.facebook.com/colegiocristiano.mgsa?locale=es_LA" target="_blank" class="social-icon" aria-label="Facebook">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="#" class="social-icon" aria-label="Instagram">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="#" class="social-icon" aria-label="YouTube">
            <i class="bi bi-youtube"></i>
          </a>
          <a href="#" class="social-icon" aria-label="Twitter">
            <i class="bi bi-twitter"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="text-center footer-bottom">
      <p>&copy; 2025 Colegio Adonai. Todos los derechos reservados.</p>
    </div>
  </div>
</footer>


    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/51999999999" class="whatsapp-float" target="_blank" aria-label="Contactar por WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- JavaScript -->
    <script src="resources/js/script.js"></script>
    <script src="resources/js/blog.js"></script>
</body>
</html>