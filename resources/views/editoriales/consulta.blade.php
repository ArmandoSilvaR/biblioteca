@extends('layouts.app')

@section('content')
<h1>Lista de Editoriales</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($editoriales as $editorial)
        <tr>
            <td>{{ $editorial->id }}</td>
            <td>{{ $editorial->nombre }}</td>
            <td>{{ $editorial->direccion }}</td>
            <td>{{ $editorial->telefono }}</td>
            <td>
                <a href="{{ route('editorial.edit', $editorial->id) }}">Editar</a> |
                <form action="{{ route('editorial.destroy', $editorial->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('editorial.create') }}">Crear nueva editorial</a>
@endsection
