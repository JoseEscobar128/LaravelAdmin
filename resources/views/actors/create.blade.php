@extends('adminlte::page')

@section('title', 'Crear Actor')

@section('content_header')
    <h1>Crear Actor</h1>
@stop

@section('content')
    <form action="{{ route('actors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">Nombre</label>
            <input type="text" id="first_name" name="first_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="last_name">Apellido</label>
            <input type="text" id="last_name" name="last_name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@stop
