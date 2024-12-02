@extends('layouts.app')

@section('content')
<h1>Editar Sección</h1>
<form action="{{ route('seccion.update', $seccion->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{ $seccion->nombre }}" required>
    <label for="ubicacion">Ubicación:</label>
    <input type="text" name="ubicacion" value="{{ $seccion->ubicacion }}">
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('seccion.index') }}">Regresar</a>
@endsection
