@extends('layouts.app')

@section('content')

<!-- CARRUSEL SENA -->
<div class="container py-4">
    <div id="carouselSena" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselSena" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselSena" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselSena" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/sena1.jpg') }}" class="d-block w-100" style="height: 450px; object-fit: cover;" alt="SENA">
                <div class="carousel-caption d-none d-md-block" style="color: black; background-color: rgba(255, 255, 255, 0.75); border-radius: 10px; padding: 15px;">
                    <h1 class="fw-bold">Bienvenido al Sistema SENA</h1>
                    <p class="fw-semibold mb-0">Administración de aprendices, cursos y equipos</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/sena2.jpg') }}" class="d-block w-100" style="height: 450px; object-fit: cover;" alt="SENA">
                <div class="carousel-caption d-none d-md-block" style="color: black; background-color: rgba(255, 255, 255, 0.75); border-radius: 10px; padding: 15px;">
                    <h1 class="fw-bold">Bienvenido al Sistema SENA</h1>
                    <p class="fw-semibold mb-0">Administración de aprendices, cursos y equipos</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/sena3.jpg') }}" class="d-block w-100" style="height: 450px; object-fit: cover;" alt="SENA">
                <div class="carousel-caption d-none d-md-block" style="color: black; background-color: rgba(255, 255, 255, 0.75); border-radius: 10px; padding: 15px;">
                    <h1 class="fw-bold">Bienvenido al Sistema SENA</h1>
                    <p class="fw-semibold mb-0">Administración de aprendices, cursos y equipos</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSena" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselSena" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>

<!-- RESUMEN DEL SISTEMA SENA -->
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color: #25c72f;">Resumen del sistema SENA</h2>
        <p class="text-muted">Información general de los registros del sistema</p>
    </div>

    <div class="row g-4">
        <!-- Cursos -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('course.index') }}" class="card card-resumen h-100 shadow-sm border-0 text-decoration-none text-dark">
                <div class="card-body p-4 text-center">
                    <div class="mb-3"><i class="bi bi-book" style="font-size: 45px; color: #25c72f;"></i></div>
                    <h4 class="fw-bold mb-2">Cursos</h4>
                    <h2 class="fw-bold" style="color: #25c72f;">{{ $totalCourses ?? 0 }}</h2>
                    <p class="text-muted mb-0">cursos registrados</p>
                    <small class="text-success mt-2 d-block">Ver listado →</small>
                </div>
            </a>
        </div>

        <!-- Computadores -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('computer.index') }}" class="card card-resumen h-100 shadow-sm border-0 text-decoration-none text-dark">
                <div class="card-body p-4 text-center">
                    <div class="mb-3"><i class="bi bi-laptop" style="font-size: 45px; color: #25c72f;"></i></div>
                    <h4 class="fw-bold mb-2">Computadores</h4>
                    <h2 class="fw-bold" style="color: #25c72f;">{{ $totalComputers ?? 0 }}</h2>
                    <p class="text-muted mb-0">computadores registrados</p>
                    <small class="text-success mt-2 d-block">Ver listado →</small>
                </div>
            </a>
        </div>

        <!-- Aprendices -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('apprentice.index') }}" class="card card-resumen h-100 shadow-sm border-0 text-decoration-none text-dark">
                <div class="card-body p-4 text-center">
                    <div class="mb-3"><i class="bi bi-person" style="font-size: 45px; color: #25c72f;"></i></div>
                    <h4 class="fw-bold mb-2">Aprendices</h4>
                    <h2 class="fw-bold" style="color: #25c72f;">{{ $totalApprentices ?? 0 }}</h2>
                    <p class="text-muted mb-0">aprendices registrados</p>
                    <small class="text-success mt-2 d-block">Ver listado →</small>
                </div>
            </a>
        </div>

        <!-- Instructores -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('teacher.index') }}" class="card card-resumen h-100 shadow-sm border-0 text-decoration-none text-dark">
                <div class="card-body p-4 text-center">
                    <div class="mb-3"><i class="bi bi-person-badge" style="font-size: 45px; color: #25c72f;"></i></div>
                    <h4 class="fw-bold mb-2">Instructores</h4>
                    <h2 class="fw-bold" style="color: #25c72f;">{{ $totalTeachers ?? 0 }}</h2>
                    <p class="text-muted mb-0">instructores registrados</p>
                    <small class="text-success mt-2 d-block">Ver listado →</small>
                </div>
            </a>
        </div>

        <!-- Centros de Formación -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('training_center.index') }}" class="card card-resumen h-100 shadow-sm border-0 text-decoration-none text-dark">
                <div class="card-body p-4 text-center">
                    <div class="mb-3"><i class="bi bi-building" style="font-size: 45px; color: #25c72f;"></i></div>
                    <h4 class="fw-bold mb-2">Centros de formación</h4>
                    <h2 class="fw-bold" style="color: #25c72f;">{{ $totalCenters ?? 0 }}</h2>
                    <p class="text-muted mb-0">centros registrados</p>
                    <small class="text-success mt-2 d-block">Ver listado →</small>
                </div>
            </a>
        </div>

        <!-- Áreas -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('areas.index') }}" class="card card-resumen h-100 shadow-sm border-0 text-decoration-none text-dark">
                <div class="card-body p-4 text-center">
                    <div class="mb-3"><i class="bi bi-pin-map" style="font-size: 45px; color: #25c72f;"></i></div>
                    <h4 class="fw-bold mb-2">Áreas</h4>
                    <h2 class="fw-bold" style="color: #25c72f;">{{ $totalAreas ?? 0 }}</h2>
                    <p class="text-muted mb-0">áreas registradas</p>
                    <small class="text-success mt-2 d-block">Ver listado →</small>
                </div>
            </a>
        </div>
    </div>
</div>

<style>
    .card-resumen {
        transition: all 0.25s ease;
        cursor: pointer;
    }
    .card-resumen:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15) !important;
    }
</style>
@endsection