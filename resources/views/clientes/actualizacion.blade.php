@extends('layouts.app')

@section('content')
<h1>Editar Cliente</h1>
<form action="{{ route('cliente.update', $cliente->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{ $cliente->nombre }}" required>
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" value="{{ $cliente->apellido }}" required>
    <label for="correo">Correo:</label>
    <input type="email" name="correo" value="{{ $cliente->correo }}" required>
    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" value="{{ $cliente->telefono }}">
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('cliente.index') }}">Regresar</a>
@endsection
