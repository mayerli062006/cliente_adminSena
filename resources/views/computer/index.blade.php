@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Computadores</h1>

    <div class="mb-3">
        <a href="{{ route('computer.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nuevo Computador
        </a>
    </div>

    <table id="idComputador" class="table table-bordered table-striped" style="width:100%">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Número</th>
                <th>Marca</th>
                <th>Imagen</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($computers ?? [] as $computer)
                <tr>
                    <td>{{ $computer['id'] }}</td>
                    <td>{{ $computer['numero'] }}</td>
                    <td>{{ $computer['marca'] }}</td>
                    <td>
                        @if(!empty($computer['imagen_url']))
                            <img src="{{ $computer['imagen_url'] }}" alt="Computador {{ $computer['numero'] }}" width="80" class="img-thumbnail">
                        @else
                            <span class="text-muted">Sin imagen</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('computer.show', $computer['id']) }}" class="btn btn-info btn-sm">Mostrar</a>
                    </td>
                    <td>
                        <a href="{{ route('computer.edit', $computer['id']) }}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('computer.destroy', $computer['id']) }}" method="POST"
                            style="display: inline-block;"
                            onsubmit="return confirm('¿Estás seguro de eliminar este computador?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection