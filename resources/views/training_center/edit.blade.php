@extends('layouts.app')

@section('content')
<h1>Actualizar Centro de Formación</h1>
<br>

<form action="{{ route('training_center.update', $training_center['id']) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <label>
        Nombre:
        <br>
        <input type="text" name="name" class="form-control" value="{{ old('name', $training_center['name'] ?? '') }}" required>
    </label>
    <br><br>

    <label>
        Ubicación:
        <br>
        <input type="text" name="location" class="form-control" value="{{ old('location', $training_center['location'] ?? '') }}" required>
    </label>
    <br><br>

    <!-- Sección de Imagen Actual e input para cambiarla -->
    <div class="mb-3">
        <label class="form-label">Imagen Actual:</label>
        <br>
        @if(!empty($training_center['imagen_url']))
        <img src="{{ $training_center['imagen_url'] }}" alt="{{ $training_center['name'] ?? 'Centro' }}" width="120" class="img-thumbnail mb-2">
        @else
        <p class="text-muted">No tiene imagen registrada</p>
        @endif
        <br>
        <label class="form-label">Cambiar Imagen (Opcional):</label>
        <input type="file" name="imagen" class="form-control" accept="image/*">
    </div>
    <br>

    <button type="submit" class="btn btn-outline-success btn-sm">Actualizar Centro de Formación</button>
    <br><br>

    <a href="{{ route('training_center.index') }}" class="btn btn-success mb-3">
        <i class="bi bi-arrow-left"></i> Volver
    </a>

</form>
@endsection