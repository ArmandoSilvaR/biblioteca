@extends('layouts.app')

@section('content')
<h1>Lista de Secciones</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Ubicación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($secciones as $seccion)
        <tr>
            <td>{{ $seccion->id }}</td>
            <td>{{ $seccion->nombre }}</td>
            <td>{{ $seccion->ubicacion }}</td>
            <td>
                <a href="{{ route('seccion.edit', $seccion->id) }}">Editar</a> |
                <form action="{{ route('seccion.destroy', $seccion->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('seccion.create') }}">Crear nueva sección</a>
@endsection
