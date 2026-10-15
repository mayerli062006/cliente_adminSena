@extends('layouts.app')

@section('content')

<div class="container py-5">

    <!-- ===================================================== -->
    <!-- ENCABEZADO DEL CURSO -->
    <!-- ===================================================== -->

    <div class="card border-0 shadow-sm mb-4 overflow-hidden">

        <div class="row g-0 align-items-center">

            <!-- ================================================= -->
            <!-- TEXTO -->
            <!-- ================================================= -->

            <div class="col-md-8">

                <div class="card-body p-4 p-md-5">

                    <div class="d-flex align-items-center mb-3">

                        <!-- ICONO -->

                        <div class="bg-success bg-opacity-10 rounded-circle
                                    d-flex align-items-center justify-content-center me-3"
                             style="width: 55px; height: 55px;">

                            <i class="bi bi-book"
                               style="font-size: 28px; color: #25c72f;">
                            </i>

                        </div>


                        <!-- TÍTULO -->

                        <div>

                            <h1 class="fw-bold mb-0"
                                style="color: #131614;">

                                INFORMACIÓN DEL CURSO

                            </h1>

                            <p class="text-muted mb-0">

                                Detalles del curso seleccionado

                            </p>

                        </div>

                    </div>


                    <!-- DESCRIPCIÓN -->

                    <p class="text-secondary mb-4">

                        En esta sección puedes consultar toda la información
                        del curso seleccionado.

                    </p>


                    <!-- BOTÓN VOLVER -->

                    <a href="{{ route('course.index') }}"
                       class="btn btn-success btn-sm">

                        <i class="bi bi-arrow-left me-1"></i>

                        Volver a cursos

                    </a>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- IMAGEN -->
            <!-- ================================================= -->

            <div class="col-md-4">

                <img src="{{ asset('img/cursos.jpg') }}"
                     alt="Cursos SENA"
                     class="img-fluid w-100"
                     style="
                         height: 230px;
                         object-fit: cover;
                     ">

            </div>

        </div>

    </div>



    <!-- ===================================================== -->
    <!-- INFORMACIÓN DEL CURSO -->
    <!-- ===================================================== -->

    <div class="card border-0 shadow-sm overflow-hidden">


        <!-- ================================================= -->
        <!-- ENCABEZADO -->
        <!-- ================================================= -->

        <div class="card-header bg-white border-0 p-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h4 class="fw-bold mb-1">

                        <i class="bi bi-info-circle-fill me-2"
                           style="color: #25c72f;">
                        </i>

                        Información del curso

                    </h4>

                    <small class="text-muted">

                        Datos registrados del curso

                    </small>

                </div>


                <!-- ID -->

                <span class="badge rounded-pill px-3 py-2"
                      style="
                          background-color: #25c72f;
                          color: white;
                      ">

                    ID #{{ $course->id }}

                </span>

            </div>

        </div>



        <!-- ================================================= -->
        <!-- DATOS -->
        <!-- ================================================= -->

        <div class="card-body p-4">

            <div class="row g-4">


                <!-- ================================================= -->
                <!-- ID DEL CURSO -->
                <!-- ================================================= -->

                <div class="col-md-6">

                    <div class="border rounded p-3 h-100">

                        <div class="d-flex align-items-center">

                            <div class="rounded-circle
                                        d-flex align-items-center
                                        justify-content-center me-3"
                                 style="
                                     width: 45px;
                                     height: 45px;
                                     background-color: rgba(37, 199, 47, 0.10);
                                 ">

                                <i class="bi bi-hash"
                                   style="
                                       font-size: 22px;
                                       color: #25c72f;
                                   ">
                                </i>

                            </div>

                            <div>

                                <small class="text-muted">
                                    ID del curso
                                </small>

                                <h5 class="fw-bold mb-0">

                                    {{ $course->id }}

                                </h5>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- ================================================= -->
                <!-- NÚMERO DE CURSO -->
                <!-- ================================================= -->

                <div class="col-md-6">

                    <div class="border rounded p-3 h-100">

                        <div class="d-flex align-items-center">

                            <div class="rounded-circle
                                        d-flex align-items-center
                                        justify-content-center me-3"
                                 style="
                                     width: 45px;
                                     height: 45px;
                                     background-color: rgba(37, 199, 47, 0.10);
                                 ">

                                <i class="bi bi-book-fill"
                                   style="
                                       font-size: 22px;
                                       color: #25c72f;
                                   ">
                                </i>

                            </div>

                            <div>

                                <small class="text-muted">
                                    Número de curso
                                </small>

                                <h5 class="fw-bold mb-0">

                                    {{ $course->name_curso }}

                                </h5>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- ================================================= -->
                <!-- DÍA -->
                <!-- ================================================= -->

                <div class="col-md-6">

                    <div class="border rounded p-3 h-100">

                        <div class="d-flex align-items-center">

                            <div class="rounded-circle
                                        d-flex align-items-center
                                        justify-content-center me-3"
                                 style="
                                     width: 45px;
                                     height: 45px;
                                     background-color: rgba(37, 199, 47, 0.10);
                                 ">

                                <i class="bi bi-calendar-event"
                                   style="
                                       font-size: 22px;
                                       color: #25c72f;
                                   ">
                                </i>

                            </div>

                            <div>

                                <small class="text-muted">
                                    Día
                                </small>

                                <h5 class="fw-bold mb-0">

                                    {{ $course->day }}

                                </h5>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- ================================================= -->
                <!-- ÁREA -->
                <!-- ================================================= -->

                <div class="col-md-6">

                    <div class="border rounded p-3 h-100">

                        <div class="d-flex align-items-center">

                            <div class="rounded-circle
                                        d-flex align-items-center
                                        justify-content-center me-3"
                                 style="
                                     width: 45px;
                                     height: 45px;
                                     background-color: rgba(37, 199, 47, 0.10);
                                 ">

                                <i class="bi bi-diagram-3"
                                   style="
                                       font-size: 22px;
                                       color: #25c72f;
                                   ">
                                </i>

                            </div>

                            <div>

                                <small class="text-muted">
                                    Área
                                </small>

                                <h5 class="fw-bold mb-0">

                                    @if($course->area)

                                        {{ $course->area->name }}

                                    @else

                                        <span class="text-muted">
                                            Sin área
                                        </span>

                                    @endif

                                </h5>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- ================================================= -->
                <!-- CENTRO DE FORMACIÓN -->
                <!-- ================================================= -->

                <div class="col-md-12">

                    <div class="border rounded p-3">

                        <div class="d-flex align-items-center">

                            <div class="rounded-circle
                                        d-flex align-items-center
                                        justify-content-center me-3"
                                 style="
                                     width: 45px;
                                     height: 45px;
                                     background-color: rgba(37, 199, 47, 0.10);
                                 ">

                                <i class="bi bi-building"
                                   style="
                                       font-size: 22px;
                                       color: #25c72f;
                                   ">
                                </i>

                            </div>

                            <div>

                                <small class="text-muted">
                                    Centro de formación
                                </small>

                                <h5 class="fw-bold mb-0">

                                    @if($course->training_center)

                                        {{ $course->training_center->name }}

                                    @else

                                        <span class="text-muted">
                                            Sin centro de formación
                                        </span>

                                    @endif

                                </h5>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <!-- ================================================= -->
            <!-- BOTONES -->
            <!-- ================================================= -->

            <div class="d-flex justify-content-end gap-2 mt-4 pt-3 border-top">


                <!-- VOLVER -->

                <a href="{{ route('course.index') }}"
                   class="btn btn-secondary btn-sm">

                    <i class="bi bi-arrow-left me-1"></i>

                    Volver

                </a>


                <!-- EDITAR -->

                <a href="{{ route('course.edit', $course->id) }}"
                   class="btn btn-success btn-sm">

                    <i class="bi bi-pencil-fill me-1"></i>

                    Editar

                </a>

            </div>

        </div>

    </div>

</div>



<!-- ===================================================== -->
<!-- ESTILOS -->
<!-- ===================================================== -->

<style>

    /* ===================================================== */
    /* BOTONES VERDES SENA */
    /* ===================================================== */

    .btn-success {

        background-color: #25c72f;

        border-color: #25c72f;

        color: white;

    }


    /* ===================================================== */
    /* EFECTO AL PASAR EL MOUSE */
    /* ===================================================== */

    .btn-success:hover {

        background-color: #20b82b;

        border-color: #20b82b;

        color: white;

    }


    /* ===================================================== */
    /* TARJETAS DE INFORMACIÓN */
    /* ===================================================== */

    .border {

        transition: all 0.2s ease;

    }


    .border:hover {

        background-color: rgba(37, 199, 47, 0.04);

    }

</style>


@endsection