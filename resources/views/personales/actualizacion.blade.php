@extends('layouts.app')

@section('content')
<h1>Editar Personal</h1>
<form action="{{ route('personal.update', $personal->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{ $personal->nombre }}" required>
    <label for="salario">Salario:</label>
    <input type="number" name="salario" value="{{ $personal->salario }}" required>
    <label for="horario">Horario:</label>
    <input type="text" name="horario" value="{{ $personal->horario }}" required>
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('personal.index') }}">Regresar</a>
@endsection
