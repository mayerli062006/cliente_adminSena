@extends('layouts.app')

@section('content')

<div class="container py-5">

    <!-- ===================================================== -->
    <!-- ENCABEZADO DE COMPUTADORES -->
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

                            <i class="bi bi-laptop-fill"
                               style="font-size: 28px; color: #25c72f;">
                            </i>

                        </div>


                        <!-- TÍTULO -->

                        <div>

                            <h1 class="fw-bold mb-0"
                                style="color: #131614;">

                                LISTA DE COMPUTADORES

                            </h1>

                            <p class="text-muted mb-0">

                                Administración y consulta de computadores

                            </p>

                        </div>

                    </div>


                    <!-- DESCRIPCIÓN -->

                    <p class="text-secondary mb-4">

                        En esta sección puedes consultar la información
                        de los computadores registrados en el sistema SENA.

                    </p>


                    <!-- BOTÓN NUEVO -->

                    <a href="{{ route('computer.create') }}"
                       class="btn btn-success btn-sm">

                        <i class="bi bi-plus-circle-fill me-1"></i>

                        Nuevo Computador

                    </a>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- IMAGEN A LA DERECHA -->
            <!-- ================================================= -->

            <div class="col-md-4">

                <img src="{{ asset('img/computadores.jpg') }}"
                     alt="Computadores SENA"
                     class="img-fluid w-100"
                     style="
                         height: 230px;
                         object-fit: cover;
                     ">

            </div>

        </div>

    </div>



    <!-- ===================================================== -->
    <!-- TABLA DE COMPUTADORES -->
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

                        Computadores registrados

                    </h4>

                    <small class="text-muted">

                        Información de los computadores del sistema

                    </small>

                </div>


                <!-- CONTADOR -->

                <span class="badge rounded-pill px-3 py-2"
                      style="
                          background-color: #25c72f;
                          color: white;
                      ">

                    {{ count($computers ?? []) }}

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
                            Número
                        </th>

                        <th>
                            Marca
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

                    @forelse(($computers ?? []) as $computer)

                    @php
                        // Obtenemos de forma segura el ID, número y marca sin importar si es array u objeto
                        $id = is_array($computer) ? ($computer['id'] ?? '') : ($computer->id ?? '');
                        $numero = is_array($computer) ? ($computer['number'] ?? $computer['numero'] ?? '') : ($computer->number ?? $computer->numero ?? '');
                        $marca = is_array($computer) ? ($computer['brand'] ?? $computer['marca'] ?? '') : ($computer->brand ?? $computer->marca ?? '');
                    @endphp

                    <tr>

                        <!-- ================================================= -->
                        <!-- ID -->
                        <!-- ================================================= -->

                        <td class="px-3 fw-semibold">

                            {{ $id }}

                        </td>



                        <!-- ================================================= -->
                        <!-- NÚMERO -->
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

                                    <i class="bi bi-laptop"
                                       style="
                                           font-size: 20px;
                                           color: #25c72f;
                                       ">
                                    </i>

                                </div>


                                <!-- NÚMERO DEL COMPUTADOR -->

                                <span class="fw-semibold">

                                    {{ $numero }}

                                </span>

                            </div>

                        </td>



                        <!-- ================================================= -->
                        <!-- MARCA -->
                        <!-- ================================================= -->

                        <td>

                            <span class="badge text-bg-light border">

                                <i class="bi bi-pc-display me-1"
                                   style="color: #25c72f;">
                                </i>

                                {{ $marca }}

                            </span>

                        </td>



                        <!-- ================================================= -->
                        <!-- ACCIONES -->
                        <!-- ================================================= -->

                        <td>

                            <div class="d-flex justify-content-center gap-2">


                                <!-- MOSTRAR -->

                                <a href="{{ route('computer.show', $id) }}"
                                   class="btn btn-success btn-sm"
                                   title="Mostrar">

                                    <i class="bi bi-eye-fill"></i>

                                    <span class="d-none d-lg-inline ms-1">

                                        Mostrar

                                    </span>

                                </a>



                                <!-- EDITAR -->

                                <a href="{{ route('computer.edit', $id) }}"
                                   class="btn btn-success btn-sm"
                                   title="Editar">

                                    <i class="bi bi-pencil-fill"></i>

                                    <span class="d-none d-lg-inline ms-1">

                                        Editar

                                    </span>

                                </a>



                                <!-- ELIMINAR -->

                                <form action="{{ route('computer.destroy', $id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf

                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-success btn-sm"
                                            title="Eliminar"
                                            onclick="return confirm('¿Está seguro de eliminar este computador?')">

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
                    <!-- CUANDO NO HAY COMPUTADORES -->
                    <!-- ================================================= -->

                    @empty

                    <tr>

                        <td colspan="4"
                            class="text-center py-5">

                            <i class="bi bi-laptop"
                               style="
                                   font-size: 50px;
                                   color: #25c72f;
                               ">
                            </i>

                            <h5 class="mt-3 text-muted">

                                No hay computadores registrados

                            </h5>

                            <p class="text-muted">

                                Puedes agregar el primer computador
                                utilizando el botón "Nuevo Computador".

                            </p>

                            <a href="{{ route('computer.create') }}"
                               class="btn btn-success btn-sm">

                                <i class="bi bi-plus-circle-fill me-1"></i>

                                Nuevo Computador

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