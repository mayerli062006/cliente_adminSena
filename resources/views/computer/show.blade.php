@extends('layouts.app')

@section('content')

@php
// Extraemos los datos de forma segura, soportando tanto arreglos como objetos
$id = is_array($computer) ? ($computer['id'] ?? '') : ($computer->id ?? '');
$numero = is_array($computer) ? ($computer['number'] ?? $computer['numero'] ?? 'Sin número') : ($computer->number ?? $computer->numero ?? 'Sin número');
$marca = is_array($computer) ? ($computer['brand'] ?? $computer['marca'] ?? 'Sin marca') : ($computer->brand ?? $computer->marca ?? 'Sin marca');
$imagen_url = is_array($computer) ? ($computer['imagen_url'] ?? '') : ($computer->imagen_url ?? '');
$createdAt = is_array($computer) ? ($computer['created_at'] ?? null) : ($computer->created_at ?? null);
$updatedAt = is_array($computer) ? ($computer['updated_at'] ?? null) : ($computer->updated_at ?? null);
@endphp

<div class="container mt-5">

    <div class="card shadow-lg border-0">

        <div class="card-header text-white" style="background-color: #25c72f;">
            <h3 class="mb-0">
                Computador #{{ $numero }}
            </h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control bg-light">
                        {{ $id }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Número</label>
                    <div class="form-control bg-light">
                        {{ $numero }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Marca</label>
                    <div class="form-control bg-light">
                        {{ $marca }}
                    </div>
                </div>

                <!-- Sección de la Imagen del Computador -->
                <div class="col-md-6 mb-3">
                    <label class="fw-bold d-block">Imagen del Computador</label>
                    @if(!empty($imagen_url))
                        <div class="mt-1">
                            <img src="{{ $imagen_url }}" alt="Computador {{ $numero }}" width="180" class="img-thumbnail shadow-sm">
                        </div>
                    @else
                        <div class="form-control bg-light text-muted">
                            Sin imagen registrada
                        </div>
                    @endif
                </div>

            </div>

            <hr>

            <div class="row">

                <div class="col-md-6">
                    <label class="fw-bold">Fecha de creación</label>
                    <div class="form-control bg-light">
                        {{ $createdAt ? \Carbon\Carbon::parse($createdAt)->format('d/m/Y H:i') : 'N/A' }}
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control bg-light">
                        {{ $updatedAt ? \Carbon\Carbon::parse($updatedAt)->format('d/m/Y H:i') : 'N/A' }}
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="d-flex justify-content-end mt-4">
        <a href="{{ route('computer.index') }}" class="btn btn-success">
            <i class="bi bi-arrow-left"></i> Volver
        </a>
    </div>

    <br>

</div>
@endsection