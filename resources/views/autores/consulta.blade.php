@extends('layouts.app')

@section('content')
<h1>Lista de Autores</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de Nacimiento</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($autores as $autor)
        <tr>
            <td>{{ $autor->id }}</td>
            <td>{{ $autor->nombre }}</td>
            <td>{{ $autor->apellido }}</td>
            <td>{{ $autor->fecha_nacimiento }}</td>
            <td>
                <a href="{{ route('autor.edit', $autor->id) }}">Editar</a> |
                <form action="{{ route('autor.destroy', $autor->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('autor.create') }}">Crear nuevo autor</a>
@endsection
