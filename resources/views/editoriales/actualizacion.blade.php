@extends('layouts.app')

@section('content')
<h1>Editar Editorial</h1>
<form action="{{ route('editorial.update', $editorial->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{ $editorial->nombre }}" required>
    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" value="{{ $editorial->direccion }}">
    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" value="{{ $editorial->telefono }}">
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('editorial.index') }}">Regresar</a>
@endsection
