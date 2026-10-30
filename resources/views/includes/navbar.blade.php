<!-- CSS Moderno y Elegante -->
<style>
    
    .dropdown-item:active,
    .dropdown-item:focus,
    .dropdown-item.active {
        background-color: #16780c !important;
        color: #ffffff !important;
    }

    .dropdown-item:active i,
    .dropdown-item:focus i,
    .dropdown-item.active i {
        color: #ffffff !important;
    }

    .dropdown-toggle:focus,
    .dropdown-toggle:active {
        box-shadow: none !important;
        outline: none !important;
    }

    /* Estilos al pasar el mouse por las opciones del menú */
    .dropdown-item {
        transition: all 0.2s ease-in-out;
    }

    .dropdown-item:hover {
        background-color: rgba(22, 120, 12, 0.12) !important;
        color: #0e5207 !important;
        font-weight: 700 !important;
        padding-left: 1.25rem !important;
    }

    .dropdown-item:hover i {
        color: #16780c !important;
        transform: scale(1.15);
    }

    .sena-navbar {
        background: linear-gradient(135deg, #16780c 0%, #0e5207 100%) !important;
    }

    .nav-link-pill {
        color: rgba(255, 255, 255, 0.9) !important;
        padding: 0.5rem 1rem !important;
        border-radius: 50rem;
        transition: all 0.25s ease-in-out;
    }

    .nav-link-pill:hover,
    .nav-link-pill:focus {
        color: #1b1b1b !important;
        background-color: rgba(255, 255, 255, 0.15);
        transform: translateY(-1px);
    }

    .sena-search-box {
        background: rgba(255, 255, 255, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(5px);
        transition: all 0.3s ease;
    }

    .sena-search-box:focus-within {
        background: rgba(255, 255, 255, 0.25);
        border-color: #ffffff;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    }

    .btn-login-sena {
        color: #ffffff !important;
        font-weight: 700;
        border: 1.5px solid rgba(255, 255, 255, 0.8);
        border-radius: 50rem;
        transition: all 0.25s ease;
        white-space: nowrap;
    }

    .btn-login-sena:hover {
        background-color: rgba(255, 255, 255, 0.2);
        border-color: #ffffff;
        color: #000000 !important;
        transform: translateY(-1px);
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark sena-navbar shadow py-2 sticky-top">
    <div class="container-fluid px-3 px-lg-4">

        <!-- LOGO + ADMIN SENA -->
        <a class="navbar-brand d-flex align-items-center me-4" href="{{ route('home') }}">
            <div class="bg-white rounded-3 p-1 me-2 shadow-sm d-flex align-items-center justify-content-center" style="width: 44px; height: 44px;">
                <img src="https://pautonoticias.com/sites/default/files/Article/sena-colombia-logo-green39a900png-20250120.png"
                    alt="Logo SENA"
                    class="img-fluid"
                    style="max-height: 36px;">
            </div>
            <span class="text-white fw-bold fs-5 tracking-wide">
                Admin <span class="fw-light text-white-50">SENA</span>
            </span>
        </a>

        <div class="collapse navbar-collapse mt-3 mt-lg-0" id="navbarSupportedContent">

            <!-- ELEMENTOS DEL MENÚ (IZQUIERDA) -->
            <ul class="navbar-nav me-auto mb-3 mb-lg-0 align-items-lg-center gap-1">

                <!-- 1. QUIÉNES SOMOS -->
                <li class="nav-item">
                    <a class="nav-link fw-bold nav-link-pill d-flex align-items-center" href="{{ route('home') }}#quienes-somos">
                        <i class="fas fa-info-circle me-2 opacity-75"></i>Quiénes Somos
                    </a>
                </li>

                <!-- 2. ADMINISTRACIÓN DESPLEGABLE -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold nav-link-pill d-flex align-items-center" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-sliders-h me-2 opacity-75"></i>Administración
                    </a>
                    <ul class="dropdown-menu border-0 shadow-lg rounded-4 p-2 mt-2">
                        <li><a class="dropdown-item py-2 px-3 rounded-3 fw-semibold" href="{{ route('areas.index') }}"><i class="fas fa-layer-group text-success me-2"></i>Áreas</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-3 fw-semibold" href="{{ route('training_center.index') }}"><i class="fas fa-building text-success me-2"></i>Centros de Formación</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-3 fw-semibold" href="{{ route('computer.index') }}"><i class="fas fa-desktop text-success me-2"></i>Computadores</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-3 fw-semibold" href="{{ route('course.index') }}"><i class="fas fa-book-open text-success me-2"></i>Cursos</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-3 fw-semibold" href="{{ route('teacher.index') }}"><i class="fas fa-chalkboard-teacher text-success me-2"></i>Instructores</a></li>
                        <li><a class="dropdown-item py-2 px-3 rounded-3 fw-semibold" href="{{ route('apprentice.index') }}"><i class="fas fa-user-graduate text-success me-2"></i>Aprendices</a></li>
                    </ul>
                </li>
            </ul>

            <!-- BUSCADOR + INICIAR SESIÓN / CERRAR SESIÓN -->
            <div class="d-flex align-items-stretch align-items-lg-center flex-column flex-lg-row gap-2 gap-lg-3">

                <!-- BUSCADOR -->
                <div class="input-group sena-search-box rounded-pill overflow-hidden p-1">
                    <input class="form-control form-control-sm bg-transparent border-0 text-white shadow-none ps-3"
                        type="search"
                        id="quickSearch"
                        placeholder="Filtrar en pantalla..."
                        aria-label="Buscar">
                    <span class="text-white px-3 d-flex align-items-center">
                        <i class="fas fa-search"></i>
                    </span>
                </div>

                <!-- SI EL USUARIO NO HA INICIADO SESIÓN -->
                @if (Route::has('login'))
                @guest
                <a class="btn btn-login-sena px-3 py-1 fs-6 d-flex align-items-center justify-content-center fw-bold" href="{{ route('login') }}">
                    <i class="fas fa-user-circle me-1 fs-6"></i> Iniciar Sesión
                </a>
                @endguest
                @endif

                <!-- SI EL USUARIO YA INICIÓ SESIÓN -->
                @if (Route::has('logout'))
                @auth
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-login-sena px-3 py-1 fs-6 d-flex align-items-center justify-content-center fw-bold w-100">
                        <i class="fas fa-sign-out-alt me-1 fs-6"></i> Cerrar Sesión
                    </button>
                </form>
                @endauth
                @endif

            </div>

        </div>
    </div>
</nav>