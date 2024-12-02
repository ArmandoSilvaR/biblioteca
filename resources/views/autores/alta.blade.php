@extends('layouts.app')

@section('content')
<h1>Agregar Nuevo Autor</h1>
<form action="{{ route('autor.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" required>
    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="date" name="fecha_nacimiento">
    <button type="submit">Guardar</button>
</form>
<a href="{{ route('autor.index') }}">Regresar</a>
@endsection
