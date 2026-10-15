@extends('layouts.app')

@section('content')
    <h1>Actualizar Computador</h1>
    <br>

    <form action="{{ route('computer.update', $computer) }}" method="POST">

        @csrf
        @method('PUT')

        <label>
            Número:
            <br>
            <input type="number" name="numero" value="{{ old('numero', $computer->numero) }}">
        </label>
        <br><br>

        <label>
            Marca:
            <br>
            <input type="text" name="marca" value="{{ old('marca', $computer->marca) }}">
        </label>
        <br><br>

        <button type="submit" class="btn btn-primary">
            Actualizar Computador
        </button>

        <br><br>

        <a href="{{ route('computer.index') }}" class="btn btn-success">
            <i class="bi bi-arrow-left"></i> Volver
        </a>

    </form>

@endsection