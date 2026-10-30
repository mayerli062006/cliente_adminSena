<!-- CSS de movimiento rápido para íconos y enlaces del footer -->
<style>
    .footer-hover {
        transition: transform 0.25s ease, color 0.25s ease;
        display: inline-block;
        cursor: default;
    }
    .footer-hover:hover {
        transform: translateY(-4px) scale(1.1);
        color: #198754 !important;
    }
    .footer-link {
        transition: color 0.2s ease, padding-left 0.2s ease;
        text-decoration: none;
    }
    .footer-link:hover {
        color: #198754 !important;
        padding-left: 4px;
    }
</style>


<footer class="bg-dark text-white pt-5 pb-4 mt-5 border-top border-success border-3">
    <div class="container">
        <div class="row g-4">
            
          
            <div class="col-lg-5 col-md-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="p-2 bg-success bg-opacity-25 rounded-circle me-2 text-success">
                        <i class="fas fa-graduation-cap fa-lg"></i>
                    </div>
                    <h5 class="fw-bold mb-0 text-white">Sistema de Administración SENA</h5>
                </div>
                <p class="text-secondary small leading-relaxed mb-3">
                    Plataforma integral para la gestión de formación profesional, aprendices, instructores y recursos académicos.
                </p>
                <ul class="list-unstyled text-secondary small mb-0">
                    <li class="mb-2">
                        <i class="fas fa-map-marker-alt text-success me-2"></i> Popayan, Colombia
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-phone-alt text-success me-2"></i> +57 3205195429
                    </li>
                    <li class="mb-0">
                        <i class="fas fa-envelope text-success me-2"></i> macamayerli941@gmail.com
                    </li>
                </ul>
            </div>

            <!-- Columna 2: Enlaces Rápidos del Sistema -->
            <div class="col-lg-3 col-md-6 ms-auto">
                <h5 class="fw-bold text-white mb-3">Navegación</h5>
                <ul class="list-unstyled small">
                    <li class="mb-2">
                        <a href="{{ route('course.index') }}" class="text-secondary footer-link">
                            <i class="fas fa-chevron-right text-success small me-1"></i> Cursos Ofertados
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('apprentice.index') }}" class="text-secondary footer-link">
                            <i class="fas fa-chevron-right text-success small me-1"></i> Aprendices
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('teacher.index') }}" class="text-secondary footer-link">
                            <i class="fas fa-chevron-right text-success small me-1"></i> Instructores
                        </a>
                    </li>
                    <li class="mb-0">
                        <a href="#quienes-somos" class="text-secondary footer-link">
                            <i class="fas fa-chevron-right text-success small me-1"></i> ¿Quiénes Somos?
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Columna 3: Redes Sociales (Inactivas por ahora) -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold text-white mb-3">Síguenos</h5>
                <p class="text-secondary small mb-3">Conéctate con nosotros en nuestras redes oficiales:</p>
                
                <div class="d-flex gap-3">
                    <a href="javascript:void(0)" class="btn btn-outline-light rounded-circle p-0 d-flex align-items-center justify-content-center footer-hover" style="width: 42px; height: 42px;">
                        <i class="fab fa-facebook-f fa-lg"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn btn-outline-light rounded-circle p-0 d-flex align-items-center justify-content-center footer-hover" style="width: 42px; height: 42px;">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn btn-outline-light rounded-circle p-0 d-flex align-items-center justify-content-center footer-hover" style="width: 42px; height: 42px;">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                </div>
            </div>

        </div>

        <hr class="my-4 border-secondary opacity-25">

        <!-- Copyright -->
        <div class="row align-items-center">
            <div class="col-md-12 text-center">
                <p class="text-secondary small mb-0">
                    &copy; {{ date('Y') }} <span class="text-success fw-bold">SENA</span> - Todos los derechos reservados.
                </p>
            </div>
        </div>
        
    </div>
</footer>
