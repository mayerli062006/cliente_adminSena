@extends('layouts.app')

@section('content')

<h1>Editar Curso</h1>


<form action="{{ route('course.update', $course->id) }}" method="POST">

    @csrf
    @method('PUT')


    <label>
        Número de curso:
    </label>

    <br>

    <input 
        type="number" 
        name="course_number"
        value="{{ $course->name_curso }}"
        required
    >


    <br><br>


    <label>
        Fecha:
    </label>

    <br>

    <input 
        type="date" 
        name="day"
        value="{{ $course->day }}"
        required
    >


    <br><br>


    <label>
        Área:
    </label>

    <br>


    <select name="area_id" class="form-control" required>


        <option value="">
            Seleccione un área
        </option>


        @foreach($areas as $area)

            <option 
                value="{{ $area->id }}"
                {{ $course->area_id == $area->id ? 'selected' : '' }}
            >

                {{ $area->name }}

            </option>


        @endforeach


    </select>


    <br><br>



    <label>
        Centro de formación:
    </label>

    <br>


    <select name="training_center_id" class="form-control" required>


        <option value="">
            Seleccione un centro
        </option>


        @foreach($training_centers as $training_center)

            <option 
                value="{{ $training_center->id }}"
                {{ $course->training_centers_id == $training_center->id ? 'selected' : '' }}
            >

                {{ $training_center->name }}

            </option>


        @endforeach


    </select>


    <br><br>



    <button type="submit" class="btn btn-success">
        Actualizar Curso
    </button>


</form>


@endsection