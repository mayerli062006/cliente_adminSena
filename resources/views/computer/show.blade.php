@extends('layouts.app')

@section('content')

@php
// Extraemos los datos de forma segura, soportando tanto arreglos como objetos
$id = is_array($computer) ? ($computer['id'] ?? '') : ($computer->id ?? '');
$numero = is_array($computer) ? ($computer['number'] ?? $computer['numero'] ?? 'Sin número') : ($computer->number ?? $computer->numero ?? 'Sin número');
$marca = is_array($computer) ? ($computer['brand'] ?? $computer['marca'] ?? 'Sin marca') : ($computer->brand ?? $computer->marca ?? 'Sin marca');
$createdAt = is_array($computer) ? ($computer['created_at'] ?? null) : ($computer->created_at ?? null);
$updatedAt = is_array($computer) ? ($computer['updated_at'] ?? null) : ($computer->updated_at ?? null);
@endphp

<div class="container mt-5">

    <div class="card shadow-lg border-0">

        <div class="card-header text-white" style="background-color: #25c72f;">
            <h3 class="mb-0">
                {{ $numero }}
            </h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control">
                        {{ $id }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Número</label>
                    <div class="form-control">
                        {{ $numero }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Marca</label>
                    <div class="form-control">
                        {{ $marca }}
                    </div>
                </div>

            </div>

            <hr>

            <div class="row">

                <div class="col-md-6">
                    <label class="fw-bold">Fecha de creación</label>
                    <div class="form-control">
                        {{ $createdAt ? \Carbon\Carbon::parse($createdAt)->format('d/m/Y H:i') : 'N/A' }}
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control">
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