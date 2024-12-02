@extends('layouts.app')

@section('content')
<h1>Agregar Nuevo Personal</h1>
<form action="{{ route('personal.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    <label for="salario">Salario:</label>
    <input type="number" name="salario" required>
    <label for="horario">Horario:</label>
    <input type="text" name="horario" required>
    <button type="submit">Guardar</button>
</form>
<a href="{{ route('personal.index') }}">Regresar</a>
@endsection
