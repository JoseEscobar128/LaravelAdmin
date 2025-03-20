@extends('adminlte::page')

@section('title', 'Editar Actor')

@section('content_header')
    <h1>Editar Actor</h1>
@stop

@section('content')
    <form action="{{ route('actors.update', $actor) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">Nombre</label>
            <input type="text" id="first_name" name="first_name" class="form-control" value="{{ $actor->first_name }}" required>
        </div>
        <div class="form-group">
            <label for="last_name">Apellido</label>
            <input type="text" id="last_name" name="last_name" class="form-control" value="{{ $actor->last_name }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar</button>
    </form>
@stop
