@extends('layouts.app')

@section('content')

    <h1>Formulario Registrar Computador</h1>

    <form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Número:
            <br>
            <input type="number" name="numero" value="{{ old('numero') }}">
        </label>
        <br><br>

        <label>
            Marca:
            <br>
            <input type="text" name="marca" value="{{ old('marca') }}">
        </label>
        <br><br>

        <button type="submit" class="btn btn-success">Enviar Formulario</button>

    </form>

@endsection