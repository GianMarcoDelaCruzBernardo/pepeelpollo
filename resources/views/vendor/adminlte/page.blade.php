@extends('adminlte::master')

@inject('layoutHelper', 'JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper')
@inject('preloaderHelper', 'JeroenNoten\LaravelAdminLte\Helpers\PreloaderHelper')

@section('adminlte_css')
    @stack('css')
    @yield('css')

    <style type="text/css">
        /* ===== TEMA NARANJA PROFESIONAL COMPLETO ===== */
        :root {
            --naranja-primario: #FF6B35;
            --naranja-secundario: #E55A2B;
            --naranja-claro: #FF8C5A;
            --naranja-oscuro: #CC552B;
            --naranja-gradiente: linear-gradient(135deg, #FF6B35, #E55A2B);
            --fondo-oscuro: #2C3E50;
            --texto-oscuro: #2C3E50;
            --texto-medio: #495057;
            --texto-claro: #6C757D;
            --fondo-claro: #F8F9FA;
            --borde-claro: #E9ECEF;
        }

        /* ===== RESET PROFESIONAL ===== */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Source Sans Pro', sans-serif;
            line-height: 1.6;
            color: var(--texto-medio);
        }

        /* ===== HEADER PROFESIONAL ===== */
        .navbar.navbar-white.navbar-light {
            background: var(--naranja-gradiente) !important;
            box-shadow: 0 2px 15px rgba(255, 107, 53, 0.3);
            border-bottom: none;
            padding: 0.5rem 1rem;
        }

        .main-header .navbar {
            background: var(--naranja-gradiente) !important;
            min-height: 60px;
        }

        .main-header .navbar .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .main-header .navbar .nav-link:hover {
            color: white !important;
            background: rgba(255, 255, 255, 0.15) !important;
            transform: translateY(-1px);
        }

        .navbar-brand,
        .navbar-brand:hover {
            color: white !important;
            font-weight: 600;
            font-size: 1.4rem;
        }

        /* ===== SIDEBAR ELEGANTE ===== */
        .sidebar-dark-primary {
            background-color: var(--fondo-oscuro) !important;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar-dark-primary .nav-sidebar .nav-item .nav-link {
            color: rgba(255, 255, 255, 0.8) !important;
            padding: 0.75rem 1rem;
            margin: 2px 0;
            border-radius: 0;
            border-left: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .sidebar-dark-primary .nav-sidebar .nav-item .nav-link.active {
            background-color: var(--naranja-primario) !important;
            color: white !important;
            border-left: 4px solid var(--naranja-primario) !important;
            box-shadow: 0 2px 8px rgba(255, 107, 53, 0.3);
        }

        .sidebar-dark-primary .nav-sidebar .nav-item .nav-link:hover {
            background-color: rgba(255, 107, 53, 0.1) !important;
            color: var(--naranja-claro) !important;
            border-left: 3px solid var(--naranja-claro);
        }

        .brand-link {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
        }

        .user-panel {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
        }

        /* ===== BOTONES PROFESIONALES ===== */
        .btn {
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
        }

        .btn.btn-primary {
            background: var(--naranja-gradiente) !important;
            color: white !important;
            box-shadow: 0 2px 6px rgba(255, 107, 53, 0.3);
        }

        .btn.btn-primary:hover,
        .btn.btn-primary:focus {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255, 107, 53, 0.4);
        }

        .btn-sm {
            padding: 0.4rem 0.8rem;
            font-size: 0.875rem;
        }

        .btn-lg {
            padding: 0.8rem 1.6rem;
            font-size: 1.1rem;
        }

        /* ===== CARDS MODERNAS ===== */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.12);
        }

        .card-header {
            background: white !important;
            border-bottom: 1px solid var(--borde-claro);
            padding: 1.25rem 1.5rem;
            font-weight: 600;
            color: var(--texto-oscuro) !important;
            border-radius: 10px 10px 0 0 !important;
        }

        .card-body {
            padding: 1.5rem;
            color: var(--texto-medio) !important;
        }

        .card-primary:not(.card-outline) > .card-header {
            background: var(--naranja-gradiente) !important;
            color: white !important;
        }

        .card-primary.card-outline {
            border-top: 4px solid var(--naranja-primario) !important;
        }

        /* ===== TABLAS ELEGANTES ===== */
        .table {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-bottom: 0;
        }

        .table thead th {
            background: var(--naranja-gradiente) !important;
            color: white !important;
            border: none;
            font-weight: 600;
            padding: 1rem;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 0.5px;
        }

        .table tbody td {
            padding: 0.875rem 1rem;
            border-color: var(--borde-claro);
            color: var(--texto-medio) !important;
            vertical-align: middle;
        }

        .table tbody tr:hover {
            background-color: rgba(255, 107, 53, 0.03);
        }

        /* ===== SMALL BOX MEJORADO ===== */
        .small-box {
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
            border: none;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .small-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .small-box .inner {
            padding: 1.5rem;
        }

        .small-box .inner h3 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: white !important;
        }

        .small-box .inner p {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9) !important;
            margin-bottom: 0;
        }

        .small-box .icon {
            color: rgba(255, 255, 255, 0.2) !important;
            font-size: 4rem;
            transition: all 0.3s ease;
        }

        .small-box:hover .icon {
            transform: scale(1.1);
        }

        .bg-primary { background: var(--naranja-gradiente) !important; }
        .bg-info { background: linear-gradient(135deg, #17a2b8, #138496) !important; }
        .bg-success { background: linear-gradient(135deg, #28a745, #1e7e34) !important; }
        .bg-warning { background: linear-gradient(135deg, #ffc107, #e0a800) !important; }
        .bg-danger { background: linear-gradient(135deg, #dc3545, #c82333) !important; }

        /* ===== BADGES MODERNOS ===== */
        .badge {
            border-radius: 12px;
            font-weight: 500;
            padding: 0.4rem 0.8rem;
            font-size: 0.75rem;
        }

        .badge-primary {
            background: var(--naranja-gradiente) !important;
            color: white !important;
        }

        .badge-success { background: linear-gradient(135deg, #28a745, #1e7e34) !important; }
        .badge-warning { background: linear-gradient(135deg, #ffc107, #e0a800) !important; }
        .badge-danger { background: linear-gradient(135deg, #dc3545, #c82333) !important; }
        .badge-info { background: linear-gradient(135deg, #17a2b8, #138496) !important; }

        /* ===== LINKS PROFESIONALES ===== */
        a:not(.btn):not(.nav-link):not(.dropdown-item) {
            color: var(--naranja-secundario) !important;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        a:not(.btn):not(.nav-link):not(.dropdown-item):hover {
            color: var(--naranja-oscuro) !important;
            text-decoration: underline;
        }

        /* ===== CONTENIDO PRINCIPAL ===== */
        .content-wrapper {
            background-color: #f8f9fa;
            color: var(--texto-medio) !important;
        }

        .content-header {
            padding: 1.5rem 1.5rem 0;
        }

        .content-header h1 {
            color: var(--texto-oscuro) !important;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .breadcrumb {
            background: transparent;
            padding: 0;
        }

        .breadcrumb-item a {
            color: var(--naranja-secundario) !important;
            font-weight: 500;
        }

        .breadcrumb-item.active {
            color: var(--texto-claro) !important;
        }

        /* ===== FORMULARIOS ELEGANTES ===== */
        .form-control {
            border-radius: 6px;
            border: 1px solid #ced4da;
            padding: 0.6rem 0.75rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--naranja-primario);
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.25);
        }

        label {
            color: var(--texto-oscuro) !important;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        /* ===== PAGINACIÓN ===== */
        .pagination .page-link {
            color: var(--naranja-secundario);
            border-radius: 6px;
            margin: 0 2px;
            border: 1px solid #dee2e6;
        }

        .pagination .page-item.active .page-link {
            background: var(--naranja-gradiente) !important;
            border-color: var(--naranja-secundario);
            color: white;
        }

        /* ===== DROPDOWNS ===== */
        .dropdown-menu {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .dropdown-item {
            padding: 0.6rem 1rem;
            color: var(--texto-medio) !important;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background-color: rgba(255, 107, 53, 0.1);
            color: var(--naranja-primario) !important;
        }

        /* ===== ALERTAS Y NOTIFICACIONES ===== */
        .alert {
            border-radius: 8px;
            border: none;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .alert-success {
            background: linear-gradient(135deg, #d4edda, #c3e6cb);
            color: #155724;
        }

        .alert-warning {
            background: linear-gradient(135deg, #fff3cd, #ffeaa7);
            color: #856404;
        }

        .alert-danger {
            background: linear-gradient(135deg, #f8d7da, #f5c6cb);
            color: #721c24;
        }

        /* ===== PROGRESS BARS ===== */
        .progress {
            border-radius: 10px;
            height: 8px;
            background-color: #e9ecef;
        }

        .progress-bar {
            background: var(--naranja-gradiente) !important;
            border-radius: 10px;
        }

        /* ===== TÍTULOS Y TEXTO ===== */
        h1, h2, h3, h4, h5, h6 {
            color: var(--texto-oscuro) !important;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        h1 { font-size: 2rem; }
        h2 { font-size: 1.75rem; }
        h3 { font-size: 1.5rem; }
        h4 { font-size: 1.25rem; }
        h5 { font-size: 1.1rem; }
        h6 { font-size: 1rem; }

        p, li, span {
            color: var(--texto-medio) !important;
            line-height: 1.6;
        }

        /* ===== ESTILOS PERSONALIZADOS EXISTENTES ===== */
        .zoomP {
            border: 1px solid #c0c0c0;
            box-shadow: #c0c0c0 0px 5px 5px 0px;
            transition: all 0.3s ease;
        }

        .zoomP:hover {
            transform: scale(1.02);
            box-shadow: #c0c0c0 0px 8px 15px 0px;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .card-body {
                padding: 1rem;
            }
            
            .small-box .inner {
                padding: 1rem;
            }
            
            .small-box .inner h3 {
                font-size: 2rem;
            }
            
            .content-header {
                padding: 1rem 1rem 0;
            }
        }

        /* ===== UTILIDADES ===== */
        .shadow-soft {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06) !important;
        }

        .border-radius-10 {
            border-radius: 10px !important;
        }

        .text-gradient-primary {
            background: var(--naranja-gradiente);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ===== ANIMACIONES SUAVES ===== */
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .slide-in-left {
            animation: slideInLeft 0.3s ease-out;
        }

        @keyframes slideInLeft {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }
    </style>
@stop

@section('classes_body', $layoutHelper->makeBodyClasses())

@section('body_data', $layoutHelper->makeBodyData())

@section('body')
    <div class="wrapper">

        {{-- Preloader Animation (fullscreen mode) --}}
        @if($preloaderHelper->isPreloaderEnabled())
            @include('adminlte::partials.common.preloader') 
        @endif

        {{-- Top Navbar --}}
        @if($layoutHelper->isLayoutTopnavEnabled())
            @include('adminlte::partials.navbar.navbar-layout-topnav')
        @else
            @include('adminlte::partials.navbar.navbar')
        @endif

        {{-- Left Main Sidebar --}}
        @if(!$layoutHelper->isLayoutTopnavEnabled())
            @include('adminlte::partials.sidebar.left-sidebar')
        @endif

        {{-- Content Wrapper --}}
        @empty($iFrameEnabled)
            @include('adminlte::partials.cwrapper.cwrapper-default')
        @else
            @include('adminlte::partials.cwrapper.cwrapper-iframe')
        @endempty

        {{-- Footer --}}
        @hasSection('footer')
            @include('adminlte::partials.footer.footer')
        @endif

        {{-- Right Control Sidebar --}}
        @if($layoutHelper->isRightSidebarEnabled())
            @include('adminlte::partials.sidebar.right-sidebar')
        @endif

    </div>
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
    
    {{-- SweetAlert2 para notificaciones --}}
    @if((($mensaje=Session::get('mensaje')) && ($icono=Session::get('icono'))) )
        <script>
            Swal.fire({
                position: 'top-end',
                icon: '{{ $icono }}',
                title: '{{ $mensaje }}',
                showConfirmButton: false,
                timer: 4000,
                background: '#fff',
                customClass: {
                    popup: 'border-radius-10 shadow-soft'
                }
            });
        </script>
    @endif

    {{-- Scripts adicionales para mejor UX --}}
    <script>
        // Agregar animaciones a las cards al cargar
        document.addEventListener('DOMContentLoaded', function() {
            // Animación para cards
            const cards = document.querySelectorAll('.card');
            cards.forEach((card, index) => {
                card.classList.add('fade-in');
                card.style.animationDelay = `${index * 0.1}s`;
            });

            // Mejorar hover en botones
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(btn => {
                btn.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                });
                btn.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
@stop