@extends('layouts.app')

@section('content')
    <h1>Formulario Registrar Computador</h1>
    <br>

    <form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Número:
            <br>
            <input type="number" name="numero" class="form-control" value="{{ old('numero') }}" required>
        </label>
        <br><br>

        <label>
            Marca:
            <br>
            <input type="text" name="marca" class="form-control" value="{{ old('marca') }}" required>
        </label>
        <br><br>

        <div class="mb-3">
            <label class="form-label">Imagen</label>
            <input type="file" name="imagen" class="form-control" accept="image/*" required>
        </div>
        <br>

        <button type="submit" class="btn btn-outline-success btn-sm">Enviar Formulario</button>
        <br><br>

    </form>
@endsection