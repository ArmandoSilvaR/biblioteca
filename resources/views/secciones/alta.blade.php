@extends('layouts.app')

@section('content')
<h1>Agregar Nueva Sección</h1>
<form action="{{ route('seccion.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    <label for="ubicacion">Ubicación:</label>
    <input type="text" name="ubicacion">
    <button type="submit">Guardar</button>
</form>
<a href="{{ route('seccion.index') }}">Regresar</a>
@endsection
