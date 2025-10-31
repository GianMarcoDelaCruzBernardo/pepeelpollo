// ====================================
// SISTEMA DE ANIMACIONES - COLEGIO ADONAI
// JavaScript con efectos y animaciones profesionales
// ====================================
import '../css/style.css';
import '../css/docentes.css';
import '../css/cursos.css';
import '../css/talleres.css';

class AdonaiWebsite {
    constructor() {
        this.navbar = document.getElementById('navbar');
        this.navMenu = document.getElementById('nav-menu');
        this.menuToggle = document.getElementById('menu-toggle');
        this.btnIntranet = document.querySelector('.btn-intranet');
        this.modalIntranet = document.getElementById('modal-intranet');
        this.modalClose = document.getElementById('modal-close');
        this.loginForm = document.getElementById('login-form');
        
        this.init();
    }

    init() {
        console.log('🎓 Iniciando Colegio Adonai...');
        
        this.setupNavigation();
        this.setupScrollEffects();
        this.setupAnimations();
        this.setupModal();
        this.setupParallax();
        this.setupCounters();
        this.setupCarousel();
        this.setupSmoothScroll();
        
        console.log('✅ Sistema inicializado correctamente');
    }

    // ====================================
    // NAVEGACIÓN Y MENÚ
    // ====================================
    setupNavigation() {
        // Cambio de estilo del navbar al hacer scroll
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                this.navbar.classList.add('scrolled');
            } else {
                this.navbar.classList.remove('scrolled');
            }
        });

        // Toggle del menú móvil
        if (this.menuToggle) {
            this.menuToggle.addEventListener('click', () => {
                this.navMenu.classList.toggle('active');
                this.animateMenuToggle();
            });
        }

        // Cerrar menú al hacer clic en un link
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                this.navMenu.classList.remove('active');
            });
        });

        // Resaltar link activo según sección visible
        this.highlightActiveSection();
    }

    animateMenuToggle() {
        const spans = this.menuToggle.querySelectorAll('span');
        const isActive = this.navMenu.classList.contains('active');
        
        if (isActive) {
            spans[0].style.transform = 'rotate(45deg) translateY(10px)';
            spans[1].style.opacity = '0';
            spans[2].style.transform = 'rotate(-45deg) translateY(-10px)';
        } else {
            spans[0].style.transform = 'none';
            spans[1].style.opacity = '1';
            spans[2].style.transform = 'none';
        }
    }

    highlightActiveSection() {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (window.scrollY >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
    }

    // ====================================
    // EFECTOS DE SCROLL
    // ====================================
    setupScrollEffects() {
        // Intersection Observer para animaciones al hacer scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    
                    // Animar elementos hijos con delay
                    const children = entry.target.querySelectorAll('.animate-child');
                    children.forEach((child, index) => {
                        setTimeout(() => {
                            child.classList.add('animated');
                        }, index * 100);
                    });
                }
            });
        }, observerOptions);

        // Observar todos los elementos con clase animate-on-scroll
        const animatedElements = document.querySelectorAll('.about-card, .course-card, .teacher-card, .blog-card, .workshop-item');
        animatedElements.forEach(el => {
            el.classList.add('animate-on-scroll');
            observer.observe(el);
        });
    }

    // ====================================
    // ANIMACIONES PERSONALIZADAS
    // ====================================
    setupAnimations() {
        // Animación de las palabras del hero
        this.animateHeroWords();
        
        // Efecto de typing en textos específicos
        this.setupTypingEffect();
        
        // Animación de las tarjetas al hover
        this.setupCardAnimations();
        
        // Efecto parallax en imágenes
        this.setupImageParallax();
    }

    animateHeroWords() {
        const words = document.querySelectorAll('.hero-title .word');
        words.forEach((word, index) => {
            word.style.animationDelay = `${index * 0.2}s`;
        });
    }

    setupTypingEffect() {
        const typingElements = document.querySelectorAll('[data-typing]');
        
        typingElements.forEach(element => {
            const text = element.textContent;
            element.textContent = '';
            element.style.opacity = '1';
            
            let index = 0;
            const interval = setInterval(() => {
                if (index < text.length) {
                    element.textContent += text.charAt(index);
                    index++;
                } else {
                    clearInterval(interval);
                }
            }, 50);
        });
    }

    setupCardAnimations() {
        const cards = document.querySelectorAll('.about-card, .course-card, .teacher-card');
        
        cards.forEach(card => {
            card.addEventListener('mouseenter', (e) => {
                this.createSparkles(e.currentTarget);
            });
            
            card.addEventListener('mousemove', (e) => {
                this.tiltCard(e);
            });
            
            card.addEventListener('mouseleave', (e) => {
                this.resetCard(e.currentTarget);
            });
        });
    }

    createSparkles(element) {
        const sparkleCount = 5;
        
        for (let i = 0; i < sparkleCount; i++) {
            const sparkle = document.createElement('div');
            sparkle.className = 'sparkle';
            sparkle.style.cssText = `
                position: absolute;
                width: 5px;
                height: 5px;
                background: gold;
                border-radius: 50%;
                pointer-events: none;
                animation: sparkleFloat 1s ease-out forwards;
                left: ${Math.random() * 100}%;
                top: ${Math.random() * 100}%;
            `;
            
            element.appendChild(sparkle);
            
            setTimeout(() => {
                sparkle.remove();
            }, 1000);
        }
    }

    tiltCard(e) {
        const card = e.currentTarget;
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const rotateX = (y - centerY) / 10;
        const rotateY = (centerX - x) / 10;
        
        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
    }

    resetCard(card) {
        card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale(1)';
    }

    setupImageParallax() {
        const images = document.querySelectorAll('.course-image, .blog-image, .teacher-image');
        
        images.forEach(img => {
            img.style.transition = 'transform 0.3s ease';
            
            img.addEventListener('mousemove', (e) => {
                const rect = img.getBoundingClientRect();
                const x = ((e.clientX - rect.left) / rect.width - 0.5) * 20;
                const y = ((e.clientY - rect.top) / rect.height - 0.5) * 20;
                
                img.style.transform = `translate(${x}px, ${y}px) scale(1.1)`;
            });
            
            img.addEventListener('mouseleave', () => {
                img.style.transform = 'translate(0, 0) scale(1)';
            });
        });
    }

    // ====================================
    // MODAL DE INTRANET
    // ====================================
    setupModal() {
        if (!this.btnIntranet || !this.modalIntranet) return;

        // Abrir modal
        this.btnIntranet.addEventListener('click', () => {
            this.openModal();
        });

        // Cerrar modal
        if (this.modalClose) {
            this.modalClose.addEventListener('click', () => {
                this.closeModal();
            });
        }

        // Cerrar modal al hacer clic fuera
        this.modalIntranet.addEventListener('click', (e) => {
            if (e.target === this.modalIntranet) {
                this.closeModal();
            }
        });

        // Cerrar con tecla ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && this.modalIntranet.classList.contains('active')) {
                this.closeModal();
            }
        });

        // Manejar envío del formulario
        if (this.loginForm) {
            this.loginForm.addEventListener('submit', (e) => {
                e.preventDefault();
                this.handleLogin();
            });
        }
    }

    openModal() {
        this.modalIntranet.classList.add('active');
        document.body.style.overflow = 'hidden';
        
        // Animar campos del formulario
        const formGroups = this.modalIntranet.querySelectorAll('.form-group');
        formGroups.forEach((group, index) => {
            setTimeout(() => {
                group.style.opacity = '0';
                group.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    group.style.transition = 'all 0.5s ease';
                    group.style.opacity = '1';
                    group.style.transform = 'translateY(0)';
                }, 50);
            }, index * 100);
        });
    }

    closeModal() {
        this.modalIntranet.classList.remove('active');
        document.body.style.overflow = '';
    }

    handleLogin() {
        const button = this.loginForm.querySelector('.btn-login');
        const originalText = button.textContent;
        
        // Animación de carga
        button.textContent = 'Iniciando sesión...';
        button.disabled = true;
        
        // Simular proceso de login
        setTimeout(() => {
            this.showNotification('¡Bienvenido! Redirigiendo...', 'success');
            
            setTimeout(() => {
                button.textContent = originalText;
                button.disabled = false;
                this.closeModal();
            }, 1500);
        }, 2000);
    }

    showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.textContent = message;
        notification.style.cssText = `
            position: fixed;
            top: 100px;
            right: 20px;
            background: ${type === 'success' ? '#4CAF50' : '#FFD700'};
            color: white;
            padding: 1rem 2rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            z-index: 3000;
            animation: slideInRight 0.5s ease;
        `;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.style.animation = 'slideOutRight 0.5s ease';
            setTimeout(() => {
                notification.remove();
            }, 500);
        }, 3000);
    }

    // ====================================
    // EFECTO PARALLAX
    // ====================================
    setupParallax() {
        window.addEventListener('scroll', () => {
            const scrolled = window.scrollY;
            
            // Parallax en el hero
            const heroContent = document.querySelector('.hero-content');
            if (heroContent) {
                heroContent.style.transform = `translateY(${scrolled * 0.5}px)`;
                heroContent.style.opacity = 1 - (scrolled / 800);
            }
            
            // Parallax en elementos específicos
            const parallaxElements = document.querySelectorAll('[data-parallax]');
            parallaxElements.forEach(element => {
                const speed = element.dataset.parallax || 0.5;
                const yPos = -(scrolled * speed);
                element.style.transform = `translateY(${yPos}px)`;
            });
        });
    }

    // ====================================
    // CONTADORES ANIMADOS
    // ====================================
    setupCounters() {
        const counters = document.querySelectorAll('.stat-number');
        
        const animateCounter = (counter) => {
            const target = parseInt(counter.getAttribute('data-target'));
            const suffix = counter.getAttribute('data-suffix') || '';
            const duration = 2000;
            const increment = target / (duration / 16);
            let current = 0;
            
            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current) + suffix;
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target + suffix;
                }
            };
            
            updateCounter();
        };
        
        // Observer para iniciar animación cuando sea visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.dataset.animated) {
                    animateCounter(entry.target);
                    entry.target.dataset.animated = 'true';
                }
            });
        }, { threshold: 0.5 });
        
        counters.forEach(counter => observer.observe(counter));
    }

    // ====================================
    // CARRUSEL DE TALLERES
    // ====================================
    setupCarousel() {
        const carousel = document.querySelector('.workshops-carousel');
        if (!carousel) return;
        
        let isDown = false;
        let startX;
        let scrollLeft;
        
        carousel.addEventListener('mousedown', (e) => {
            isDown = true;
            carousel.style.cursor = 'grabbing';
            startX = e.pageX - carousel.offsetLeft;
            scrollLeft = carousel.scrollLeft;
        });
        
        carousel.addEventListener('mouseleave', () => {
            isDown = false;
            carousel.style.cursor = 'grab';
        });
        
        carousel.addEventListener('mouseup', () => {
            isDown = false;
            carousel.style.cursor = 'grab';
        });
        
        carousel.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - carousel.offsetLeft;
            const walk = (x - startX) * 2;
            carousel.scrollLeft = scrollLeft - walk;
        });
        
        
    }

    // ====================================
    // SMOOTH SCROLL
    // ====================================
    setupSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                
                if (target) {
                    const offsetTop = target.offsetTop - 80;
                    
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // ====================================
    // EFECTOS DE PARTÍCULAS
    // ====================================
    createParticles() {
        const hero = document.querySelector('.hero');
        if (!hero) return;
        
        const particlesContainer = document.createElement('div');
        particlesContainer.className = 'particles-container';
        particlesContainer.style.cssText = `
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        `;
        
        hero.appendChild(particlesContainer);
        
        for (let i = 0; i < 50; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.cssText = `
                position: absolute;
                width: ${Math.random() * 5 + 2}px;
                height: ${Math.random() * 5 + 2}px;
                background: rgba(255, 215, 0, ${Math.random() * 0.5 + 0.2});
                border-radius: 50%;
                left: ${Math.random() * 100}%;
                top: ${Math.random() * 100}%;
                animation: float ${Math.random() * 10 + 10}s linear infinite;
                animation-delay: ${Math.random() * 5}s;
            `;
            
            particlesContainer.appendChild(particle);
        }
    }
}

