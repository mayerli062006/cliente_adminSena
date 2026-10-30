@extends('layouts.app')

@section('content')
    <h1>Formulario Registrar Centro de Formación</h1>

    <form action="{{ route('training_center.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" class="form-control" required>
        </label>
        
        <br><br>

        <label>
            Ubicación:
            <br>
            <input type="text" name="location" class="form-control" required>
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