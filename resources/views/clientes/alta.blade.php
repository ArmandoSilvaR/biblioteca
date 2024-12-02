@extends('layouts.app')

@section('content')
<h1>Agregar Nuevo Cliente</h1>
<form action="{{ route('cliente.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" required>
    <label for="correo">Correo:</label>
    <input type="email" name="correo" required>
    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono">
    <button type="submit">Guardar</button>
</form>
<a href="{{ route('cliente.index') }}">Regresar</a>
@endsection