// ====================================
// ANIMACIONES CSS ADICIONALES
// ====================================
const style = document.createElement('style');
style.textContent = `
    @keyframes sparkleFloat {
        0% {
            transform: translateY(0) scale(0);
            opacity: 1;
        }
        100% {
            transform: translateY(-50px) scale(1);
            opacity: 0;
        }
    }
    
    @keyframes float {
        0%, 100% {
            transform: translateY(0) translateX(0);
        }
        50% {
            transform: translateY(-20px) translateX(10px);
        }
    }
    
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideOutRight {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }
    
    .workshops-carousel {
        cursor: grab;
        user-select: none;
    }
    
    .workshops-carousel:active {
        cursor: grabbing;
    }
`;
document.head.appendChild(style);

// ====================================
// INICIALIZACIÓN
// ====================================
document.addEventListener('DOMContentLoaded', () => {
    const website = new AdonaiWebsite();
    
    // Crear partículas decorativas
    website.createParticles();
    
    // Easter egg: Konami Code
    let konamiCode = [];
    const konamiPattern = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a'];
    
    document.addEventListener('keydown', (e) => {
        konamiCode.push(e.key);
        konamiCode = konamiCode.slice(-10);
        
        if (konamiCode.join(',') === konamiPattern.join(',')) {
            website.showNotification('🎉 ¡Código secreto activado! 🎓', 'success');
            document.body.style.animation = 'rainbow 5s linear infinite';
        }
    });
    
    // Contadores animados
    const counters = document.querySelectorAll(".stat-number");
    const speed = 200;

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute("data-target");
            const count = +counter.innerText.replace(/\D/g, "") || 0;

            const increment = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = counter.getAttribute("data-target") + (counter.getAttribute("data-suffix") || "");
            }
        };

        updateCount();
    });
    
    console.log('🎓 Colegio Adonai - Sistema completamente cargado');
});

// ====================================
// PERFORMANCE OPTIMIZATION
// ====================================
// Lazy loading de imágenes
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                }
                imageObserver.unobserve(img);
            }
        });
    });
    
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
}

// Preload de recursos críticos
const preloadResources = () => {
    const criticalResources = [
        // Agregar rutas de imágenes críticas aquí
    ];
    
    criticalResources.forEach(resource => {
        const link = document.createElement('link');
        link.rel = 'preload';
        link.as = 'image';
        link.href = resource;
        document.head.appendChild(link);
    });
};

preloadResources();