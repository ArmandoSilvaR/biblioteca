@extends('layouts.app')

@section('content')
<h1>Agregar Nueva Editorial</h1>
<form action="{{ route('editorial.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion">
    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono">
    <button type="submit">Guardar</button>
</form>
<a href="{{ route('editorial.index') }}">Regresar</a>
@endsection
