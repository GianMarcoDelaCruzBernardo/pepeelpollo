
    const places = [
    {
        icon: 'https://cdn-icons-png.flaticon.com/512/8026/8026006.png',
    title: 'Museo de Arte Moderno',
    description: 'Descubre una impresionante colección de arte contemporáneo con más de 500 obras de artistas nacionales e internacionales.',
    image: 'https://8117711.fs1.hubspotusercontent-na1.net/hubfs/8117711/Instalaciones-del-Colegio-y-Aprendizaje.png',
    gallery: [
    {image: 'https://8117711.fs1.hubspotusercontent-na1.net/hubfs/8117711/Instalaciones-del-Colegio-y-Aprendizaje.png', title: 'Sala Principal', description: 'El corazón del museo con obras maestras.' },
    {image: 'https://images.unsplash.com/photo-1541961017774-22349e4a1262?w=1200&h=800&fit=crop', title: 'Galería de Esculturas', description: 'Colección de esculturas modernas.' },
    {image: 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=1200&h=800&fit=crop', title: 'Exposición Temporal', description: 'Exposiciones rotativas de artistas emergentes.' }
    ],
    info: {horario: '9:00 AM - 6:00 PM', precio: '$15 USD', ubicacion: 'Centro Histórico' }
    },
    {
        icon: 'https://cdn-icons-png.flaticon.com/512/1598/1598431.png',
    title: 'Parque Botánico',
    description: 'Un oasis verde con más de 200 especies de plantas nativas, senderos naturales y espacios para contemplación.',
    image: 'https://static.casadomo.com/media/2019/12/projedomus-colegio-portugal-meinhas-patio-interior.png',
    gallery: [
    {image: 'https://static.casadomo.com/media/2019/12/projedomus-colegio-portugal-meinhas-patio-interior.png', title: 'Jardín Central', description: 'Patio interior con plantas tropicales.' },
    {image: 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=1200&h=800&fit=crop', title: 'Sendero Natural', description: 'Caminos entre árboles centenarios.' },
    {image: 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1200&h=800&fit=crop', title: 'Mirador del Bosque', description: 'Vista panorámica desde el punto más alto.' }
    ],
    info: {horario: '6:00 AM - 8:00 PM', precio: 'Gratis', ubicacion: 'Zona Norte' }
    },
    {
        icon: 'https://cdn-icons-png.flaticon.com/512/1047/1047461.png',
    title: 'Plaza Central',
    description: 'Un punto de encuentro lleno de historia, rodeado de arquitectura colonial, cafeterías y vida urbana.',
    image: 'https://images.unsplash.com/photo-1528909514045-2fa4ac7a08ba?w=1200&h=800&fit=crop',
    gallery: [
    {image: 'https://images.unsplash.com/photo-1534531688091-a458257992fa?w=1200&h=800&fit=crop', title: 'Fuente Principal', description: 'El punto más fotografiado de la plaza.' },
    {image: 'https://images.unsplash.com/photo-1552058544-f2b08422138a?w=1200&h=800&fit=crop', title: 'Calle de los Cafés', description: 'Ambiente cálido y aromas irresistibles.' },
    {image: 'https://images.unsplash.com/photo-1579446565308-427218a2d5ef?w=1200&h=800&fit=crop', title: 'Atardecer en la Plaza', description: 'Luces doradas que pintan los balcones.' }
    ],
    info: {horario: 'Todo el día', precio: 'Gratis', ubicacion: 'Centro Histórico' }
},
    {
        icon: 'https://cdn-icons-png.flaticon.com/512/2331/2331966.png',
    title: 'Acuario Marino',
    description: 'Sumérgete en el mundo submarino con especies exóticas, túneles de cristal y espectáculos acuáticos.',
    image: 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=1200&h=800&fit=crop',
    gallery: [
    {image: 'https://images.unsplash.com/photo-1556740749-887f6717d7e4?w=1200&h=800&fit=crop', title: 'Túnel Azul', description: 'Cientos de peces nadan sobre ti.' },
    {image: 'https://images.unsplash.com/photo-1562887280-9ceac2b7e45a?w=1200&h=800&fit=crop', title: 'Espectáculo Marino', description: 'Un show impresionante con delfines entrenados.' },
    {image: 'https://images.unsplash.com/photo-1570814739384-3e75a87b1b3e?w=1200&h=800&fit=crop', title: 'Corales Luminosos', description: 'Un ecosistema vibrante lleno de color.' }
    ],
    info: {horario: '10:00 AM - 7:00 PM', precio: '$20 USD', ubicacion: 'Costa Sur' }
},

    {
        icon: 'https://cdn-icons-png.flaticon.com/512/3448/3448339.png',
    title: 'Mirador del Cielo',
    description: 'Disfruta de las vistas más espectaculares desde la cima de la ciudad, ideal para observar estrellas y atardeceres.',
    image: 'https://images.unsplash.com/photo-1500534623283-312aade485b7?w=1200&h=800&fit=crop',
    gallery: [
    {image: 'https://images.unsplash.com/photo-1497493292307-31c376b6e479?w=1200&h=800&fit=crop', title: 'Cima del Mirador', description: 'Panorama 360° que corta la respiración.' },
    {image: 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=1200&h=800&fit=crop', title: 'Noche Estrellada', description: 'El lugar perfecto para observar el firmamento.' },
    {image: 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=1200&h=800&fit=crop', title: 'Atardecer Dorado', description: 'El cielo se tiñe de fuego al caer la tarde.' }
    ],
    info: {horario: '5:00 AM - 10:00 PM', precio: '$10 USD', ubicacion: 'Colina del Este' }
}

    ];

    // Estado
    let currentIndex = 0;
    let currentGalleryIndex = 0;

    // Elementos del DOM (serán inicializados luego de crear el DOM dinámico)
    const elements = { };

    // Genera las tarjetas en el DOM a partir del array places
    function createPlaceCards() {
    const grid = document.getElementById('placesGrid');
    grid.innerHTML = ''; // limpiar

    places.forEach((place, index) => {
        const card = document.createElement('article');
    card.className = 'place-card' + (index === 0 ? ' active' : '');
    card.setAttribute('data-index', index);
    card.setAttribute('tabindex', '0');
    card.innerHTML = `
    <img class="card-icon" src="${place.icon}" alt="${place.title} icono">
        <h3 class="card-title">${place.title}</h3>
        <p class="card-summary">${place.description}</p>
        `;
        // click y teclado
        card.addEventListener('click', () => goToPlace(index));
        card.addEventListener('keydown', (e) => { if (e.key === 'Enter' || e.key === ' ') goToPlace(index); });
        grid.appendChild(card);
    });

        // llenar referencia a las tarjetas
        elements.cards = document.querySelectorAll('.place-card');
}

        // Inicializa referencias DOM y eventos
        function initElements() {
            elements.icon = document.getElementById('currentIcon');
        elements.title = document.getElementById('currentTitle');
        elements.description = document.getElementById('currentDescription');
        elements.counter = document.getElementById('counter');
        elements.progressFill = document.getElementById('progressFill');
        elements.prevBtn = document.getElementById('prevBtn');
        elements.nextBtn = document.getElementById('nextBtn');
        elements.mainDisplay = document.getElementById('mainDisplay');
        elements.placeContent = document.getElementById('placeContent');

        elements.galleryBtn = document.getElementById('galleryBtn');
        elements.galleryModal = document.getElementById('galleryModal');
        elements.galleryImage = document.getElementById('galleryImage');
        elements.galleryCounter = document.getElementById('galleryCounter');
        elements.galleryClose = document.getElementById('galleryClose');
        elements.galleryPrev = document.getElementById('galleryPrev');
        elements.galleryNext = document.getElementById('galleryNext');
        elements.galleryTitle = document.getElementById('galleryTitle');
        elements.galleryDescription = document.getElementById('galleryDescription');

        // Eventos principales
        elements.nextBtn.addEventListener('click', nextPlace);
        elements.prevBtn.addEventListener('click', prevPlace);
        elements.galleryBtn.addEventListener('click', openGallery);
        elements.galleryClose.addEventListener('click', closeGallery);
        elements.galleryNext.addEventListener('click', nextGalleryImage);
        elements.galleryPrev.addEventListener('click', prevGalleryImage);

    // Cerrar galería al click fuera del contenido
    elements.galleryModal.addEventListener('click', (e) => {
        if (e.target === elements.galleryModal) closeGallery();
    });

    // Keyboard navigation global
    document.addEventListener('keydown', (e) => {
        if (elements.galleryModal.classList.contains('active')) {
            if (e.key === 'ArrowRight') nextGalleryImage();
        if (e.key === 'ArrowLeft') prevGalleryImage();
        if (e.key === 'Escape') closeGallery();
        } else {
            if (e.key === 'ArrowRight') nextPlace();
        if (e.key === 'ArrowLeft') prevPlace();
        }
    });
}

        // Actualiza el display principal (título, descripción, fondo, progreso y tarjetas activas)
        function updateDisplay() {
    const place = places[currentIndex];

        // Animación de salida
        elements.placeContent.classList.add('changing');

    setTimeout(() => {
            elements.icon.src = place.icon;
        elements.icon.alt = `${place.title} icono`;
        elements.title.textContent = place.title;
        elements.description.textContent = place.description;
        elements.counter.textContent = `${currentIndex + 1} de ${places.length}`;
        elements.mainDisplay.style.backgroundImage = `url('${place.image}')`;
        // Animación de entrada
        elements.placeContent.classList.remove('changing');
    }, 180);

        // progreso
        const progress = ((currentIndex + 1) / places.length) * 100;
        elements.progressFill.style.width = `${progress}%`;

    // actualizar tarjetas activas
    elements.cards.forEach((card, idx) => {
            card.classList.toggle('active', idx === currentIndex);
    });
}

        // Navegación entre lugares
        function goToPlace(index) {
    if (index === currentIndex) return;
        currentIndex = (index + places.length) % places.length;
        // reset galería cuando cambie de lugar
        currentGalleryIndex = 0;
        updateDisplay();
}

        function nextPlace() {
            currentIndex = (currentIndex + 1) % places.length;
        currentGalleryIndex = 0;
        updateDisplay();
}
        function prevPlace() {
            currentIndex = (currentIndex - 1 + places.length) % places.length;
        currentGalleryIndex = 0;
        updateDisplay();
}

        // Galería
        function openGallery() {
            currentGalleryIndex = 0;
        updateGalleryImage();
        elements.galleryModal.classList.add('active');
        elements.galleryModal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
}
        function closeGallery() {
            elements.galleryModal.classList.remove('active');
        elements.galleryModal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
}
        function updateGalleryImage() {
    const gallery = places[currentIndex].gallery || [];
        if (!gallery.length) return;
        const currentImage = gallery[currentGalleryIndex];
        elements.galleryImage.src = currentImage.image;
        elements.galleryImage.alt = currentImage.title || 'Galería';
        elements.galleryCounter.textContent = `${currentGalleryIndex + 1} de ${gallery.length}`;
        elements.galleryTitle.textContent = currentImage.title || '';
        elements.galleryDescription.textContent = currentImage.description || '';
}
        function nextGalleryImage() {
    const gallery = places[currentIndex].gallery || [];
        if (!gallery.length) return;
        currentGalleryIndex = (currentGalleryIndex + 1) % gallery.length;
        updateGalleryImage();
}
        function prevGalleryImage() {
    const gallery = places[currentIndex].gallery || [];
        if (!gallery.length) return;
        currentGalleryIndex = (currentGalleryIndex - 1 + gallery.length) % gallery.length;
        updateGalleryImage();
}

        // Inicialización general
        function init() {
            createPlaceCards();
        initElements();
        // asignar referencia a cards después de crear
        elements.cards = document.querySelectorAll('.place-card');
        updateDisplay();
}

        // Arrancar cuando DOM listo
        document.addEventListener('DOMContentLoaded', init);

