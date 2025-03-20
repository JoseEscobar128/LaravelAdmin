@extends('adminlte::page')

@section('title', 'Listado de Actores')

@section('content_header')
    <h1>Listado de Actores</h1>
    <a href="{{ route('actors.create') }}" class="btn btn-primary">Crear Actor</a>
@stop

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($actors as $actor)
        <tr>
            <td>{{ $actor->actor_id }}</td> <!-- Cambia 'id' por 'actor_id' -->
            <td>{{ $actor->first_name }}</td>
            <td>{{ $actor->last_name }}</td>
            <td>
                <a href="{{ route('actors.edit', $actor->actor_id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('actors.destroy', $actor->actor_id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>

    </table>

    <!-- Paginación -->
    <div class="d-flex justify-content-center">
        {{ $actors->links('vendor.pagination.bootstrap-4') }}
    </div>
@stop
