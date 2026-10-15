@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <h1>Formulario Aprendices</h1>

    <form action="{{ route('apprentice.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre:</label>

            <input
                type="text"
                name="name"
                class="form-control"
                required
            >
        </div>

        <div class="mb-3">
            <label class="form-label">Email:</label>

            <input
                type="email"
                name="email"
                class="form-control"
                required
            >
        </div>

        <div class="mb-3">
            <label class="form-label">Número de teléfono:</label>

            <input
                type="text"
                name="cell_number"
                class="form-control"
                required
            >
        </div>

        <div class="mb-3">
            <label class="form-label">Curso:</label>

            <select name="course_id" class="form-control" required>

                <option value="">Seleccione un curso</option>

                @foreach($courses as $course)
                    <option value="{{ $course->id }}">
                        {{ $course->name_curso }}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Equipo:</label>

            <select name="computer_id" class="form-control" required>

                <option value="">Seleccione un equipo</option>

                @foreach($computers as $computer)
                    <option value="{{ $computer->id }}">
                        {{ $computer->numero }}
                    </option>
                @endforeach

            </select>
        </div>

        <button type="submit" class="btn btn-success">
            Enviar Formulario
        </button>

        <a href="{{ route('apprentice.index') }}" class="btn btn-secondary">
            Volver
        </a>

    </form>

</div>

@endsection