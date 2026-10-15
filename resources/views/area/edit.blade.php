@extends('layouts.app')

@section('content')
<h1>Editar Area</h1>
<br>

<!-- Cambiado $area->id por $area['id'] -->
<form action="{{ route('areas.update', $area['id']) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('put')

    <label>
        Nombre:
        <br>

        <input type="text" name="name" value="{{ old('name', $area['name']) }}">
    </label>
    <br><br>

    <button type="submit">Actualizar Area</button>
    <br>
    <br>
    <a href="{{ route('areas.index') }}" class="btn btn-success mb-3">
        <i class="bi bi-arrow-left"></i> Volver </a>

</form>
@endsection