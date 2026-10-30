@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow-lg border-0">

        <!-- Encabezado con Verde SENA -->
        <div class="card-header text-white d-flex justify-content-between align-items-center" style="background-color: #16780c;">
            <h3 class="mb-0">
                {{ $teacher['name']}}
            </h3>
            <span class="badge bg-light text-dark fs-6">
                {{ $teacher->profession ?? 'Instructor' }}
            </span>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-4 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control">
                        {{ $teacher['id'] }}
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="fw-bold">Área</label>
                    <div class="form-control">
                        {{ $teacher['area']['name'] ?? $teacher->area_id ?? 'No asignada' }}
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="fw-bold">Centro de Formación</label>
                    <div class="form-control">
                        {{ $teacher->training_center->name ?? $teacher->trainingCenter->name ?? $teacher->training_center_id ?? 'No asignado' }}
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Nombre</label>
                    <div class="form-control">
                        {{ $teacher['name'] }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Email</label>
                    <div class="form-control">
                        {{ $teacher['email'] }}
                    </div>
                </div>
            </div>

            <!-- CAMPOS NUEVOS -->
            <div class="row">

                <div class="col-md-4 mb-3">
                    <label class="fw-bold">Edad</label>
                    <div class="form-control">
                        {{ $teacher['age'] ? $teacher['age'] . ' años' : 'No registrada' }}
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="fw-bold">Teléfono</label>
                    <div class="form-control">
                        {{ $teacher->phone ?? 'No registrado' }}
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="fw-bold">Profesión / Especialidad</label>
                    <div class="form-control">
                        {{ $teacher->profession ?? 'Sin especificar' }}
                    </div>
                </div>

            </div>

            <div class="mb-3">
                <label class="fw-bold">Biografía / Perfil Profesional</label>
                <div class="form-control text-muted" style="min-height: 80px; background-color: #f8f9fa;">
                    {{ $teacher->biography ?? 'Sin información de biografía disponible.' }}
                </div>
            </div>
            <!-- FIN CAMPOS NUEVOS -->

            <hr>

            <div class="row text-muted small">

                <div class="col-md-6">
                    <label class="fw-bold">Fecha de creación</label>
                    <div class="form-control bg-light">
                        {{ $teacher['created_at'] ? date('d/m/Y H:i', strtotime($teacher['created_at'])) : 'N/A' }}
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control bg-light">
                        {{ $teacher['updated_at'] ? date('d/m/Y H:i', strtotime($teacher['updated_at'])) : 'N/A' }}
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="d-flex justify-content-end mt-4">

        <a href="{{ route('teacher.index') }}" class="btn btn-success" style="background-color: #16780c; border-color: #16780c;">
            <i class="bi bi-arrow-left"></i> Volver
        </a>

    </div>

    <br>

</div>

@endsection