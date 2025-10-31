<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talleres - Colegio Adonai</title>
    <!-- CSS y JS con Vite -->
    @vite(['resources/css/style.css', 'resources/js/script.js'])
    @vite(['resources/css/talleres.css', 'resources/js/talleres.js'])
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://unpkg.com/lucide@latest"></script>
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

    <!-- Contenido de talleres -->
    <br><br>
    <section class="workshops-section" id="talleres">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">TALLERES EXTRACURRICULARES</h2>
                <p class="section-sub">Espacios formativos para potenciar talentos. Filtra por categoría o haz clic en "Más info".</p>
            </div>

            <!-- Filtros -->
            <div class="filter-row" role="tablist" aria-label="Filtrar talleres">
                <button class="filter-chip active" data-filter="all" role="tab">Todos</button>
                <button class="filter-chip" data-filter="musica" role="tab">Música</button>
                <button class="filter-chip" data-filter="deportes" role="tab">Deportes</button>
                <button class="filter-chip" data-filter="arte" role="tab">Arte</button>
                <button class="filter-chip" data-filter="robotica" role="tab">Robótica</button>
                <button class="filter-chip" data-filter="teatro" role="tab">Teatro</button>
                <button class="filter-chip" data-filter="oratoria" role="tab">Oratoria</button>
            </div>

            <!-- Cuadrícula de talleres -->
            <div class="workshops-grid" aria-live="polite">
                
                <!-- Taller de Música -->
                <article class="workshop-card" data-category="musica" 
                         data-title="Taller de Música" 
                         data-image="/img/taller-musica.jpg"
                         data-desc="Clases de piano, guitarra y canto. Desarrollo del oído y ensambles."
                         data-instructor="Prof. Ana López"
                         data-schedule="Sábados 9:00 - 11:00"
                         data-age="6-14 años">
                    <div class="workshop-image">
                        <img src="/img/taller-musica.jpg" alt="Taller de Música">
                    </div>
                    <div class="workshop-body">
                        <div class="workshop-meta">
                            <small class="workshop-tag">Música</small>
                        </div>
                        <h3 class="workshop-title">Taller de Música</h3>
                        <p class="workshop-excerpt">Piano, guitarra, canto — participación en ensambles y presentaciones.</p>
                        <div class="workshop-actions">
                            <button class="btn btn-outline btn-more">Más info</button>
                            <a class="btn btn-primary" href="https://wa.me/51999999999?text=Estoy%20interesado%20en%20Taller%20de%20Música" target="_blank" rel="noopener">Inscribirme</a>
                        </div>
                    </div>
                </article>

                <!-- Taller de Deportes -->
                <article class="workshop-card" data-category="deportes" 
                         data-title="Taller de Deportes" 
                         data-image="/img/taller-deportes.jpg" 
                         data-desc="Fútbol, vóley, básquet. Trabajo en equipo y disciplina." 
                         data-instructor="Prof. Carlos Mendoza" 
                         data-schedule="Lun y Mié 16:00 - 17:30" 
                         data-age="8-16 años">
                    <div class="workshop-image">
                        <img src="/img/taller-deportes.jpg" alt="Taller de Deportes">
                    </div>
                    <div class="workshop-body">
                        <div class="workshop-meta">
                            <small class="workshop-tag">Deportes</small>
                        </div>
                        <h3 class="workshop-title">Taller de Deportes</h3>
                        <p class="workshop-excerpt">Promovemos disciplina y salud con entrenadores certificados.</p>
                        <div class="workshop-actions">
                            <button class="btn btn-outline btn-more">Más info</button>
                            <a class="btn btn-primary" href="https://wa.me/51999999999?text=Estoy%20interesado%20en%20Taller%20de%20Deportes" target="_blank" rel="noopener">Inscribirme</a>
                        </div>
                    </div>
                </article>

                <!-- Taller de Arte -->
                <article class="workshop-card" data-category="arte"
                         data-title="Taller de Arte"
                         data-image="/img/taller-arte.jpg"
                         data-desc="Pintura, dibujo y manualidades para estimular la creatividad."
                         data-instructor="Prof. Mariana Ramos"
                         data-schedule="Martes y Jueves 15:00 - 17:00"
                         data-age="6-12 años">
                    <div class="workshop-image">
                        <img src="/img/taller-arte.jpg" alt="Taller de Arte">
                    </div>
                    <div class="workshop-body">
                        <div class="workshop-meta">
                            <small class="workshop-tag">Arte</small>
                        </div>
                        <h3 class="workshop-title">Taller de Arte</h3>
                        <p class="workshop-excerpt">Expresión plástica y creatividad con diferentes técnicas.</p>
                        <div class="workshop-actions">
                            <button class="btn btn-outline btn-more">Más info</button>
                            <a class="btn btn-primary" href="https://wa.me/51999999999?text=Estoy%20interesado%20en%20Taller%20de%20Arte" target="_blank" rel="noopener">Inscribirme</a>
                        </div>
                    </div>
                </article>

                <!-- Taller de Robótica -->
                <article class="workshop-card" data-category="robotica"
                         data-title="Taller de Robótica"
                         data-image="/img/taller-robotica.jpg"
                         data-desc="Aprende electrónica básica y programación construyendo robots."
                         data-instructor="Ing. Luis Torres"
                         data-schedule="Sábados 10:00 - 12:00"
                         data-age="10-16 años">
                    <div class="workshop-image">
                        <img src="/img/taller-robotica.jpg" alt="Taller de Robótica">
                    </div>
                    <div class="workshop-body">
                        <div class="workshop-meta">
                            <small class="workshop-tag">Robótica</small>
                        </div>
                        <h3 class="workshop-title">Taller de Robótica</h3>
                        <p class="workshop-excerpt">Construye y programa robots con kits educativos.</p>
                        <div class="workshop-actions">
                            <button class="btn btn-outline btn-more">Más info</button>
                            <a class="btn btn-primary" href="https://wa.me/51999999999?text=Estoy%20interesado%20en%20Taller%20de%20Robótica" target="_blank" rel="noopener">Inscribirme</a>
                        </div>
                    </div>
                </article>

                <!-- Taller de Teatro -->
                <article class="workshop-card" data-category="teatro"
                         data-title="Taller de Teatro"
                         data-image="/img/taller-teatro.jpg"
                         data-desc="Desarrolla la expresión corporal, la confianza y el trabajo en grupo."
                         data-instructor="Prof. Andrea Pérez"
                         data-schedule="Viernes 16:00 - 18:00"
                         data-age="8-15 años">
                    <div class="workshop-image">
                        <img src="/img/taller-teatro.jpg" alt="Taller de Teatro">
                    </div>
                    <div class="workshop-body">
                        <div class="workshop-meta">
                            <small class="workshop-tag">Teatro</small>
                        </div>
                        <h3 class="workshop-title">Taller de Teatro</h3>
                        <p class="workshop-excerpt">Improvisación, actuación y confianza en escena.</p>
                        <div class="workshop-actions">
                            <button class="btn btn-outline btn-more">Más info</button>
                            <a class="btn btn-primary" href="https://wa.me/51999999999?text=Estoy%20interesado%20en%20Taller%20de%20Teatro" target="_blank" rel="noopener">Inscribirme</a>
                        </div>
                    </div>
                </article>

                <!-- Taller de Oratoria -->
                <article class="workshop-card" data-category="oratoria"
                         data-title="Taller de Oratoria"
                         data-image="/img/taller-oratoria.jpg"
                         data-desc="Aprende a hablar en público con seguridad y persuasión."
                         data-instructor="Prof. José Ramírez"
                         data-schedule="Sábados 14:00 - 16:00"
                         data-age="12-17 años">
                    <div class="workshop-image">
                        <img src="/img/taller-oratoria.jpg" alt="Taller de Oratoria">
                    </div>
                    <div class="workshop-body">
                        <div class="workshop-meta">
                            <small class="workshop-tag">Oratoria</small>
                        </div>
                        <h3 class="workshop-title">Taller de Oratoria</h3>
                        <p class="workshop-excerpt">Expresión oral, retórica y confianza frente al público.</p>
                        <div class="workshop-actions">
                            <button class="btn btn-outline btn-more">Más info</button>
                            <a class="btn btn-primary" href="https://wa.me/51999999999?text=Estoy%20interesado%20en%20Taller%20de%20Oratoria" target="_blank" rel="noopener">Inscribirme</a>
                        </div>
                    </div>
                </article>

            </div>
        </div>

        <!-- Modal de detalle -->
        <div id="workshop-modal" class="modal" aria-hidden="true" role="dialog" aria-modal="true">
            <div class="modal-backdrop" tabindex="-1" data-close></div>
            <div class="modal-panel" role="document">
                <button class="modal-close" aria-label="Cerrar" data-close>&times;</button>
                <div class="modal-grid">
                    <div class="modal-image">
                        <img src="" alt="">
                    </div>
                    <div class="modal-content">
                        <h3 id="modal-title"></h3>
                        <p id="modal-desc"></p>
                        <ul class="modal-info">
                            <li><strong>Instructor:</strong> <span id="modal-instructor"></span></li>
                            <li><strong>Horario:</strong> <span id="modal-schedule"></span></li>
                            <li><strong>Edad:</strong> <span id="modal-age"></span></li>
                        </ul>
                        <div class="modal-actions">
                            <a id="modal-join" class="btn btn-primary" href="#" target="_blank" rel="noopener">Inscribirme</a>
                            <button class="btn btn-outline" data-close>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
</body>
</html>