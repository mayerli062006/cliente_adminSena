@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">
                {{ $training_center['name'] ?? '' }}
            </h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control bg-light">
                        {{ $training_center['id'] ?? '' }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Nombre</label>
                    <div class="form-control bg-light">
                        {{ $training_center['name'] ?? '' }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Ubicación</label>
                    <div class="form-control bg-light">
                        {{ $training_center['location'] ?? '' }}
                    </div>
                </div>

                <!-- Sección de la Imagen del Centro de Formación -->
                <div class="col-md-6 mb-3">
                    <label class="fw-bold d-block">Imagen del Centro</label>
                    @if(!empty($training_center['imagen_url']))
                        <div class="mt-1">
                            <img src="{{ $training_center['imagen_url'] }}" alt="{{ $training_center['name'] ?? 'Centro' }}" width="180" class="img-thumbnail shadow-sm">
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
                        @if(!empty($training_center['created_at']))
                            {{ \Carbon\Carbon::parse($training_center['created_at'])->format('d/m/Y H:i') }}
                        @else
                            N/A
                        @endif
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control bg-light">
                        @if(!empty($training_center['updated_at']))
                            {{ \Carbon\Carbon::parse($training_center['updated_at'])->format('d/m/Y H:i') }}
                        @else
                            N/A
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-4">
        <a href="{{ route('training_center.index') }}" class="btn btn-success"><i class="bi bi-arrow-left"></i> Volver </a>
    </div>
    <br>

</div>
@endsection