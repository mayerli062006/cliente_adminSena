@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Registrar Nuevo Instructor</h1>

    <form action="{{ route('teacher.store') }}" method="POST">
        @csrf

        <!-- Nombre y Correo -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="name" class="form-label fw-bold">Nombre Completo</label>
                <input type="text" name="name" id="name" class="form-control" required placeholder="Ej: Carlos Pérez">
            </div>
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label fw-bold">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="form-control" required placeholder="ejemplo@sena.edu.co">
            </div>
        </div>

        <!-- Área y Centro de Formación -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="area_id" class="form-label fw-bold">Área Técnica</label>
                <select name="area_id" id="area_id" class="form-select" required>
                    <option value="">-- Seleccione un Área --</option>
                    @foreach ($areas as $area)
                        <option value="{{ $area['id'] }}">{{ $area['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="training_center_id" class="form-label fw-bold">Centro de Formación</label>
                <select name="training_center_id" id="training_center_id" class="form-select" required>
                    <option value="">-- Seleccione un Centro --</option>
                    @foreach ($training_centers as $center)
                        <option value="{{ $center['id'] }}">{{ $center['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Guardar Instructor
        </button>
        <a href="{{ route('teacher.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection