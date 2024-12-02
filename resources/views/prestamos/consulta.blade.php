@extends('layouts.app')

@section('content')
<h1>Lista de Préstamos</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Artículo</th>
            <th>Personal</th>
            <th>Fecha de Préstamo</th>
            <th>Fecha de Devolución</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($prestamos as $prestamo)
        <tr>
            <td>{{ $prestamo->id }}</td>
            <td>{{ $prestamo->clientes->nombre }}</td>
            <td>{{ $prestamo->articulo->titulo }}</td>
            <td>{{ $prestamo->personal->nombre }}</td>
            <td>{{ $prestamo->fecha_prestamo }}</td>
            <td>{{ $prestamo->fecha_devolucion }}</td>
            <td>
                <a href="{{ route('prestamo.edit', $prestamo->id) }}">Editar</a> |
                <form action="{{ route('prestamo.destroy', $prestamo->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('prestamo.create') }}">Registrar nuevo préstamo</a>
@endsection
