@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="card shadow-sm">
        <!-- Encabezado en Verde SENA -->
        <div class="card-header text-white" style="background-color: #16780c;">
            <h4 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Editar Instructor</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('teacher.update', $teacher['id']) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Nombre y Correo -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label fw-bold">Nombre Completo</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $teacher['name'] ?? '') }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label fw-bold">Correo Electrónico</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $teacher['email'] ?? '') }}" required>
                    </div>
                </div>

                <!-- Área y Centro de Formación -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="area_id" class="form-label fw-bold">Área Técnica</label>
                        <select name="area_id" id="area_id" class="form-select" required>
                            <option value="">-- Seleccione un Área --</option>
                            @foreach ($areas as $area)
                                <option value="{{ $area['id'] }}" {{ old('area_id', $teacher['area_id'] ?? '') == $area['id'] ? 'selected' : '' }}>
                                    {{ $area['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="training_center_id" class="form-label fw-bold">Centro de Formación</label>
                        <select name="training_center_id" id="training_center_id" class="form-select" required>
                            <option value="">-- Seleccione un Centro --</option>
                            @foreach ($training_centers as $center)
                                <option value="{{ $center['id'] }}" {{ old('training_center_id', $teacher['training_center_id'] ?? '') == $center['id'] ? 'selected' : '' }}>
                                    {{ $center['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Botones de Acción con Verde SENA -->
                <div class="d-flex justify-content-end gap-2 mt-3">
                    <a href="{{ route('teacher.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn text-white" style="background-color: #16780c; border-color: #16780c;">
                        <i class="bi bi-save me-1"></i> Actualizar Instructor
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection