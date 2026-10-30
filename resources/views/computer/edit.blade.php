@extends('layouts.app')

@section('content')

@php
// Obtenemos los valores de forma segura para evitar errores si viene como array u objeto
$id = is_array($computer) ? ($computer['id'] ?? '') : ($computer->id ?? '');
$numero = is_array($computer) ? ($computer['number'] ?? $computer['numero'] ?? '') : ($computer->number ?? $computer->numero ?? '');
$marca = is_array($computer) ? ($computer['brand'] ?? $computer['marca'] ?? '') : ($computer->brand ?? $computer->marca ?? '');
$imagen_url = is_array($computer) ? ($computer['imagen_url'] ?? '') : ($computer->imagen_url ?? '');
@endphp

<h1>Actualizar Computador</h1>
<br>

<form action="{{ route('computer.update', $id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <label>
        Número:
        <br>
        <input type="number" name="numero" class="form-control" value="{{ old('numero', $numero) }}" required>
    </label>
    <br><br>

    <label>
        Marca:
        <br>
        <input type="text" name="marca" class="form-control" value="{{ old('marca', $marca) }}" required>
    </label>
    <br><br>

    <!-- Sección de Imagen Actual e input para cambiarla -->
    <div class="mb-3">
        <label class="form-label fw-bold">Imagen Actual:</label>
        <br>
        @if(!empty($imagen_url))
            <img src="{{ $imagen_url }}" alt="Computador {{ $numero }}" width="120" class="img-thumbnail mb-2">
        @else
            <p class="text-muted">No tiene imagen registrada</p>
        @endif
        <br>
        <label class="form-label mt-2">Cambiar Imagen (Opcional):</label>
        <input type="file" name="imagen" class="form-control" accept="image/*">
    </div>
    <br>

    <button type="submit" class="btn btn-primary">
        Actualizar Computador
    </button>

    <br><br>

    <a href="{{ route('computer.index') }}" class="btn btn-success">
        <i class="bi bi-arrow-left"></i> Volver
    </a>

</form>

@endsection