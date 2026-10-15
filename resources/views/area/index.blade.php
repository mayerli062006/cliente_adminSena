@extends('layouts.app')

@section('content')
    <h1>Lista de Areas</h1>
    <br>
    <a href="{{ route('areas.create') }}" class="btn btn-success mb-3">
        <i class="bi bi-plus-circle"></i> Nueva Area
    </a>
     <div class="container">
        <table id="idArea" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th colspan="3">Acción</th>
                </tr>
            </thead>

            <tbody>

                
                    
                    @foreach ($areas as $area)
                    <tr>
                        <td>{{ $area['id'] }}</td>
                        <td>{{ $area['name']}}</td>


                        <td>
                            <a href="{{ route('areas.show', $area['id']) }}">Mostrar</a>
                        </td>
                        
                        <td>
                            <a href="{{ route('areas.edit', $area['id']) }}">Editar</a>
                        </td>

                        <td>
                        <form action="{{ route('areas.destroy', $area['id']) }}" method="POST">
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