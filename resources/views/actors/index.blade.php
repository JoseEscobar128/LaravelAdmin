@extends('adminlte::page')

@section('title', 'Listado de Actores')

@section('content_header')
    <h1>Listado de Actores</h1>
@stop

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($actors as $actor)
                <tr>
                    <td>{{ $actor->actor_id }}</td>
                    <td>{{ $actor->first_name }}</td>
                    <td>{{ $actor->last_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación -->
    <div class="d-flex justify-content-center">
        {{ $actors->links('vendor.pagination.bootstrap-4') }}
    </div>
@stop
