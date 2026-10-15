@extends('layouts.app')

@section('content')

<div class="container py-5">

    <!-- ===================================================== -->
    <!-- ENCABEZADO DE INSTRUCTORES -->
    <!-- ===================================================== -->

    <div class="card border-0 shadow-sm mb-4 overflow-hidden">

        <div class="row g-0 align-items-center">

            <!-- TEXTO -->

            <div class="col-md-8">

                <div class="card-body p-4 p-md-5">

                    <div class="d-flex align-items-center mb-3">

                        <!-- ICONO -->

                        <div class="bg-success bg-opacity-10 rounded-circle
                                    d-flex align-items-center justify-content-center me-3"
                            style="width: 55px; height: 55px;">

                            <i class="bi bi-person-badge-fill"
                               style="font-size: 28px; color: #25c72f;">
                            </i>

                        </div>


                        <!-- TÍTULO -->

                        <div>

                            <h1 class="fw-bold mb-0"
                                style="color: #131614;">

                                LISTA DE INSTRUCTORES

                            </h1>

                            <p class="text-muted mb-0">

                                Administración y consulta de instructores

                            </p>

                        </div>

                    </div>


                    <!-- DESCRIPCIÓN -->

                    <p class="text-secondary mb-4">

                        En esta sección puedes consultar la información
                        de los instructores registrados en el sistema SENA.

                    </p>


                    <!-- BOTÓN NUEVO -->

                    <a href="{{ route('teacher.create') }}"
                       class="btn btn-success btn-sm">

                        <i class="bi bi-plus-circle-fill me-1"></i>

                        Nuevo Instructor

                    </a>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- IMAGEN A LA DERECHA -->
            <!-- ================================================= -->

            <div class="col-md-4">

                <img src="{{ asset('img/instructores.jpg') }}"
                     alt="Instructores SENA"
                     class="img-fluid w-100"
                     style="
                         height: 230px;
                         object-fit: cover;
                     ">

            </div>

        </div>

    </div>



    <!-- ===================================================== -->
    <!-- TABLA DE INSTRUCTORES -->
    <!-- ===================================================== -->

    <div class="card border-0 shadow-sm overflow-hidden">


        <!-- ================================================= -->
        <!-- ENCABEZADO DE TABLA -->
        <!-- ================================================= -->

        <div class="card-header bg-white border-0 p-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h4 class="fw-bold mb-1">

                        <i class="bi bi-table me-2"
                           style="color: #25c72f;">
                        </i>

                        Instructores registrados

                    </h4>

                    <small class="text-muted">

                        Información de los instructores del sistema

                    </small>

                </div>


                <!-- CONTADOR -->

                <span class="badge rounded-pill px-3 py-2"
                      style="
                          background-color: #25c72f;
                          color: white;
                      ">

                    {{ $teachers->count() }} registros

                </span>

            </div>

        </div>



        <!-- ================================================= -->
        <!-- TABLA -->
        <!-- ================================================= -->

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">


                <!-- ================================================= -->
                <!-- ENCABEZADO -->
                <!-- ================================================= -->

                <thead style="background-color: #25c72f; color: white;">

                    <tr>

                        <th class="px-3">
                            ID
                        </th>

                        <th>
                            Nombre
                        </th>

                        <th>
                            Email
                        </th>

                        <th>
                            Área
                        </th>

                        <th>
                            Centro de Formación
                        </th>

                        <th class="text-center">
                            Acción
                        </th>

                    </tr>

                </thead>



                <!-- ================================================= -->
                <!-- CUERPO -->
                <!-- ================================================= -->

                <tbody>

                    @forelse($teachers as $teacher)

                    <tr>

                        <!-- ================================================= -->
                        <!-- ID -->
                        <!-- ================================================= -->

                        <td class="px-3 fw-semibold">

                            {{ $teacher->id }}

                        </td>



                        <!-- ================================================= -->
                        <!-- NOMBRE -->
                        <!-- ================================================= -->

                        <td>

                            <div class="d-flex align-items-center">


                                <!-- ICONO -->

                                <div class="rounded-circle
                                            d-flex align-items-center
                                            justify-content-center me-2"
                                    style="
                                        width: 40px;
                                        height: 40px;
                                        background-color: rgba(37, 199, 47, 0.10);
                                    ">

                                    <i class="bi bi-person"
                                       style="
                                           font-size: 20px;
                                           color: #25c72f;
                                       ">
                                    </i>

                                </div>


                                <!-- NOMBRE DEL INSTRUCTOR -->

                                <span class="fw-semibold">

                                    {{ $teacher->name }}

                                </span>

                            </div>

                        </td>



                        <!-- ================================================= -->
                        <!-- EMAIL -->
                        <!-- ================================================= -->

                        <td>

                            <span class="text-muted">

                                {{ $teacher->email }}

                            </span>

                        </td>



                        <!-- ================================================= -->
                        <!-- ÁREA -->
                        <!-- ================================================= -->

                        <td>

                            <span class="badge text-bg-light border">

                                <i class="bi bi-diagram-3 me-1"
                                   style="color: #25c72f;">
                                </i>

                                {{ $teacher->area_id }}

                            </span>

                        </td>



                        <!-- ================================================= -->
                        <!-- CENTRO DE FORMACIÓN -->
                        <!-- ================================================= -->

                        <td>

                            <span class="badge text-bg-light border">

                                <i class="bi bi-building me-1"
                                   style="color: #25c72f;">
                                </i>

                                {{ $teacher->training_center_id }}

                            </span>

                        </td>



                        <!-- ================================================= -->
                        <!-- ACCIONES -->
                        <!-- ================================================= -->

                        <td>

                            <div class="d-flex justify-content-center gap-2">


                                <!-- MOSTRAR -->

                                <a href="{{ route('teacher.show', $teacher->id) }}"
                                   class="btn btn-success btn-sm"
                                   title="Mostrar">

                                    <i class="bi bi-eye-fill"></i>

                                    <span class="d-none d-lg-inline ms-1">

                                        Mostrar

                                    </span>

                                </a>



                                <!-- EDITAR -->

                                <a href="{{ route('teacher.edit', $teacher->id) }}"
                                   class="btn btn-success btn-sm"
                                   title="Editar">

                                    <i class="bi bi-pencil-fill"></i>

                                    <span class="d-none d-lg-inline ms-1">

                                        Editar

                                    </span>

                                </a>



                                <!-- ELIMINAR -->

                                <form action="{{ route('teacher.destroy', $teacher->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf

                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-success btn-sm"
                                            title="Eliminar"
                                            onclick="return confirm('¿Está seguro de eliminar este instructor?')">

                                        <i class="bi bi-trash-fill"></i>

                                        <span class="d-none d-lg-inline ms-1">

                                            Eliminar

                                        </span>

                                    </button>

                                </form>


                            </div>

                        </td>

                    </tr>



                    <!-- ================================================= -->
                    <!-- CUANDO NO HAY INSTRUCTORES -->
                    <!-- ================================================= -->

                    @empty

                    <tr>

                        <td colspan="6"
                            class="text-center py-5">

                            <i class="bi bi-person-badge"
                               style="
                                   font-size: 50px;
                                   color: #25c72f;
                               ">
                            </i>

                            <h5 class="mt-3 text-muted">

                                No hay instructores registrados

                            </h5>

                            <p class="text-muted">

                                Puedes agregar el primer instructor
                                utilizando el botón "Nuevo Instructor".

                            </p>

                            <a href="{{ route('teacher.create') }}"
                               class="btn btn-success btn-sm">

                                <i class="bi bi-plus-circle-fill me-1"></i>

                                Nuevo Instructor

                            </a>

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

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
    /* FILAS DE LA TABLA */
    /* ===================================================== */

    .table-hover tbody tr {

        transition: all 0.2s ease;

    }


    .table-hover tbody tr:hover {

        background-color: rgba(37, 199, 47, 0.06);

    }

</style>


@endsection