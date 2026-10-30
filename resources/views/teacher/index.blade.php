@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Instructores / Profesores</h1>
    <a href="{{ route('teacher.create') }}" class="btn btn-success mb-3">Nuevo Profesor</a>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Área ID</th>
                <th>Centro ID</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers ?? [] as $teacher)
            <tr>
                <td>{{ $teacher['id'] ?? '' }}</td>
                <td>{{ $teacher['name'] ?? '' }}</td>
                <td>{{ $teacher['email'] ?? '' }}</td>
                <td>{{ $teacher['area_id'] ?? '' }}</td>
                <td>{{ $teacher['training_center_id'] ?? '' }}</td>
                <td>
                    <a href="{{ route('teacher.show', $teacher['id']) }}" class="btn btn-info btn-sm">Ver</a>
                </td>
                <td>
                    <a href="{{ route('teacher.edit', $teacher['id']) }}" class="btn btn-warning btn-sm">Editar</a>
                </td>
                <td>
                    <form action="{{ route('teacher.destroy', $teacher['id']) }}" method="POST" style="display:inline;">
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