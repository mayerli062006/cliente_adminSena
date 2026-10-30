@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Lista de Centros de Formación</h1>
    <br>

    <!-- Botón de Nuevo Centro fuera de la tabla -->
    <a href="{{ route('training_center.create') }}" class="btn btn-success mb-3">
        <i class="bi bi-plus-circle"></i> Nuevo Centro de Formación
    </a>

    <div class="table-responsive">
        <table id="idTraining_center" class="table table-striped table-bordered align-middle" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Imagen</th>
                    <th colspan="3" class="text-center">Acción</th>
                </tr>
            </thead>

            <tbody>
                @php
                // Aseguramos de forma limpia que sea un arreglo antes de recorrerlo
                $centers = is_array($training_centers ?? null) ? $training_centers : [];
                @endphp

                @forelse ($centers as $training_center)
                <tr>
                    <td>{{ $training_center['id'] ?? '' }}</td>
                    <td>{{ $training_center['name'] ?? '' }}</td>
                    <td>{{ $training_center['location'] ?? '' }}</td>
                    <td>
                        @if(!empty($training_center['imagen_url']))
                        <img src="{{ $training_center['imagen_url'] }}" alt="{{ $training_center['name'] ?? 'Centro' }}" width="100" class="img-thumbnail">
                        @else
                        <span class="text-muted">Sin imagen</span>
                        @endif
                    </td>

                    <td class="text-center">
                        <a href="{{ route('training_center.show', $training_center['id']) }}" class="btn btn-info btn-sm">Mostrar</a>
                    </td>

                    <td class="text-center">
                        <a href="{{ route('training_center.edit', $training_center['id']) }}" class="btn btn-warning btn-sm">Editar</a>
                    </td>

                    <td class="text-center">
                        <form action="{{ route('training_center.destroy', $training_center['id']) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este centro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center py-4 text-muted">
                        No hay centros de formación registrados.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <br>
</div>
@endsection