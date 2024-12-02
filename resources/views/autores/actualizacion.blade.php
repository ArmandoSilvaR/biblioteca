@extends('layouts.app')

@section('content')
<h1>Editar Autor</h1>
<form action="{{ route('autor.update', $autor->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{ $autor->nombre }}" required>
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" value="{{ $autor->apellido }}" required>
    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="date" name="fecha_nacimiento" value="{{ $autor->fecha_nacimiento }}">
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('autor.index') }}">Regresar</a>
@endsection
