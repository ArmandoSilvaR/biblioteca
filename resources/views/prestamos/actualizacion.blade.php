@extends('layouts.app')

@section('content')
<h1>Editar Préstamo</h1>
<form action="{{ route('prestamo.update', $prestamo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="id_cliente">Cliente:</label>
    <select name="id_cliente" required>
        @foreach($clientes as $cliente)
        <option value="{{ $cliente->id }}" {{ $prestamo->id_cliente == $cliente->id ? 'selected' : '' }}>
            {{ $cliente->nombre }} {{ $cliente->apellido }}
        </option>
        @endforeach
    </select>

    <label for="id_articulo">Artículo:</label>
    <select name="id_articulo" required>
        @foreach($articulos as $articulo)
        <option value="{{ $articulo->id }}" {{ $prestamo->id_articulo == $articulo->id ? 'selected' : '' }}>
            {{ $articulo->titulo }}
        </option>
        @endforeach
    </select>

    <label for="id_personal">Personal:</label>
    <select name="id_personal" required>
        @foreach($personales as $personal)
        <option value="{{ $personal->id }}" {{ $prestamo->id_personal == $personal->id ? 'selected' : '' }}>
            {{ $personal->nombre }}
        </option>
        @endforeach
    </select>

    <label for="fecha_prestamo">Fecha de Préstamo:</label>
    <input type="date" name="fecha_prestamo" value="{{ $prestamo->fecha_prestamo }}" required>

    <label for="fecha_devolucion">Fecha de Devolución:</label>
    <input type="date" name="fecha_devolucion" value="{{ $prestamo->fecha_devolucion }}" required>

    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('prestamo.index') }}">Regresar</a>
@endsection
