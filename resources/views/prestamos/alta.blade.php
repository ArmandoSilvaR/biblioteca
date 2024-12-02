@extends('layouts.app')

@section('content')
<h1>Registrar Nuevo Préstamo</h1>
<form action="{{ route('prestamo.store') }}" method="POST">
    @csrf
    <label for="id_cliente">Cliente:</label>
    <select name="id_cliente" required>
        @foreach($clientes as $cliente)
        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
        @endforeach
    </select>

    <label for="id_articulo">Artículo:</label>
    <select name="id_articulo" required>
        @foreach($articulos as $articulo)
        <option value="{{ $articulo->id }}">{{ $articulo->titulo }}</option>
        @endforeach
    </select>

    <label for="id_personal">Personal:</label>
    <select name="id_personal" required>
        @foreach($personales as $personal)
        <option value="{{ $personal->id }}">{{ $personal->nombre }}</option>
        @endforeach
    </select>

    <label for="fecha_prestamo">Fecha de Préstamo:</label>
    <input type="date" name="fecha_prestamo" required>

    <label for="fecha_devolucion">Fecha de Devolución:</label>
    <input type="date" name="fecha_devolucion" required>

    <button type="submit">Guardar</button>
</form>
<a href="{{ route('prestamo.index') }}">Regresar</a>
@endsection
