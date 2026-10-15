@extends('layouts.app')

@section('content')

<h1>Crear Curso</h1>

<form action="{{ route('course.store') }}" method="POST">

    @csrf


    <label>
        Número de curso:
        <br>
        <input type="number" name="course_number" required>
    </label>

    <br><br>


    <label>
        Fecha:
    </label>

    <br>

    <input type="date" name="day" required>

    <br><br>


    <label for="area_id">
        Área:
    </label>

    <br>

    <select name="area_id" id="area_id" class="form-control" required>

        <option value="">
            Seleccione un área
        </option>


        @foreach($areas as $area)

        <option value="{{ $area->id }}">
            {{ $area->name }}
        </option>

        @endforeach


    </select>


    <br><br>


    <label for="training_center_id">
        Centro de formación:
    </label>

    <br>

    <select name="training_center_id" id="training_center_id" class="form-control" required>

        <option value="">
            Seleccione un centro
        </option>


        @foreach($training_centers as $training_center)

        <option value="{{ $training_center->id }}">
            {{ $training_center->name }}
        </option>

        @endforeach


    </select>


    <br><br>


    <button type="submit" class="btn btn-success">
        Guardar Curso
    </button>


</form>

@endsection