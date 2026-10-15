@extends('layouts.app')

@section('content')

<div class="container py-5">

    <!-- ========================================================= -->
    <!-- ENCABEZADO -->
    <!-- ========================================================= -->

    <div class="card border-0 shadow-sm mb-4 overflow-hidden">

        <div class="row g-0 align-items-center">

            <!-- TEXTO -->
            <div class="col-md-8">

                <div class="card-body p-4">

                    <div class="d-flex align-items-center mb-3">

                        <div
                            class="d-flex align-items-center justify-content-center rounded-circle me-3"
                            style="
                                width: 55px;
                                height: 55px;
                                background-color: rgba(37, 199, 47, 0.15);
                            "
                        >
                            <i
                                class="bi bi-building-fill"
                                style="font-size: 28px; color: #25c72f;"
                            ></i>
                        </div>

                        <div>

                            <h2 class="fw-bold mb-1">
                                LISTA DE CENTROS DE FORMACIÓN
                            </h2>

                            <p class="text-muted mb-0">
                                Administración y consulta de centros de formación
                            </p>

                        </div>

                    </div>

                    <p class="text-muted">
                        Consulta, administra y gestiona los centros de formación
                        registrados en el sistema SENA.
                    </p>

                    <!-- BOTÓN NUEVO -->
                    <a
                        href="{{ route('training_center.create') }}"
                        class="btn btn-success"
                    >
                        <i class="bi bi-plus-circle"></i>
                        Nuevo Centro de Formación
                    </a>

                </div>

            </div>

            <!-- IMAGEN -->
            <div class="col-md-4">

                <img
                    src="{{ asset('img/centros.jpg') }}"
                    alt="Centros de Formación"
                    class="img-fluid w-100"
                    style="
                        height: 230px;
                        object-fit: cover;
                    "
                >

            </div>

        </div>

    </div>


    <!-- ========================================================= -->
    <!-- TABLA -->
    <!-- ========================================================= -->

    <div class="card border-0 shadow-sm">

        <!-- ENCABEZADO DE LA TABLA -->
        <div class="card-header bg-white border-0 p-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h4 class="fw-bold mb-1">
                        Centros registrados
                    </h4>

                    <p class="text-muted mb-0">
                        Lista de centros de formación disponibles
                    </p>

                </div>

                <!-- CONTADOR -->
                <span
                    class="badge rounded-pill"
                    style="
                        background-color: #25c72f;
                        font-size: 14px;
                    "
                >
                    {{ count($training_centers) }} centros
                </span>

            </div>

        </div>


        <!-- TABLA RESPONSIVE -->
        <div class="table-responsive">

            <table
                id="idTraining_center"
                class="table table-hover align-middle mb-0"
            >

                <thead style="background-color: #25c72f; color: white;">

                    <tr>

                        <th class="px-4">Id</th>

                        <th>Nombre</th>

                        <th>Ubicación</th>

                        <th class="text-center">Acción</th>

                    </tr>

                </thead>


                <tbody>

                    @forelse ($training_centers as $training_center)

                        <tr>

                            <!-- ID -->
                            <td class="px-4 fw-bold">
                                {{ $training_center->id }}
                            </td>


                            <!-- NOMBRE -->
                            <td>

                                <div class="d-flex align-items-center">

                                    <div
                                        class="d-flex align-items-center justify-content-center rounded-circle me-2"
                                        style="
                                            width: 40px;
                                            height: 40px;
                                            background-color: rgba(37, 199, 47, 0.12);
                                        "
                                    >
                                        <i
                                            class="bi bi-building"
                                            style="
                                                color: #25c72f;
                                                font-size: 20px;
                                            "
                                        ></i>
                                    </div>

                                    <span class="fw-semibold">
                                        {{ $training_center->name }}
                                    </span>

                                </div>

                            </td>


                            <!-- UBICACIÓN -->
                            <td>

                                <span class="badge bg-light text-dark">

                                    <i class="bi bi-geo-alt-fill"></i>

                                    {{ $training_center->location }}

                                </span>

                            </td>


                            <!-- ACCIONES -->
                            <td>

                                <div class="d-flex justify-content-center gap-2">

                                    <!-- MOSTRAR -->
                                    <a
                                        href="{{ route('training_center.show', $training_center->id) }}"
                                        class="btn btn-success btn-sm"
                                    >
                                        <i class="bi bi-eye"></i>
                                        Mostrar
                                    </a>


                                    <!-- EDITAR -->
                                    <a
                                        href="{{ route('training_center.edit', $training_center->id) }}"
                                        class="btn btn-success btn-sm"
                                    >
                                        <i class="bi bi-pencil-square"></i>
                                        Editar
                                    </a>


                                    <!-- ELIMINAR -->
                                    <form
                                        action="{{ route('training_center.destroy', $training_center->id) }}"
                                        method="POST"
                                        class="d-inline"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-success btn-sm"
                                            onclick="return confirm('¿Está seguro de eliminar este centro de formación?')"
                                        >
                                            <i class="bi bi-trash"></i>
                                            Eliminar
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="4"
                                class="text-center py-5"
                            >

                                <i
                                    class="bi bi-building"
                                    style="
                                        font-size: 45px;
                                        color: #25c72f;
                                    "
                                ></i>

                                <h5 class="mt-3">
                                    No hay centros de formación registrados
                                </h5>

                                <p class="text-muted">
                                    Puedes agregar un nuevo centro de formación
                                    utilizando el botón superior.
                                </p>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>


<!-- ========================================================= -->
<!-- ESTILOS -->
<!-- ========================================================= -->

<style>

    .btn-success {
        background-color: #25c72f !important;
        border-color: #25c72f !important;
    }

    .btn-success:hover {
        background-color: #20b82b !important;
        border-color: #20b82b !important;
    }

    tbody tr:hover {
        background-color: rgba(37, 199, 47, 0.05);
    }

</style>

@endsection