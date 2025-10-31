<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docentes - Colegio Adonai</title>
    <!-- CSS y JS con Vite -->
    @vite(['resources/css/style.css', 'resources/js/script.js'])
    @vite(['resources/css/docentes.css', 'resources/js/docentes.js'])
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

    <!-- Sección de Docentes -->
    <section class="teachers-section" id="docentes">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Nuestro Equipo</span>
                <h2 class="section-title">Docentes Calificados</h2>
                <p class="section-subtitle">Profesionales comprometidos con la excelencia educativa y el desarrollo integral de nuestros estudiantes</p>
            </div>

            <div class="teachers-grid">
                
                <!-- Docente 1 -->
                <div class="teacher-card">
                    <div class="teacher-image">
                        <img src="/img/profesorEjemplo2.jpg" alt="María Fernández">
                        <div class="teacher-overlay">
                            <button class="btn-contact" data-email="maria.fernandez@colegioadonai.edu.pe">
                                <i class="bi bi-envelope-fill"></i> Contactar
                            </button>
                        </div>
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">María Fernández López</h4>
                        <p class="teacher-specialty">Licenciada en Educación - Comunicación</p>
                        <div class="teacher-details">
                            <div class="detail-item">
                                <i class="bi bi-award-fill"></i>
                                <span>12 años de experiencia</span>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-mortarboard-fill"></i>
                                <span>Maestría en Lingüística</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 2 -->
                <div class="teacher-card">
                    <div class="teacher-image">
                        <img src="/img/profesorEjemplo1.jpg" alt="Carlos Mendoza">
                        <div class="teacher-overlay">
                            <button class="btn-contact" data-email="carlos.mendoza@colegioadonai.edu.pe">
                                <i class="bi bi-envelope-fill"></i> Contactar
                            </button>
                        </div>
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">Carlos Mendoza Ruiz</h4>
                        <p class="teacher-specialty">Licenciado en Matemática</p>
                        <div class="teacher-details">
                            <div class="detail-item">
                                <i class="bi bi-award-fill"></i>
                                <span>15 años de experiencia</span>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-mortarboard-fill"></i>
                                <span>Especialista en Álgebra</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 3 -->
                <div class="teacher-card">
                    <div class="teacher-image">
                        <img src="/img/profesorEjemplo3.jpg" alt="Ana García">
                        <div class="teacher-overlay">
                            <button class="btn-contact" data-email="ana.garcia@colegioadonai.edu.pe">
                                <i class="bi bi-envelope-fill"></i> Contactar
                            </button>
                        </div>
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">Ana García Torres</h4>
                        <p class="teacher-specialty">Licenciada en Ciencias Sociales</p>
                        <div class="teacher-details">
                            <div class="detail-item">
                                <i class="bi bi-award-fill"></i>
                                <span>10 años de experiencia</span>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-mortarboard-fill"></i>
                                <span>Maestría en Historia</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 4 -->
                <div class="teacher-card">
                    <div class="teacher-image">
                        <img src="/img/profesorEjemplo5.jpg" alt="Luis Ramírez">
                        <div class="teacher-overlay">
                            <button class="btn-contact" data-email="luis.ramirez@colegioadonai.edu.pe">
                                <i class="bi bi-envelope-fill"></i> Contactar
                            </button>
                        </div>
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">Luis Ramírez Castro</h4>
                        <p class="teacher-specialty">Ingeniero - Ciencia y Tecnología</p>
                        <div class="teacher-details">
                            <div class="detail-item">
                                <i class="bi bi-award-fill"></i>
                                <span>8 años de experiencia</span>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-mortarboard-fill"></i>
                                <span>Especialista en Física</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 5 -->
                <div class="teacher-card">
                    <div class="teacher-image">
                        <img src="/img/profesorEjemplo4.jpg" alt="Patricia Sánchez">
                        <div class="teacher-overlay">
                            <button class="btn-contact" data-email="patricia.sanchez@colegioadonai.edu.pe">
                                <i class="bi bi-envelope-fill"></i> Contactar
                            </button>
                        </div>
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">Patricia Sánchez Vega</h4>
                        <p class="teacher-specialty">Licenciada en Idiomas - Inglés</p>
                        <div class="teacher-details">
                            <div class="detail-item">
                                <i class="bi bi-award-fill"></i>
                                <span>14 años de experiencia</span>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-mortarboard-fill"></i>
                                <span>Certificación TOEFL</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 6 -->
                <div class="teacher-card">
                    <div class="teacher-image">
                        <img src="/img/docente6.jpg" alt="Roberto Flores">
                        <div class="teacher-overlay">
                            <button class="btn-contact" data-email="roberto.flores@colegioadonai.edu.pe">
                                <i class="bi bi-envelope-fill"></i> Contactar
                            </button>
                        </div>
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">Roberto Flores Díaz</h4>
                        <p class="teacher-specialty">Psicólogo - Desarrollo Personal</p>
                        <div class="teacher-details">
                            <div class="detail-item">
                                <i class="bi bi-award-fill"></i>
                                <span>11 años de experiencia</span>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-mortarboard-fill"></i>
                                <span>Especialista en Orientación</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 7 -->
                <div class="teacher-card">
                    <div class="teacher-image">
                        <img src="/img/docente7.jpg" alt="Elena Morales">
                        <div class="teacher-overlay">
                            <button class="btn-contact" data-email="elena.morales@colegioadonai.edu.pe">
                                <i class="bi bi-envelope-fill"></i> Contactar
                            </button>
                        </div>
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">Elena Morales Pérez</h4>
                        <p class="teacher-specialty">Licenciada en Educación Física</p>
                        <div class="teacher-details">
                            <div class="detail-item">
                                <i class="bi bi-award-fill"></i>
                                <span>9 años de experiencia</span>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-mortarboard-fill"></i>
                                <span>Entrenadora Deportiva</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 8 -->
                <div class="teacher-card">
                    <div class="teacher-image">
                        <img src="/img/docente8.jpg" alt="Miguel Ángel Silva">
                        <div class="teacher-overlay">
                            <button class="btn-contact" data-email="miguel.silva@colegioadonai.edu.pe">
                                <i class="bi bi-envelope-fill"></i> Contactar
                            </button>
                        </div>
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">Miguel Ángel Silva</h4>
                        <p class="teacher-specialty">Licenciado en Arte y Cultura</p>
                        <div class="teacher-details">
                            <div class="detail-item">
                                <i class="bi bi-award-fill"></i>
                                <span>13 años de experiencia</span>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-mortarboard-fill"></i>
                                <span>Maestría en Bellas Artes</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 9 -->
                <div class="teacher-card">
                    <div class="teacher-image">
                        <img src="/img/docente9.jpg" alt="Carmen Rojas">
                        <div class="teacher-overlay">
                            <button class="btn-contact" data-email="carmen.rojas@colegioadonai.edu.pe">
                                <i class="bi bi-envelope-fill"></i> Contactar
                            </button>
                        </div>
                    </div>
                    <div class="teacher-info">
                        <h4 class="teacher-name">Carmen Rojas Herrera</h4>
                        <p class="teacher-specialty">Licenciada en Educación Religiosa</p>
                        <div class="teacher-details">
                            <div class="detail-item">
                                <i class="bi bi-award-fill"></i>
                                <span>16 años de experiencia</span>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-mortarboard-fill"></i>
                                <span>Teología Pastoral</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Modal de Contacto -->
    <div id="contact-modal" class="modal" aria-hidden="true">
        <div class="modal-backdrop"></div>
        <div class="modal-panel">
            <button class="modal-close">
                <i class="bi bi-x-lg"></i>
            </button>
            <div class="modal-content">
                <div class="modal-icon">
                    <i class="bi bi-envelope-heart-fill"></i>
                </div>
                <h3 class="modal-title">Contactar Docente</h3>
                <p class="modal-email" id="teacher-email"></p>
                <p class="modal-text">Puedes enviar un correo directamente o copiar la dirección para usarla en tu cliente de correo preferido.</p>
                <div class="modal-actions">
                    <a id="email-link" class="btn btn-primary" href="">
                        <i class="bi bi-send-fill"></i> Enviar Correo
                    </a>
                    <button class="btn btn-secondary" id="copy-email">
                        <i class="bi bi-clipboard-fill"></i> Copiar Email
                    </button>
                </div>
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
</body>
</html>