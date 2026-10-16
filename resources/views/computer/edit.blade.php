@extends('layouts.app')

@section('content')

@php
// Obtenemos los valores de forma segura para evitar errores si viene como array u objeto
$id = is_array($computer) ? ($computer['id'] ?? '') : ($computer->id ?? '');
$numero = is_array($computer) ? ($computer['number'] ?? $computer['numero'] ?? '') : ($computer->number ?? $computer->numero ?? '');
$marca = is_array($computer) ? ($computer['brand'] ?? $computer['marca'] ?? '') : ($computer->brand ?? $computer->marca ?? '');
@endphp

<h1>Actualizar Computador</h1>
<br>

<form action="{{ route('computer.update', $id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>
        Número:
        <br>
        <input type="number" name="numero" value="{{ old('numero', $numero) }}">
    </label>
    <br><br>

    <label>
        Marca:
        <br>
        <input type="text" name="marca" value="{{ old('marca', $marca) }}">
    </label>
    <br><br>

    <button type="submit" class="btn btn-primary">
        Actualizar Computador
    </button>

    <br><br>

    <a href="{{ route('computer.index') }}" class="btn btn-success">
        <i class="bi bi-arrow-left"></i> Volver
    </a>

</form>

@endsection