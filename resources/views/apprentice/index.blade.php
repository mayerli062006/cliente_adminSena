@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="card border-0 shadow-sm mb-4 overflow-hidden">

        <div class="row g-0 align-items-center">

            <div class="col-md-8">

                <div class="card-body p-4 p-md-5">

                    <div class="d-flex align-items-center mb-3">

                        <div class="bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                             style="width:55px;height:55px;">

                            <i class="bi bi-book"
                               style="font-size:28px;color:#25c72f;">
                            </i>

                        </div>

                        <div>

                            <h1 class="fw-bold mb-0">
                                LISTA DE CURSOS
                            </h1>

                            <p class="text-muted mb-0">
                                Administración y consulta de cursos
                            </p>

                        </div>

                    </div>

                    <p class="text-secondary mb-4">
                        En esta sección puedes consultar los cursos
                        registrados en el sistema.
                    </p>

                    <a href="{{ route('course.create') }}"
                       class="btn btn-success btn-sm">

                        <i class="bi bi-plus-circle me-1"></i>
                        Nuevo Curso

                    </a>

                </div>

            </div>

            <div class="col-md-4">

                <img src="{{ asset('img/cursos.jpg') }}"
                     alt="Cursos SENA"
                     class="img-fluid w-100"
                     style="height:230px;object-fit:cover;">

            </div>

        </div>

    </div>


    <div class="card border-0 shadow-sm overflow-hidden">

        <div class="card-header bg-white border-0 p-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h4 class="fw-bold mb-1">

                        <i class="bi bi-journal-bookmark-fill me-2"
                           style="color:#25c72f;">
                        </i>

                        Cursos registrados

                    </h4>

                    <small class="text-muted">
                        Información de los cursos del sistema
                    </small>

                </div>

                <span class="badge rounded-pill px-3 py-2"
                      style="background:#25c72f;color:white;">

                    {{ $courses->count() }} registros

                </span>

            </div>

        </div>


        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead>

                        <tr>

                            <th class="py-3 px-4">
                                ID
                            </th>

                            <th class="py-3">
                                Número de Curso
                            </th>

                            <th class="py-3">
                                Fecha
                            </th>

                            <th class="py-3">
                                Área
                            </th>

                            <th class="py-3">
                                Centro de Formación
                            </th>

                            <th class="py-3 text-center">
                                Acción
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                    @forelse($courses as $item)

                        <tr>

                            <td class="fw-bold px-4">
                                {{ $item->id }}
                            </td>


                            <td>

                                <div class="d-flex align-items-center gap-2">

                                    <div class="bg-light text-success rounded-circle d-flex align-items-center justify-content-center"
                                         style="width:36px;height:36px;">

                                        <i class="bi bi-book"></i>

                                    </div>

                                    <span class="fw-bold">
                                        {{ $item->name_curso }}
                                    </span>

                                </div>

                            </td>


                            <td class="text-secondary">
                                {{ $item->day }}
                            </td>


                            <td>

                                @if($item->area)

                                    <span class="badge bg-light text-dark border">

                                        <i class="bi bi-diagram-3 text-success me-1"></i>

                                        {{ $item->area->name }}

                                    </span>

                                @else

                                    <span class="text-muted">
                                        Sin área
                                    </span>

                                @endif

                            </td>


                            <td>

                                @if($item->training_center)

                                    <span class="badge bg-light text-dark border">

                                        <i class="bi bi-building text-success me-1"></i>

                                        {{ $item->training_center->name }}

                                    </span>

                                @else

                                    <span class="text-muted">
                                        Sin centro
                                    </span>

                                @endif

                            </td>


                            <td>

                                <div class="d-flex justify-content-center gap-1">

                                    <a href="{{ route('course.show', $item->id) }}"
                                       class="btn btn-success btn-sm">

                                        <i class="bi bi-eye-fill"></i>
                                        Mostrar

                                    </a>


                                    <a href="{{ route('course.edit', $item->id) }}"
                                       class="btn btn-success btn-sm">

                                        <i class="bi bi-pencil-fill"></i>
                                        Editar

                                    </a>


                                    <form action="{{ route('course.destroy', $item->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-success btn-sm"
                                                onclick="return confirm('¿Está seguro de eliminar este curso?')">

                                            <i class="bi bi-trash-fill"></i>
                                            Eliminar

                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6"
                                class="text-center py-5 text-muted">

                                No hay cursos registrados.

                            </td>

                        </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>


<style>

.btn-success {
    background-color:#25c72f;
    border-color:#25c72f;
    color:white;
}

.btn-success:hover {
    background-color:#20b82b;
    border-color:#20b82b;
    color:white;
}

</style>

@endsection