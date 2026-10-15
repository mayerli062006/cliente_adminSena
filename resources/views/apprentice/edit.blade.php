@extends('layouts.app')

@section('content')

<h1>Actualizar Aprendiz</h1>

<br>

<form action="{{ route('apprentice.update', $apprentice) }}" method="POST">

    @csrf
    @method('PUT')


    <label>
        Nombre:
        <br>

        <input 
            type="text" 
            name="name" 
            value="{{ old('name', $apprentice->name_apren) }}"
        >

    </label>

    <br><br>


    <label>
        Email:
        <br>

        <input 
            type="email" 
            name="email" 
            value="{{ old('email', $apprentice->email) }}"
        >

    </label>


    <br><br>


    <label>
        Numero de Celular:
        <br>

        <input 
            type="number" 
            name="cell_number" 
            value="{{ old('cell_number', $apprentice->cell) }}"
        >

    </label>


    <br><br>


    <label>
        Curso:
    </label>

    <br>


    <select name="course_id" class="form-control">

        <option value="">
            Seleccione un curso
        </option>


        @foreach($courses as $course)

            <option 
                value="{{ $course->id }}"
                {{ $apprentice->course_id == $course->id ? 'selected' : '' }}
            >

                {{ $course->name_curso }}

            </option>


        @endforeach


    </select>


    <br><br>


    <label>
        Equipo:
    </label>

    <br>


    <select name="computer_id" class="form-control">

        <option value="">
            Seleccione un equipo
        </option>


        @foreach($computers as $computer)

            <option 
                value="{{ $computer->id }}"
                {{ $apprentice->computer_id == $computer->id ? 'selected' : '' }}
            >

                {{ $computer->numero }}

            </option>


        @endforeach


    </select>


    <br><br>


    <button type="submit">
        Actualizar Aprendiz
    </button>


    <br><br>


    <a href="{{ route('apprentice.index') }}" class="btn btn-success mb-3">
        <i class="bi bi-arrow-left"></i> Volver
    </a>


</form>


@endsection